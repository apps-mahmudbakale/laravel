<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserBanks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $banks;

    public function __construct($banks)
    {
        $this->banks = $banks;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-banks');
    }
}
