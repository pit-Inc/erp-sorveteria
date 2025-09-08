<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-form :default="$sabor" :action="route('sabores.update', $sabor)" method="PUT">
        <x-splade-input name="nome" label="Nome do Sabor" />
        <x-splade-textarea name="descricao" label="Descrição" />
        <x-splade-input name="custo" type="number" step="0.01" label="Custo" />
        <x-splade-input name="preco" type="number" step="0.01" label="Preço" />
        <x-splade-submit label="Atualizar" />
    </x-splade-form>
</x-layout>
