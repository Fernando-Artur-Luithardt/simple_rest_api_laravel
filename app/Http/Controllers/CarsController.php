<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function get($id = false){
        if($id)
            return response()->json(Cars::find($id));

        return response()->json(Cars::all());
    }

    public function update(Request $request, Cars $car)
    {
        $request->validate([
            'dono' => 'required|string',
            'modelo' => 'required|string',
            'condicao' => 'required|string',
            'ano' => 'required|int',
        ]);

        $car->dono = $request->dono;
        $car->modelo = $request->modelo;
        $car->condicao = $request->condicao;
        $car->ano = $request->ano;

        return response()->json($car->save());
    }

    public function create(Request $request) {
        $request->validate([
            'dono' => 'required|string',
            'modelo' => 'required|string',
            'condicao' => 'required|string',
            'ano' => 'required|int',
        ]);

        $car = new Cars;
        $car->dono = $request->dono;
        $car->modelo = $request->modelo;
        $car->condicao = $request->condicao;
        $car->ano = $request->ano;

        $car->save();
        return response()->json($car);
    }

    public function delete(Cars $car)
    {
        return $car->delete();
    }

}
