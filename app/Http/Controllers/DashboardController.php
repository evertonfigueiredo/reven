<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalDiarios = Diario::count();  // Contagem de registros na tabela 'diario'

        $ultimosDiarios = Diario::whereNotNull('abertura')
            ->whereNotNull('max')
            ->whereNotNull('min')
            ->whereNotNull('fechamento')
            ->whereNotNull('range')
            ->orderBy('data', 'desc')
            ->take(10)
            ->get();

        // Calculando a média
        $mediaFechamento = $ultimosDiarios->avg('fechamento');
        $mediaAbertura = $ultimosDiarios->avg('abertura');
        $mediaMax = $ultimosDiarios->avg('max');
        $mediaMin = $ultimosDiarios->avg('min');
        $mediaRange = $ultimosDiarios->avg('range');

        // Consulta para verificar se existe algum registro no dia de hoje
        $hoje = Carbon::today();  // Obtém a data de hoje

        $registroHoje = Diario::whereDate('data', $hoje)->exists();

        $p_max = 0;
        $p_min = 0;
        $p_fechamento = 0;
        $abertura = 0;

        // Se existir registro no dia de hoje, os valores já estarão definidos
        if ($registroHoje) {
            $dadosHoje = Diario::whereDate('data', $hoje)->first();
            
            $p_max = $mediaMax + ($dadosHoje->abertura - $mediaAbertura); 
            $p_min = $mediaMin + ($dadosHoje->abertura - $mediaAbertura); 
            $p_fechamento = $mediaFechamento + ($dadosHoje->abertura - $mediaAbertura); 
            $abertura = $dadosHoje->abertura;
        }

        return view('dashboard', compact(
            'totalDiarios', 
            'ultimosDiarios', 
            'mediaFechamento', 
            'mediaAbertura', 
            'mediaMax', 
            'mediaMin', 
            'mediaRange', 
            'p_max', 
            'p_min', 
            'p_fechamento',
            'abertura'
        ));
    }
}
