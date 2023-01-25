<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aplicación Web de Gestión de Horarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1>Añadir asignatura al Horario</h1>
                <form action="/horario/editar" method ="POST">
                @csrf
                    <label>
                        Dia
                        <select name="diaH" required>
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miercoles</option>
                            <option value="4">Jueves</option>
                            <option value="5">Viernes</option>
                        </select>
                    </label> 
                    <br>
                    <label>
                        Hora
                        <select name="horaH" required>
                            <option value="1">8:15</option>
                            <option value="2">9:15</option>
                            <option value="3">10:15</option>
                            <option value="4">11:45</option>
                            <option value="5">12:45</option>
                            <option value="6">13:45</option>
                        </select>
                    </label> 
                    <br>
                    <label>
                        Asignatura
                        <select name="codAs" required>
                            @foreach ($asignaturas as $asignatura)
                            <option value={{{$asignatura->codAs}}}>{{$asignatura->nombreAs}}</option>
                            @endforeach
                        </select>
                    </label>
                    <br>
                    <button class="btn btn-success"><input type="submit" value="Añadir"></button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>