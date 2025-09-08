<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-form :action="route('funcionarios.store')">
        <x-splade-input name="nome" label="Nome" />
        <x-splade-input name="email" type="email" label="E-mail" />
        <x-splade-input name="telefone" label="Telefone" />
        <x-splade-input name="cargo" label="Cargo" />
        <x-splade-input name="salario" type="number" step="0.01" label="Salário" />
        <x-splade-submit label="Salvar" />
    </x-splade-form>
</x-layout>
