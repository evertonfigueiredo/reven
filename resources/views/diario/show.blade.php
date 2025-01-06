@extends('layouts.app')

@section('template_title')
    {{ $diario->name ?? __('Visualizar dados') . " " . __('diario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizar dados') }} diario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('diarios.index') }}"> {{ __('Voltar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Data:</strong>
                                    {{ \Carbon\Carbon::parse($diario->data)->format('d/m/Y') }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Abertura:</strong>
                                    {{ $diario->abertura }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Max:</strong>
                                    {{ $diario->max }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Min:</strong>
                                    {{ $diario->min }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechamento:</strong>
                                    {{ $diario->fechamento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Range:</strong>
                                    {{ $diario->range }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
