<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <x-splade-table :for="$sabores">
            <x-splade-cell actions>
                <Link class="me-2" href="{{ route('sabores.edit', $item) }}">Editar</Link>
                <Link method="DELETE" href="{{ route('sabores.destroy', $item) }}" confirm>
                Remover
                </Link>
            </x-splade-cell>
        </x-splade-table>

        <Link href="{{ route('sabores.create') }}" class="btn">Novo Sabor</Link>
    </x-panel>


</x-layout>
