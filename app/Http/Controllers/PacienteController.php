<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


use App\Paciente;

use Carbon\Carbon;


class PacienteController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        return view('paciente/index', compact('pacientes'));
    }
    
    public function add(){
        return view('paciente/add');
    }
    
    public function edit($id){
        $paciente = Paciente::findOrFail($id);
        return view('paciente/edit', compact('paciente', 'id'));
    }
    
    
    public function store(Request $request) {
        
        $dt_array = explode('/',$request->dt_nascimento_paciente);
        
        $dt_formatada = date("Y-m-d", strtotime($dt_array[2] . '-' . $dt_array[1] . '-' . $dt_array[0]));
        
        $request->merge(array('dt_nascimento_paciente' => $dt_formatada));
        
        if(isset($request->id)){
            Paciente::where('id', $request->id)->update($request->except('_token'));
        } else {
            Paciente::create($request->except('_token','id'));
        }
        
        // return view('paciente/index')->with('message', 'Paciente salvo com sucesso!');
        return redirect()->route('paciente/index')->with('message', 'Paciente salvo com sucesso!');

    }
    
    public function view($id) {
        $paciente = Paciente::findOrFail($id);
        return view('paciente/view', compact('paciente', 'id'));
    }
    
}
