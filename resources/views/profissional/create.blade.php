@extends('adminlte::page')

@section('title')
    Cadastro de Profissionais
@endsection

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <a type='button' href='/profissional' class="btn btn-warning"><span class='glyphicon glyphicon-arrow-left'/> Voltar</a>
        </div>
    </div>
@stop

@section('content')
{{ Form::open(array('url' => 'profissional', 'method' => 'post')) }}
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="nm_paciente">Nome:</label>
            <input type="text" name="nm_profissional" class='form-control'/>
        </div>
        <div class="col-md-4 form-group">
            <label for="id">Especialidade:</label>
            <select name="id_especialidade" class="form-control">
                <option value="">Selecione</option>
                @foreach ($especialidades as $especialidade)
                <option value="{{ $especialidade->id }}">{{ $especialidade->ds_profissional }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type='submit' class="btn btn-success"><span class='glyphicon glyphicon-save'/> Salvar</button>
        </div>
    </div>
@endsection