@extends('layouts.app')

@section('title','Home')

@section('content')
<link rel="stylesheet" href="style.css">

<div class=" justify-center min-h-screen bg-white">
    <div class="col-span-12">
      <div class="overflow-auto lg:overflow-visible">
          <div class="text-center flex-auto">


    <table class="table text-gray-400 border-separate space-y-6 text-sm">
    <thead class="bg-green-600 text-white">
      <tr>
        <th class="p-3">ID</th>
        <th class="p-3">Nombre</th>
        <th class="p-3 text-left">Tipo</th>
        <th class="p-3 text-left">Cantidad</th>
        <th class="p-3 text-left">Precio</th>
        <th class="p-3 text-left">Estado</th>
{{--         <th class="p-3 text-left">Created</th>
        <th class="p-3 text-left">Update</th> --}}
        <th class="p-3 text-left">Action</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($habitacion as $row)

    <tr class="bg-green-100 lg:text-black">
        <input type="hidden" class="serdelete_val_id" value="{{$row->id}}">
        <td class="p-3">{{$row->id}}</td>
        <td class="p-3 font-medium capitalize">{{$row->nombre}}</td>
        <td class="p-3">{{$row->tipo}}</td>
        <td class="p-3">{{$row->cantidad}}</td>
        <td class="p-3">{{$row->precio}}</td>
        <td class="p-3">{{$row->estado}}</td>
        {{-- <td class="p-3"> {{$row->created_at}}</td>
        <td class="p-3">{{$row->updated_at}} </td> --}}
        <td class="p-3 flex justify-center">

            <form action="{{ route('habitacion.destroy',$row->id)}}" class="d-inline formulario-eliminar" method="post">
               @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>

            <a href="{{ route('habitacion.edit',$row->id) }}" class="text-black-400 hover:text-gray-100 mx-2">
            <i class="material-icons-outlined text-base">edit</i>
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
