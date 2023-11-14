<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class Carcontroller extends Controller
{
    public function getAllCar()
    {
        $car = Car::all();
        return response()->json($car);
    }

    public function getCarById($id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json(['message' => 'No se ha encontrado el carro'], 404);
        }
        return response()->json($car);
    }
}
