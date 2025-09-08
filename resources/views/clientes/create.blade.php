<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-form :action="route('clientes.store')">
        <x-splade-input name="nome" label="Nome" />
        <x-splade-input name="email" label="E-mail" />
        <x-splade-input name="telefone" label="Telefone" />
        <x-splade-submit label="Salvar" />
    </x-splade-form>
</x-layout>
