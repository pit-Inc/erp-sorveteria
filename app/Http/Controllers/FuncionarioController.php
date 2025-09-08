<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('funcionarios.index', [
            'funcionarios' => SpladeTable::for(Funcionario::class)
            ->column('name')
            ->column('email')
            ->column('telefone')
            ->column('cargo')
            ->column('salario')
            ->paginate(15)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'    => 'required|string|max:255',
            'email'   => 'required|email|unique:funcionarios,email',
            'cargo'   => 'required|string|max:100',
            'salario' => 'required|numeric|min:0',
        ]);

        Funcionario::create($request->all());

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionário cadastrado com sucesso!');
    }

    public function edit(Funcionario $funcionario)
    {
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $request->validate([
            'nome'    => 'required|string|max:255',
            'email'   => 'required|email|unique:funcionarios,email,' . $funcionario->id,
            'cargo'   => 'required|string|max:100',
            'salario' => 'required|numeric|min:0',
        ]);

        $funcionario->update($request->all());

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();

        return redirect()->route('funcionarios.index')
            ->with('success', 'Funcionário removido com sucesso!');
    }
}
