<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\WareHouse AS House;

class Warehouse extends Component
{
    public function render()
    {
        $warehouses = House::all();
        return view('livewire.warehouse', ['warehouses'=> $warehouses]);
    }
}
