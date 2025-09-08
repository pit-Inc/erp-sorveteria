<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-table :for="$sorvetes">
        <x-splade-cell recipiente>
            {{ $item->recipiente->nome }}
        </x-splade-cell>

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
</x-layout>
