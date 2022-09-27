@extends('layouts.app')

@section('title','Edit')

@section('content')

<form action="{{ route('habitacion.update',$habit->id) }}" id="form" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
@csrf
@method('put')
<h2 class="text-2x1 text-center py-4 mb-4 font-semibold">
    Editar habitación {{$habit->numero_habitacion}}
</h2>

<div>
<label>Nombre</label>
<input class="my-2 w-full f-black-800 p-2 text-lg rounded placeholder bg-gray-300"
placeholder="Nombre" name="nombre" id="nombre" value="{{$habit->nombre}}">
</div>

<div>
    <label>Tipo</label>
    <input class="my-2 w-full f-gray-800 p-2 text-lg rounded placeholder bg-gray-300"
    placeholder="Tipo" name="tipo" id="tipo" value="{{$habit->tipo}}">
</div>

<div>
    <label>N° Habitación</label>
   <input class="my-2 w-full f-gray-800 p-2 text-lg rounded placeholder bg-gray-300"
   placeholder="Número de habitación" name="numero_habitacion" id="numero_habitacion" value="{{$habit->numero_habitacion}}">
</div>

<div>
    <label>Piso</label>
    <input class="my-2 w-full f-gray-800 p-2 text-lg rounded placeholder bg-gray-300"
    placeholder="Piso" name="piso" id="piso" value="{{$habit->piso}}">
</div>

<div>
    <label>Cantidad</label>
    <input class="my-2 w-full f-gray-800 p-2 text-lg rounded placeholder bg-gray-300"
    placeholder="Cantidad" name="cantidad" id="cantidad" value="{{$habit->cantidad}}">
</div>

<div>
    <label>Precio</label>
    <input class="my-2 w-full f-gray-800 p-2 text-lg rounded placeholder bg-gray-300"
    placeholder="Precio" name="precio" id="precio" value="{{$habit->precio}}">
</div>

<div>
    <label>Estado</label>
    <select class="my-2 w-full f-gray-800 p-2 text-lg rounded placeholder bg-gray-300"
placeholder="Estado" name="estado" id="estado" value="{{$habit->estado}}">

       @php
           if($habit->estado=='Disponible'){
           echo('<option value="Disponible" selected>Disponible</option>
           <option value="ocupada">Ocupada</option>
           <option value="limpieza">Limpieza</option>
           ');
           }elseif ($habit->estado=='ocupada') {
            echo('<option value="ocupada" selected>Ocupada</option>
            <option value="Disponible">Disponible</option>
            <option value="limpieza">Limpieza</option>');
           }
       @endphp

    </select>

</div>

<button type="button" id="enviarr" class="my-3 w-full bg-blue-600 p-2 font-semibold
rounded text-white hover:bg-blue-400">Actualizar</button>


</form>

<script>
    $(document).ready(function() {

            $("#enviarr").click(function () {
                var form = $("#form").serialize();
        $.ajax({
                url: '{{ route('habitacion.update', $habit->id) }}',
                data: form,
                type: 'PUT',
                dataType: 'json',
                success:function(json) {
                    swal.fire(" ¡Habitación actualizada! ", " Habitación Actualizada correctamente ", "success").then(() => {
                            window.location.href = "{{ route('habitacion.index') }}"
                        });

                },
                error:function(json, xhr, status) {
                    swal.fire(" ¡Habitación no actualizada! ",
                        "Complete toda la informacion y valide los datos", "error");
                },
            });
     });

    });

</script>
@endsection
