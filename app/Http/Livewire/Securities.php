<?php

namespace App\Http\Livewire;

use App\Models\Security;
use Livewire\Component;

class Securities extends Component
{
    public function render()
    {
        $securities = Security::all();
        return view('livewire.securities', ['securities' => $securities]);
    }
}
