<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DiarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $diarios = Diario::orderBy('data', 'desc')->paginate();

        return view('diario.index', compact('diarios'))
            ->with('i', ($request->input('page', 1) - 1) * $diarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $diario = new Diario();

        return view('diario.create', compact('diario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiarioRequest $request): RedirectResponse
    {
        Diario::create($request->validated());

        return Redirect::route('diarios.index')
            ->with('success', 'Dados diarios atualizados.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $diario = Diario::find($id);

        return view('diario.show', compact('diario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $diario = Diario::find($id);

        return view('diario.edit', compact('diario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DiarioRequest $request, Diario $diario): RedirectResponse
    {
        $diario->update($request->validated());

        return Redirect::route('diarios.index')
            ->with('success', 'Diario updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Diario::find($id)->delete();

        return Redirect::route('diarios.index')
            ->with('success', 'Diario deleted successfully');
    }
}
