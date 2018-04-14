@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/horario/index.css') }}">
@stop

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <a type='button' href='/horario' class="btn btn-warning"><span class='glyphicon glyphicon-arrow-left' /> Voltar</a>
            <a type='button' href='/horario/update' class="btn btn-success"><span class='glyphicon glyphicon-ok-circle' /> Alterar</a>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-2">
            <label for="nm_indicacao_clinica">Nome da Sala:</label>
            <select name="id_sala" class="form-control" required>
                <option value="">Selecione</option>
                <option value="1" >Sala 1</option>
                <option value="2" >Sala 2</option>
                <option value="3" >Sala 3</option>
                <option value="4" >Sala 4</option>
                <option value="5" >Sala 5</option>
                <option value="6" >Sala 6</option>
                <option value="7" >Nutrição</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="id_horario" class="form-control" required>
                <option value="">Selecione</option>
                <option value="1" >8:00</option>
                <option value="2" >8:30</option>
                <option value="3" >9:00</option>
                <option value="4" >9:30</option>
                <option value="5" >10:00</option>
                <option value="6" >11:00</option>
                <option value="7" >11:30</option>
            </select>
        </div>
    </div>
@stop

@section('js')
    <script>

    </script>
@stop