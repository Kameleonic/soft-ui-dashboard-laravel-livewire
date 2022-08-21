<?php

namespace App\Http\Livewire\LaravelExamples;

use Livewire\Component;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Request;

class VehicleManagement extends Component
{
    public function render()
    {

        $vehicles = Vehicle::all();
        return view('livewire.laravel-examples.vehicle-management', compact('vehicles'));
    }
}
