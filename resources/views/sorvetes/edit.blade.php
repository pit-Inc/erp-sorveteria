<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-form :default="$sorvete" :action="route('sorvetes.update', $sorvete)" method="PUT">
        <x-splade-input name="nome" label="Nome do Sorvete" />
        <x-splade-select name="recipiente_id" label="Recipiente" :options="$recipientes->pluck('nome','id')" />
        <x-splade-select name="sabores[]" label="Sabores" multiple :options="$sabores->pluck('nome','id')" :default="$sorvete->sabores->pluck('id')" />
        <x-splade-input name="preco" type="number" step="0.01" label="Preço Final" />
        <x-splade-submit label="Atualizar" />
    </x-splade-form>
</x-layout>
