<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <x-splade-table :for="$recipientes">
            <x-splade-cell actions>
                <Link class="me-2" href="{{ route('recipientes.edit', $item) }}">Editar</Link>
                <Link method="DELETE" href="{{ route('recipientes.destroy', $item) }}" confirm>
                Remover
                </Link>
            </x-splade-cell>
        </x-splade-table>

        <Link href="{{ route('recipientes.create') }}" class="btn">Novo Recipiente</Link>
    </x-panel>


</x-layout>
