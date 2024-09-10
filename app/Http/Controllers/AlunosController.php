<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = [
            [
                
                'nome'           => 'Bruno Gomes',
                'idade'            => '17',
                'sexo'             => 'M',
                'cpf'           => '06676761203',
                'rg' => '6653377712',
                'email'        => 'brunogtrindade598@gmail.com',
                'senha'          => '12345678910'
            ],
            [
                
                'nome'           => 'Roberto Deide Costa',
                'idade'            => '45',
                'sexo'             => 'M',
                'cpf'           => '13400798952',
                'rg' => '9732894521',
                'email'        => 'betaodeidecosta666@gmail.com',
                'senha'          => '4433222566677'
            ]
        ];

        return view('ListaConsumidores', compact('alunos'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}