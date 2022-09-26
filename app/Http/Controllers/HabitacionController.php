<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionController extends Controller
{

    public function index(Request $request)
    {

        $habitacion = Habitacion::all();

        return view('habitacion.index', compact('habitacion'));
    }

    public function create()
    {
        $habitacion = Habitacion::all();

        return view('habitacion.create', compact('habitacion'));
    }

    public function store(Request $request){

        $habit = Habitacion::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'estado' => $request->estado
        ]);

        return $request;

    }

    public function show($id)
    {
        return view('habitacion.show', compact('id'));
    }

    public function edit($id)
    {
        $habit = Habitacion::findOrFail($id);
        $habitacion = Habitacion::all();

        return view('habitacion.edit', compact('habit'));
    }

    public function update(Request $request, $id)
    {
        $habit = Habitacion::findOrFail($id);

        $habit->update([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'estado' => $request->estado
        ]);

        return $request;
    }

    public function destroy($id)
    {
        $habit = Habitacion::findOrFail($id);

        $habit->delete();

        return redirect ()->route('habitacion.index')->with('eliminar','ok');
       // return $product;
    }
}


