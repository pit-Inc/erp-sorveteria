<?php

namespace App\Http\Controllers;

use App\Models\Sabor;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class SaborController extends Controller
{
    public function index()
    {
        return view('sabores.index', [
            'sabores' => SpladeTable::for (Sabor::class)
                ->column('nome')
                ->column('descricao')
                ->column('custo')
                ->column('preco')
                ->paginate(15),
        ]);;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sabores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'  => 'required|string|max:255',
            'custo' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
        ]);

        Sabor::create($request->all());

        return redirect()->route('sabores.index')
            ->with('success', 'Sabor cadastrado com sucesso!');
    }

    public function edit(Sabor $sabor)
    {
        return view('sabores.edit', compact('sabor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sabor $sabor)
    {
        $request->validate([
            'nome'  => 'required|string|max:255',
            'custo' => 'required|numeric|min:0',
            'preco' => 'required|numeric|min:0',
        ]);

        $sabor->update($request->all());

        return redirect()->route('sabores.index')
            ->with('success', 'Sabor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sabor $sabor)
    {
        $sabor->delete();

        return redirect()->route('sabores.index')
            ->with('success', 'Sabor removido com sucesso!');
    }
}
