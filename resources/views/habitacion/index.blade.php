@extends('layouts.app')

@section('title','Home')

@section('content')
<link rel="stylesheet" href="style.css">

<div class="overflow-auto rounded-lg shadow">
    <div class="col-span-12">
      <div class="overflow-auto lg:overflow-visible">
          <div class="text-center flex-auto">


    <table class="w-full">
    <thead class="bg-blue-400 border-b-2 border-blue-200 text-white">
      <tr>
   {{--      <th class="p-3">ID</th> --}}
        <th class="p-3   tracking-wide text-center">Nombre</th>
        <th class="p-3  tracking-wide text-center">Tipo</th>
        <th class="p-3 tracking-wide text-center">Cantidad</th>
        <th class="p-3  tracking-wide text-center">Precio</th>
        <th class="p-3  tracking-wide text-center">Estado</th>
        <th class="p-3 tracking-wide text-center">Action</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($habitacion as $row)

    <tr class="bg-blue-100 lg:text-black">
        <input type="hidden" class="serdelete_val_id" value="{{$row->id}}">
  {{--       <td class="p-3">{{$row->id}}</td> --}}
        <td class="p-3 font-medium capitalize">{{$row->nombre}}</td>
        <td class="p-3">{{$row->tipo}}</td>
        <td class="p-3">{{$row->cantidad}}</td>
        <td class="p-3">{{$row->precio}}</td>
        <td class="p-3">{{$row->estado}}</td>
        <td class="p-3 flex justify-center">

            <form action="{{ route('habitacion.destroy',$row->id)}}" class="d-inline formulario-eliminar" method="post">
               @method('DELETE')
                @csrf
                <button type="submit" class="text-red-600 hover:text-red-400 mx-2"><i class="fas fa-solid fa-trash"></i></button>
            </form>

            <a href="{{ route('habitacion.edit',$row->id) }}" class="text-blue-700 hover:text-blue-400 mx-2">
            <i class="fas fa-pencil"></i>
          </a>

        </td>
    </tr>

      @endforeach

    </tbody>
  </table>
</div>
 </div>
  </div>
   </div>

@if(session('eliminar')=='ok')
    <script>
        Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
        )
    </script>
@endif

<script>

    $('.formulario-eliminar').submit(function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                /*Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )*/

                this.submit();
            }
        })
    });


</script>


<script>






</script>

@endsection
