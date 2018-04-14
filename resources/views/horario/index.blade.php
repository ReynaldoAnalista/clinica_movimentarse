@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/horario/index.css') }}">
@stop

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <button class='btn btn-success'>Alterar Agendamentos</button>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class='table table-bordered' id='tbl_horarios'>
                <thead>
                    <tr>
                        <th>-</th>
                        <th>Seg</th>
                        <th>Ter</th>
                        <th>Qua</th>
                        <th>Qui</th>
                        <th>Sex</th>
                        <th>Sab</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>08:00</td>
                        <td>Dinalva</td>
                        <td>Sophia</td>
                        <td>Felipe Luiz</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript" src="{{ asset('js/horario/index.js') }}"></script>
@stop