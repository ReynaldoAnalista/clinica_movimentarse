@extends('adminlte::page')

@section('title')
    Movimentarse - Profissionais
@endsection

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <a type='button' href='profissional/create' class="btn btn-primary"><span class='glyphicon glyphicon-plus'/> Cadastrar</a>
        </div>
    </div>
@stop

@section('content')

<div class="row">
    <div class="col-md-7">
        @if (count($profissionais) > 0)
        <table class='table table-bordered table-hover'>
            <thead>
                <tr class='text-center'>
                    <th class='text-center'>Nome</th>
                    <th class='text-center'>Especialidade</th>
                    <th class='text-center'>Opções</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($profissionais as $profissional)
                    <tr class='text-center'>
                        <td>{{ $profissional->nm_profissional }}</td>
                        <td>{{ $profissional->tipo_profissional->ds_profissional }}</td>
                        <td>
                            <a href='profissional/{{ $profissional->id }}/edit' title='Editar' class='btn btn-sm btn-warning'>
                                <span class='glyphicon glyphicon-edit' />
                            </a>
                            <a href='profissional/{{ $profissional->id }}'  title='Remover' class='btn btn-sm btn-danger'>
                                <span class='glyphicon glyphicon-remove' />
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>

@endsection

