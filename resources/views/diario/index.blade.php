@extends('layouts.app')

@section('template_title')
    Diarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Diarios') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('diarios.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Adicionar Dados') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Data</th>
                                        <th>Abertura</th>
                                        <th>Max</th>
                                        <th>Min</th>
                                        <th>Fechamento</th>
                                        <th>Range</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diarios as $diario)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($diario->data)->format('d/m/Y') }}</td>
                                            <td>{{ $diario->abertura }}</td>
                                            <td>{{ $diario->max }}</td>
                                            <td>{{ $diario->min }}</td>
                                            <td>{{ $diario->fechamento }}</td>
                                            <td>{{ $diario->range }}</td>

                                            <td>
                                                <form action="{{ route('diarios.destroy', $diario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('diarios.show', $diario->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('diarios.edit', $diario->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Deseja apagar essa informação?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Deletar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $diarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
