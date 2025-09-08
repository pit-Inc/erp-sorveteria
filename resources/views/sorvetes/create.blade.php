<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <x-splade-form :action="route('sorvetes.store')">
            <x-splade-input name="nome" label="Nome do Sorvete" />

            <x-splade-select name="recipiente_id" label="Recipiente" :options="$recipientes->pluck('nome','id')" />

            <x-splade-select name="sabores[]" label="Sabores" multiple :options="$sabores->pluck('nome','id')" />

            <x-splade-input name="preco" type="number" step="0.01" label="Preço Final" />

            <x-splade-submit label="Salvar" />
        </x-splade-form>
    </x-panel>


</x-layout>
