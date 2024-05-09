<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px6 lg:px-8">
                @livewire('formulario-historiaclinica-diagnostico')
        </div>
    </div>
</x-app-layout>
