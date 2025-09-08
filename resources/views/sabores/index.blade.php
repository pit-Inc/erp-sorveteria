<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-table :for="$sabores">
        <x-splade-cell actions>
            <Link href="{{ route('sabores.edit', $item) }}">Editar</Link>
            <Link method="DELETE" href="{{ route('sabores.destroy', $item) }}" confirm>
            Remover
            </Link>
        </x-splade-cell>
    </x-splade-table>

    <Link href="{{ route('sabores.create') }}" class="btn">Novo Sabor</Link>
</x-layout>
