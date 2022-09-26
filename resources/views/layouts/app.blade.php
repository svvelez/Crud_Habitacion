<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Products App</title>

    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 text-gray-800">
<nav class="h-16 flex justify-end py-4 px-16">

    <a href="{{route('habitacion.index')}}" class="border border-green-600
  rounded px-4 pt-1 h-10 bg-white text-green-600 font-semibold mx-2">Habitaciones</a>

    <a href="{{route('habitacion.create')}}" class="text-white  rounded px-4 pt-1 h-10
  bg-green-600  font-semibold mx-2 hover:bg-green-700">Create</a>


</nav>

<main class="p-16 flex justify-center">
    @yield('content')
</main>


</body>
</html>
