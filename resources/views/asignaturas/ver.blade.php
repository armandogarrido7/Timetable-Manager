<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aplicación Web de Gestión de Horarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="background-color:{{{ $asignatura->colorAs }}};color:white">
                    <h1>{{ $asignatura->nombreAs}} ({{ $asignatura->nombreCortoAs}})</h1>
                    <p>Impartida por {{ $asignatura->profesorAs }}</p>
                </div>
            </div>
    </div>
</x-app-layout>




