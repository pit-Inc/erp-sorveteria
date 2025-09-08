<?php

namespace App\Http\Controllers;

use App\Models\Recipiente;
use Illuminate\Http\Request;

class RecipienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipientes.index', [
            'recipientes' => Recipiente::all(),
        ]);
    }

    public function create()
    {
        return view('recipientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'  => 'required|string|max:255',
            'custo' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
        ]);

        Recipiente::create($request->all());

        return redirect()->route('recipientes.index')
            ->with('success', 'Recipiente cadastrado com sucesso!');
    }

    public function edit(Recipiente $recipiente)
    {
        return view('recipientes.edit', compact('recipiente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipiente $recipiente)
    {
        $request->validate([
            'nome'  => 'required|string|max:255',
            'custo' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
        ]);

        $recipiente->update($request->all());

        return redirect()->route('recipientes.index')
            ->with('success', 'Recipiente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipiente $recipiente)
    {
        $recipiente->delete();

        return redirect()->route('recipientes.index')
            ->with('success', 'Recipiente removido com sucesso!');
    }
}
