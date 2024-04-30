<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $segments;

    public function mount($segments)
    {
        $this->segments = $segments;
    }
    public function render()
    {
        return view('livewire.breadcrumb');
    }
}
