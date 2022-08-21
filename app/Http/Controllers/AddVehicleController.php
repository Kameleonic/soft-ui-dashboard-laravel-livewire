<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class AddVehicleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $vehicle = new Vehicle;
        $vehicle->manufacturer = $request->manufacturer;
        $vehicle->model_name = $request->model_name;
        $vehicle->version = $request->version;
        $vehicle->powertrain = $request->powertrain;
        $vehicle->transmission = $request->transmission;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->model_year = $request->model_year;

        return view('livewire.laravel-examples.vehicle-management', compact('vehicle'));
    }
}
