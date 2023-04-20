<?php

namespace App\Http\Controllers;

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
        $cliente=Clientes::all();
        return Inertia::render('Cadastros',[ 'propriedades'=>['cliente'=>$cliente,'clienteOk'=>true]]);
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
    public function edit(Clientes $clientes)
    {
        echo "Editando cliente";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}
