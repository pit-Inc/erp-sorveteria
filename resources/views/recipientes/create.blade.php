<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-form :action="route('recipientes.store')">
        <x-splade-input name="nome" label="Nome" />
        <x-splade-input name="custo" type="number" step="0.01" label="Custo" />
        <x-splade-input name="preco" type="number" step="0.01" label="Preço" />
        <x-splade-submit label="Salvar" />
    </x-splade-form>
</x-layout>
