<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    </x-panel class="">

    <x-splade-form :default="$funcionario" :action="route('funcionarios.update', $funcionario)" method="PUT">
        <x-splade-input name="nome" label="Nome do Funcionario" />
        <x-splade-textarea name="email" label="E-mail" />
        <x-splade-input name="telefone" label="Telefone"/>
        <x-splade-input name="cargo" label="Cargo" />
        <x-splade-input name="salario" type="number" step="0.01" label="Salário" />

        <x-splade-submit label="Atualizar" />
    </x-splade-form>
</x-layout>
