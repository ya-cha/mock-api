<?php

namespace App\Livewire;

use App\Models\Endpoint;
use Illuminate\Support\Collection;
use Livewire\Attributes\Locked;
use LivewireUI\Modal\ModalComponent;

class EditEndpoint extends ModalComponent
{
    #[Locked]
    public Endpoint $endpoint;

    public int $response_status_code;

    public Collection $response_headers;

    public string $response_body;

    public function mount(Endpoint $endpoint)
    {
        $this->response_status_code = $endpoint->response_status_code;
        $this->response_headers = $endpoint->response_headers->map(fn($value, $key) => [
            'key' => $key,
            'value' => $value,
        ])->values();
        $this->response_body = $endpoint->response_body;
    }

    public function render()
    {
        return view('livewire.edit-endpoint');
    }

    public function addHeader()
    {
        $this->response_headers->push([
            'key' => '',
            'value' => '',
        ]);
    }

    public function removeHeader(int $index)
    {
        $this->response_headers->forget($index);
    }

    public function update()
    {
        $this->dispatch(
            'update-endpoint',
            $this->endpoint->id,
            $this->response_status_code,
            $this->response_headers->mapWithKeys(fn(array $item) => [$item['key'] => $item['value']]),
            $this->response_body
        );

        $this->closeModal();
    }
}
