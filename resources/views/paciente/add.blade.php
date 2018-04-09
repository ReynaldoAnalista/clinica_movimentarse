@extends('adminlte::page')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <a href='index' class="btn btn-warning"><span class='glyphicon glyphicon-arrow-left'/> Voltar</a>
        </div>
    </div>
@stop


@section('content')
{{ Form::open(array('url' => 'paciente/add', 'method' => 'post', 'id' => 'FormPaciente')) }}
    <div class="row">
        <div class="col-md-12 form-group">
            <label for="nm_paciente">Nome:</label>
            <input type="text" name="nm_paciente" class='col-md-12 form-control'/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label for="dt_nascimento_paciente">Data de Nascimento:</label>
            <input type="text" id='dt_nasc_paciente' class='form-control' name='dt_nascimento_paciente' />
        </div>
        <div class="col-md-5">
            <label for="nm_pai">Nome do Pai:</label>
            <input type="text" class='form-control' name='nm_pai' />
        </div>
        <div class="col-md-5">
            <label for="nm_mae">Nome da Mãe:</label>
            <input type="text" class='form-control' name='nm_mae'/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nm_responsavel">Responsável:</label>
            <input type="text" class='form-control' name='nm_responsavel' />
        </div>
        <div class="col-md-3">
            <label for="nu_telefone">Número de Telefone:</label>
            <input type="text" id='nu_telefone' class='form-control' name='nu_telefone' />
        </div>
        <div class="col-md-3">
            <label for="nu_celular">Número do Celular:</label>
            <input type="text" id='nu_celular' class='form-control' name='nu_celular' />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nm_indicacao">Indicado Por:</label>
            <input type="text" class='form-control' name='nm_indicacao' />
        </div>
        <div class="col-md-6">
            <label for="nm_indicacao_clinica">Indicação Clínica:</label>
            <input type="text" class='form-control' name='nm_indicacao_clinica' />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="nm_email">Endereço de Email:</label>
            {{ Form::email('nm_email', null , ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="row">
        <h3 class="display-4 col-md-3">Profissional que atende</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" style='height: 52px'>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='0'> Fono</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='1'> Psicólogo</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='2'> Psicomotrista</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='3'> Psicopedagogo</div>
                <div class="col-md-2"><input type="checkbox" name='id_tp_profissional' value='4'> T.O</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="id_tipo_atendimento">Tipo de Atendimento:</label>
            <select name="id_tipo_atendimento" class="form-control">
                <option value="">Selecione</option>
                <option value="0">Particular</option>
                <option value="1">Convênio</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="nm_indicacao_clinica">Nome do Convênio:</label>
            <select name="id_convenio" class="form-control">
                <option value="">Selecione</option>
                <option value="0">Unimed</option>
                <option value="1">Assim</option>
                <option value="2">Amil</option>
                <option value="3">Bradesco</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="nu_carteira">Número da Carteira:</label>
            <input type="text" class='form-control' id='nu_carteira' name='nu_carteira' />
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
           $('#dt_nasc_paciente').datepicker(); 
           $('#FormPaciente').validator(); 
           $('#nu_telefone').mask("(99)9999-9999");
           $('#nu_celular').mask("(99)99999-9999");
           $('#nu_carteira').mask("99999999999999999999999999999999999999999999999");
        });
    </script>
@stop
