<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aplicación Web de Gestión de Horarios') }}
        </h2>
        <style>
        </style>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="h3">Horario de {{ Auth::user()->name }} </h1>
                    <table class="table table-striped table-bordered text-center" title="Haz click en la hora para borrarla">
                        <thead>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </thead>                    
                    <?php $index=0;?>
                    @for($i = 1; $i < 7; $i++)
                        @for($j = 1; $j < 6; $j++)
                            @if(isset($horas[$index]))
                                    @if ($horas[$index]->diaH == $j && $horas[$index]->horaH == $i)
                                    <?php $hora = $horas[$index]?>
                                        <td <?php echo(isset($horas[$index])?'style="background-color:'.($horas[$index]->colorAs).'"':"")?>>
                                            <a href="/horario/eliminar/{{$horas[$index]->diaH}}/{{$horas[$index]->horaH}}/{{$horas[$index]->codAs}}">{{$horas[$index]->nombreCortoAs}}</a>
                                        <?php $index++ ?>
                                    @else
                                    <td>
                                    ---
                                    @endif
                            @else
                            <td>
                                ---
                            @endif
                            </td>
                        @endfor
                        </tr>
                    @endfor
                </table>
                <a href="/horario/editar"><button class="btn btn-primary">Añadir Asignatura</button>
                </div>
            </div>
    </div>
</x-app-layout>






