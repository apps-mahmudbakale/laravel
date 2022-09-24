<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserSecurities extends Component
{
    public $securities;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct($securities)
    {
        $this->securities = $securities;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-securities');
    }
}
