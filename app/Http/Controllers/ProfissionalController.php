<?php

namespace App\Http\Controllers;

use App\Profissional;
use App\TipoProfissional;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $profissionais = Profissional::all();
        
        return view('profissional.index', compact('profissionais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
        
        $especialidades = TipoProfissional::all();
        
        return view('profissional/create', compact('especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Profissional::create($request->all())) {
            flash('Profissional salvo com sucesso.')->success();
            return redirect()->route('profissional.index');
        } else {
            flash('Erro ao salvar o profissional.')->error();    
            return Redirect::back()->withInput(Input::all());
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function show(Profissional $profissional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function edit(Profissional $profissional)
    {
        $profissional = Profissional::findOrFail($profissional->id);
        
        $especialidades = TipoProfissional::all();
        
        return view('profissional.edit', compact('profissional', 'especialidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profissional $profissional)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');
        
        if(Profissional::where('id', $profissional->id)->update($request->all())) {
            flash('Profissional atualizado com sucesso.')->success();    
            return redirect()->route('profissional.index');
        } else {
            flash('Erro ao salvar o profissional.')->error();    
            return Redirect::back()->withInput(Input::all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profissional  $profissional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profissional $profissional)
    {
        if (Profissional::destroy($profissional->id)) {
             flash('Profissional excluído com sucesso.')->success();    
        } else {
            flash('Erro ao excluir o Profissional.')->error();
        }
        
        return redirect()->route('profissional.index');
    }
}
