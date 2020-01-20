<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Facade\FlareClient\Http\Client;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients= Cliente::all();
        return view('clientes', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $regras=[
            'nome'=> 'required|min:5|max:10|unique:clientes', 
            'idade'=>'required',
            'endereco'=>'required| min:5',
            'email'=>'required| email'
                                               
        ];
        $mensagens=[
            'required'=>'O campo :attribute é obrigatorio', // para todos casos required.
            'email.email'=> 'formato de email não aceito pelo sistema'

        ];

        $request->validate($regras, $mensagens);

        /*
        $request->validate([
            'nome'=> 'required|min:5|max:10|unique:clientes', //faz a variavel do formulario ser obrigatoria e ter no minimo 5 caracteries
            'idade'=>'required',
            'endereco'=>'required| min:5',
            'email'=>'required| email'
                                                //e no maximo 10 caracteries; verificando a tabela clientes o nome é unico
        ]);*/


        $cliente= new Cliente();
        $cliente->nome= $request->input('nome');
        $cliente->idade= $request->input('idade');
        $cliente->endereco= $request->input('endereco');
        $cliente->email= $request->input('email');
        $cliente->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
