<x-layout>
    <x-slot name="header">
        {{ __('Home') }}
    </x-slot>

    <x-panel class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />


    </x-panel>

    <x-splade-table :for="$recipientes">
        <x-splade-cell actions>
            <Link href="{{ route('recipientes.edit', $item) }}">Editar</Link>
            <Link method="DELETE" href="{{ route('recipientes.destroy', $item) }}" confirm>
            Remover
            </Link>
        </x-splade-cell>
    </x-splade-table>

    <Link href="{{ route('recipientes.create') }}" class="btn">Novo Recipiente</Link>
</x-layout>
