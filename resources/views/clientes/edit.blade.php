<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">

        <x-splade-form :default="$cliente" :action="route('clientes.update', $cliente)" method="PUT">
            <x-splade-input name="nome" label="Nome" />
            <x-splade-input name="email" type="email" label="E-mail" />
            <x-splade-input name="telefone" label="Telefone" class="mb-2" />

            <x-splade-submit label="Atualizar Cliente" />
        </x-splade-form>
    </x-panel>


</x-layout>
