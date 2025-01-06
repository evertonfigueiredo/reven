@extends('layouts.app')

@section('template_title')
    Dashboard
@endsection

@section('content')
    <h1>Bem-vindo ao Reven</h1>
    <div class="container mt-4">
        <div class="row">
            <!-- Card para a Média de Abertura -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-primary">
                    <div class="card-header">Média de Abertura</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $mediaAbertura }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card para a Média de Max -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-success">
                    <div class="card-header">Média de Max</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $mediaMax }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card para a Média de Min -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-warning">
                    <div class="card-header">Média de Min</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $mediaMin }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card para a Média de Fechamento -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-danger">
                    <div class="card-header">Média de Fechamento</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $mediaFechamento }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card para a Média de Range -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-info">
                    <div class="card-header">Média de Range</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $mediaRange }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <h1 class="mt-4">Previsão do Dia</h1>

    <div class="container mt-4">
        <div class="row">
            <!-- Card para a Média de Max -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-success">
                    <div class="card-header">Média de Max</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $p_max }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card para a Média de Min -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white bg-warning">
                    <div class="card-header">Média de Min</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $p_min }}</h5>
                    </div>
                </div>
            </div>

            <!-- Card para a Média de Fechamento -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card text-white {{ $p_fechamento > $abertura ? 'bg-success' : 'bg-danger' }}">
                    <div class="card-header">Média de Fechamento</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $p_fechamento }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
