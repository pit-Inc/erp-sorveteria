<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="">
        <x-splade-table :for="$sorvetes">
            <x-splade-cell sabores>
                {{ $item->sabores->pluck('nome')->join(', ') }}
            </x-splade-cell>

            <x-splade-cell actions>
                <Link href="{{ route('sorvetes.edit', $item) }}">Editar</Link>
                <Link method="DELETE" href="{{ route('sorvetes.destroy', $item) }}" confirm>
                    Remover
                </Link>
            </x-splade-cell>
        </x-splade-table>

        <Link href="{{ route('sorvetes.create') }}" class="btn">Novo Sorvete</Link>
    </x-panel>
</x-layout>
