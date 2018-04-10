<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        
        // dd($pacientes);
        
        return view('paciente/index', compact('pacientes'));
    }
    
    public function add(){
        return view('paciente/add');
    }
    
    public function edit($id){
        $paciente = Paciente::findOrFail($id);
        return view('paciente/edit', compact('paciente', 'id'));
    }
    
    
    public function create(Request $request) {
        if(Paciente::create($request->all())) {
            flash('Paciente salvo com sucesso.')->success();    
            return redirect()->route('paciente/index');
        } else {
            flash('Erro ao salvar o paciente.')->error();    
            return Redirect::back()->withInput(Input::all());
        }
    }
    
    public function update(Request $request) {
        
         $request->offsetUnset('_token');
         
         dd($request->all());
        
        if(Paciente::where('id', $request->id)->update($request->all())) {
            flash('Paciente salvo com sucesso.')->success();    
            return redirect()->route('paciente/index');
        } else {
            flash('Erro ao salvar o paciente.')->error();    
            return Redirect::back()->withInput(Input::all());
        }

    }
    
    public function view($id) {
        $paciente = Paciente::findOrFail($id);
        return view('paciente/view', compact('paciente', 'id'));
    }
    
    public function delete($id) {
        
        if (Paciente::destroy($id)) {
             flash('Paciente excluído com sucesso.')->success();    
        } else {
            flash('Erro ao excluir o paciente.')->error();
        }
        
        return redirect()->route('paciente/index');
        
    }
    
}
