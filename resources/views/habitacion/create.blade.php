@extends('layouts.app')

@section('title','Create')

@section('content')
    <form action="{{route('habitacion.store')}}" id="formulario_enviar" method="POST"
          class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg" style="width: 50%">
        <h1 class="text-xl mb-2">Registrar Habitación</h1>
        @csrf


        <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
               placeholder="Nombre" name="nombre" id="nombre">

        @error('nombre')
        <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-red-500 p-2 my-2"> {{$message}} </p>
        @enderror

        <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
               placeholder="Tipo" name="tipo" id="tipo">


        @error('tipo')
        <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-red-500 p-2 my-2">* {{$message}}</p>
        @enderror

        <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
        placeholder="Numero de habitación" name="numero_habitacion" id="numero_habitacion">


       @error('numero_habitacion')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
       text-red-500 p-2 my-2">* {{$message}}</p>
      @enderror

      <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
      placeholder="Piso" name="piso" id="piso">


      @error('piso')
     <p class="border border-red-500 rounded-md bg-red-100 w-full
     text-red-500 p-2 my-2">* {{$message}}</p>
     @enderror




        <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
        placeholder="Precio" name="precio" id="precio">


       @error('precio')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-500 p-2 my-2">* {{$message}}</p>
       @enderror



        <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
               placeholder="Cantidad" name="cantidad" id="cantidad" type="number">


        @error('cantidad')
        <p class="border border-red-500 rounded-md bg-red-100 w-full
text-red-500 p-2 my-2">* {{$message}}</p>
        @enderror


       {{--  <div class="mb-3">
            <label for="archivo" class="form-label">Archivo*</label> --}}
{{--             <input class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300" name="archivo" type="file" id="archivo">
 --}}       {{--  </div> --}}

     {{--    @error('archivo')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-500 p-2 my-2">
            * {{$message}}</p>
        @enderror
 --}}
        <select class="my-2 w-full f-gray-200 p-2 text-lg rounded placeholder bg-gray-300"
        placeholder="Estado" name="estado" id="estado">
        <option selected>Estado</option>
        <option value="Disponible">Disponible</option>
        <option value="ocupada">Ocupada</option>
        <option value="limpieza">Limpieza</option>

        </select>




 @error('estado')
 <p class="border border-red-500 rounded-md bg-red-100 w-full
 text-red-500 p-2 my-2">* {{$message}}</p>
 @enderror

        <button type="button" id="enviar" class="my-3 w-full bg-sky-400 p-2 font-semibold
rounded text-white hover:bg-sky-600">Registrar</button>


    </form>


    <script>
        $(document).ready(function () {

            $("#enviar").click(function () {
            var formulario= $("#formulario_enviar").serialize();

                $.ajax({
                    url: '{{ route('habitacion.store') }}',
                    data: formulario,
                    type: 'POST',
                    dataType: 'json',
                    success: function (json) {
                        swal.fire(" ¡Habitación registrada! ", " Habitación registrada correctamente ", "success").then(() => {
                            window.location.href = "{{ route('habitacion.index') }}"
                        });
                    },
                    error: function (json, xhr,status) {
                        swal.fire(" ¡Habitación no registrada! ",
                            "Complete toda la informacion y valide los datos", "error");
                    },
                });
            });

        });

    </script>


@endsection
