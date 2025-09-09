<x-layout>
    <x-slot name="header">
        {{ __('Funcionarios') }}
    </x-slot>

    <x-panel class="">
        <div class="space-y-2">
            <div>
                <x-splade-table :for="$funcionarios">
                    <x-splade-cell actions>
                        <Link class="me-2" href="{{ route('funcionarios.edit', $item) }}"> Editar</Link>
                        <Link method="DELETE" href="{{ route('funcionarios.destroy', $item) }}" confirm>
                            Remover
                        </Link>
                    </x-splade-cell>
                </x-splade-table>
            </div>
            <div>
                <Link href="{{ route('funcionarios.create') }}"
                    class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 mt-6">
                Adicionar Novo Usuário
                </Link>
            </div>
        </div>
    </x-panel>
</x-layout>
