@extends('adminlte::page')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <a href="index" class="btn btn-warning"><span class='glyphicon glyphicon-arrow-left'/> Voltar</a>
        </div>
    </div>
@stop

@section('content')
{{ Form::open(array('url' => 'paciente/store', 'method' => 'post', 'id' => 'FormPaciente')) }}
    <input type="hidden" name="id" value='{{ $paciente->id }}'/>
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="nm_paciente">Nome:</label>
            <input type="text" name="nm_paciente" class='col-md-12 form-control' value='{{ $paciente->nm_paciente }}'/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label for="dt_nascimento_paciente">Data de Nascimento:</label>
            <input type="text" id='dt_nasc_paciente' class='form-control' name='dt_nascimento_paciente' value='{{ $paciente->dt_nascimento_paciente }}' />
        </div>
        <div class="col-md-5">
            <label for="nm_pai">Nome do Pai:</label>
            <input type="text" class='form-control' name='nm_pai' value='{{ $paciente->nm_pai }}' />
        </div>
        <div class="col-md-5">
            <label for="nm_mae">Nome da Mãe:</label>
            <input type="text" class='form-control' name='nm_mae' value='{{ $paciente->nm_mae }}' />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nm_responsavel">Responsável:</label>
            <input type="text" class='form-control' name='nm_responsavel' value='{{ $paciente->nm_responsavel }}' />
        </div>
        <div class="col-md-3">
            <label for="nu_telefone">Número de Telefone:</label>
            <input type="text" id='nu_telefone' class='form-control' name='nu_telefone' value='{{ $paciente->nu_telefone }}' />
        </div>
        <div class="col-md-3">
            <label for="nu_celular">Número do Celular:</label>
            <input type="text" id='nu_celular' class='form-control' name='nu_celular' value='{{ $paciente->nu_celular }}' />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nm_indicacao">Indicado Por:</label>
            <input type="text" class='form-control' name='nm_indicacao' value='{{ $paciente->nm_indicacao }}'/>
        </div>
        <div class="col-md-6">
            <label for="nm_indicacao_clinica">Indicação Clínica:</label>
            <input type="text" class='form-control' name='nm_indicacao_clinica' value='{{ $paciente->nm_indicacao_clinica }}' />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nm_email">Endereço de Email:</label>
            {{ Form::email('nm_email', $paciente->nm_email , ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="row">
        <h3 class="display-4 col-md-3">Profissional que atende</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" style='height: 52px'>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='0' {{ ($paciente->id_tp_profissional == 0) ? 'checked' : '' }}> Fono</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='1' {{ ($paciente->id_tp_profissional == 1) ? 'checked' : '' }}> Psicólogo</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='2' {{ ($paciente->id_tp_profissional == 2) ? 'checked' : '' }}> Psicomotrista</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='3' {{ ($paciente->id_tp_profissional == 3) ? 'checked' : '' }}> Psicopedagogo</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='4' {{ ($paciente->id_tp_profissional == 4) ? 'checked' : '' }}> T.O</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="id_tipo_atendimento">Tipo de Atendimento:</label>
            <select name="id_tipo_atendimento" class="form-control">
                <option value="">Selecione</option>
                <option value="0" {{ ($paciente->id_tipo_atendimento == 0) ? 'selected' : '' }}>Particular</option>
                <option value="1" {{ ($paciente->id_tipo_atendimento == 1) ? 'selected' : '' }}>Convênio</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="nm_indicacao_clinica">Nome do Convênio:</label>
            <select name="id_convenio" class="form-control">
                <option value="">Selecione</option>
                <option value="0" {{ ($paciente->id_tipo_atendimento == 0) ? 'selected' : '' }}>Unimed</option>
                <option value="1" {{ ($paciente->id_tipo_atendimento == 1) ? 'selected' : '' }}>Assim</option>
                <option value="2" {{ ($paciente->id_tipo_atendimento == 2) ? 'selected' : '' }}>Amil</option>
                <option value="3" {{ ($paciente->id_tipo_atendimento == 3) ? 'selected' : '' }}>Bradesco</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="nu_carteira">Número da Carteira:</label>
            <input type="text" class='form-control' id='nu_carteira' name='nu_carteira' value='{{ $paciente->nu_carteira }}' />
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <button type='submit' class="btn btn-success"><span class='glyphicon glyphicon-save'/> Salvar</button>
        </div>
    </div>
{{ Form::close() }}

@stop

@section('js')
    <script>
        $(function(){
            
            $('#dt_nasc_paciente').datepicker({
            	format: 'dd/mm/yyyy',
            	language: 'pt-BR'
            });

           $('#FormPaciente').validator(); 
           $('#nu_telefone').mask("(99)9999-9999");
           $('#nu_celular').mask("(99)99999-9999");
           $('#nu_carteira').mask("99999999999999999999999999999999999999999999999");
        });
    </script>
@stop
