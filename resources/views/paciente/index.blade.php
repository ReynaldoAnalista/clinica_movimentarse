@extends('adminlte::page')

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <a type='button' href='add' class="btn btn-primary"><span class='glyphicon glyphicon-plus'/> Cadastrar</a>
        </div>
    </div>
@stop

@section('content')


<div class="row">
    <div class="col-md-12">
        <table class='table table-bordered table-hover'>
            <thead>
                <tr class='text-center'>
                    <th class='text-center'>Nome</th>
                    <th class='text-center'>Data de Nascimento</th>
                    <th class='text-center'>Tipo de Atendimento</th>
                    <th class='text-center'>Número de Telefone</th>
                    <th class='text-center'>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                <tr class='text-center'>
                    
                    <td>{{ $paciente->nm_paciente }}</td>
                    <td>{{ $paciente->dt_nascimento_paciente }}</td>
                    <td>{{ $paciente->tipo_atendimento->ds_tipo_atendimento }}</td>
                    <td>{{ $paciente->nu_telefone }}</td>
                    <td>
                        <a href='edit/{{ $paciente->id }}' title='Editar' class='btn btn-sm btn-warning'>
                            <span class='glyphicon glyphicon-edit' />
                        </a>
                        <a href='view/{{ $paciente->id }}' title='Visualizar' class='btn btn-sm btn-primary'>
                            <span class='glyphicon glyphicon-tasks' />
                        </a>
                        <a href='delete/{{ $paciente->id }}'  title='Remover' class='btn btn-sm btn-danger'>
                            <span class='glyphicon glyphicon-remove' />
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('js')
    <script>
        $(function(){
            
            // $('.dt_nascimento').each(function(){
            //   $(this).text(moment($(this).text()).format('D/M/Y'))  
            // });
          
        });
    </script>
@stop