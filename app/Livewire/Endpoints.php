<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Endpoints extends Component
{
    use WithPagination;

    public function render()
    {
        $endpoints = \App\Models\Endpoint::latest()->paginate(5);

        return view('livewire.endpoints', compact('endpoints'));
    }
}
