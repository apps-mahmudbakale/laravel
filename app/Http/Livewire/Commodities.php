<?php

namespace App\Http\Livewire;

use App\Models\Commodity;
use Livewire\Component;

class Commodities extends Base
{
    public $sortBy = 'name'; 
    public function render()
    {
        if ($this->search) {
            $commodities = Commodity::query()
                ->where('name', 'like', '%' . $this->search . '%')
                ->Orwhere('current_price', 'like', '%' . $this->search . '%')
                ->Orwhere('daily_change', 'like', '%' . $this->search . '%')
                ->Orwhere('std_change', 'like', '%' . $this->search . '%')
                ->paginate(10);

            return view(
                'livewire.commodities',
                ['commodities' => $commodities]
            );
        } else {
            $commodities = Commodity::query()
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate($this->perPage);
            return view(
                'livewire.commodities',
                ['commodities' => $commodities]
            );
        }
    }
}
