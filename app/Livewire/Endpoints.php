<?php

namespace App\Livewire;

use Livewire\Attributes\On;
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

    public function delete($id)
    {
        \App\Models\Endpoint::find($id)->delete();
    }

    #[On('update-endpoint')]
    public function update($id, $response_status_code, $response_headers, $response_body)
    {
        $endpoint = \App\Models\Endpoint::find($id);
        $endpoint->update([
            'response_status_code' => $response_status_code,
            'response_headers' => $response_headers,
            'response_body' => $response_body,
        ]);
    }
}
