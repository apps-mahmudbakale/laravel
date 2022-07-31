<?php

namespace App\Http\Livewire;

use App\Models\Order  as Orders;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $orders = Orders::all();
        return view('livewire.order', ['orders' => $orders]);
    }
}
