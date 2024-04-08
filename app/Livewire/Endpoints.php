<?php

namespace App\Livewire;

use Livewire\Component;

class Endpoints extends Component
{
    public function render()
    {
        $endpoints = \App\Models\Endpoint::all();

        return view('livewire.endpoints', compact('endpoints'));
    }
}
