<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <x-splade-form :default="$recipiente" :action="route('recipientes.update', $recipiente)" method="PUT">
            <x-splade-input name="nome" label="Nome" />
            <x-splade-input name="custo" type="number" step="0.01" label="Custo" />
            <x-splade-submit label="Atualizar" />
        </x-splade-form>
    </x-panel>


</x-layout>
