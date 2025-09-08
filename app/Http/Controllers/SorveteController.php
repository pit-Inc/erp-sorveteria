<?php

namespace App\Http\Controllers;

use App\Models\Recipiente;
use App\Models\Sabor;
use App\Models\Sorvete;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class SorveteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sorvetes.index', [
            'sorvetes' => SpladeTable::for(Sorvete::with(['recipiente', 'sabores']))
                ->withGlobalSearch(columns: ['nome'])
                ->column('id', label: 'ID')
                ->column('nome', label: 'Nome')
                ->column('preco', label: 'Preço')
                ->column('recipiente.nome', label: 'Recipiente')
                ->column('sabores', label: 'Sabores')
                ->column('actions', exportAs: false)
                ->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sorvetes.create', [
            'recipientes' => Recipiente::all(),
            'sabores'     => Sabor::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'          => 'required|string|max:255',
            'recipiente_id' => 'required|exists:recipientes,id',
            'preco'         => 'required|numeric|min:0',
            'sabores'       => 'array',
        ]);

        $sorvete = Sorvete::create($request->only(['nome', 'recipiente_id', 'preco']));
        if($request->sabores){
            $sorvete->sabores()->sync($request->sabores);
        }

        return redirect()->route('sorvetes.index')
            ->with('success', 'Sorvete cadastrado com sucesso!');
    }

    public function edit(Sorvete $sorvete)
    {
        return view('sorvetes.edit', [
            'sorvete'     => $sorvete->load('sabores'),
            'recipientes' => Recipiente::all(),
            'sabores'     => Sabor::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sorvete $sorvete)
    {
        $request->validate([
            'nome'          => 'required|string|max:255',
            'recipiente_id' => 'required|exists:recipientes,id',
            'preco'         => 'required|numeric|min:0',
            'sabores'       => 'required|array',
        ]);

        $sorvete->update($request->only(['nome', 'recipiente_id', 'preco']));
        $sorvete->sabores()->sync($request->sabores);

        return redirect()->route('sorvetes.index')
            ->with('success', 'Sorvete atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sorvete $sorvete)
    {
        $sorvete->delete();

        return redirect()->route('sorvetes.index')
            ->with('success', 'Sorvete removido com sucesso!');
    }
}
