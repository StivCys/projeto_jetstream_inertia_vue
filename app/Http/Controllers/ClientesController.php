<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Route;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use stdClass;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $fillable=[
        'cliente_razao_social',
        'cliente_nome_fantasia',
        'cliente_cnpj',
        'cliente_cpf',
        'cliente_inscricao_estatadual',
        'cliente_flag_simples_nacional',
        'cliente_flag_pessoa_juridica',
        'cliente_flag_pre_cadastro',
    ];

    public function index(Request $request)
    {
        $clientes=Clientes::all();
        // return Inertia::render('Cadastros',['propriedades'=>['clientes'=>$clientes,'clienteOk'=>true]]);
        return Inertia::render('appAdmin/clientes/Clientes',['propriedades'=>['title'=>"Listar Clientes",'clientes'=>$clientes,'clienteOk'=>true]]);
        // return Inertia::render('clientes/clientes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $cliente, Request $request)
    {   
        
        // echo "Editando cliente".$cliente->id;
        $clienteF=Clientes::find($cliente->id);
        // dd($cliente);
        if($clienteF==$cliente){
            // echo "Editando cliente".$cliente->id;
            // dd($cliente);
        }

        $token = $request->session()->token();
        $token = csrf_token();
        
        return Inertia::render('appAdmin/clientes/EditCliente',[ 'propriedades'=>['title'=>'Editar Cliente','cliente'=>$clienteF,'clienteOk'=>true,'editClienteOk'=>true,'csrf'=>$token]]);
        // return Inertia::render('Cadastros',[ 'propriedades'=>['cliente'=>$clienteF,'clienteOk'=>true,'editClienteOk'=>true,'csrf'=>$token]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
        dd($request);
        $cliente=Clientes::find($clientes->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
