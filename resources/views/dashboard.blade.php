<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil de :name', ['name' => Auth::user()->name]) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 style="font-weight: bold">
                    {{ __('¡Has iniciado sesion correctamente!') }}
                </h2>
                <h3 style="font-weight: bold"><hr><hr>
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Pulsa aqui para editar tu perfil') }}
                    </x-dropdown-link><hr>
                    <x-dropdown-link :href="route('reservations.index')">
                        {{ __('Pulsa aqui para ver tus reservas') }}
                    </x-dropdown-link>
                </h3>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 style="font-weight: bold">

                </h3>
            </div>

        </div>
    </div>
    </div>
</x-app-layout>
