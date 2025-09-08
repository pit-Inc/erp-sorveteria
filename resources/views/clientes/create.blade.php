<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <x-splade-form :action="route('clientes.store')">
            <x-splade-input name="nome" label="Nome" />
            <x-splade-input name="email" label="E-mail" />
            <x-splade-input name="telefone" label="Telefone"  class="mb-2" />
            <x-splade-submit label="Salvar" />
        </x-splade-form>
    </x-panel>


</x-layout>
