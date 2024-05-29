<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Endpoints::class);

Route::any('/{any}', function () {
    $endpoint = \App\Models\Endpoint::where('request_uri', request()->getRequestUri())
        ->where('request_method', request()->getMethod())
        ->firstOrCreate([
            'request_method' => request()->getMethod(),
            'request_uri' => request()->getRequestUri(),
        ], [
            'response_status_code' => 501,
            'response_headers' => [],
            'response_body' => 'Not Implemented. Please define this endpoint.',
        ]);

    return response($endpoint->response_body, $endpoint->response_status_code, $endpoint->response_headers->toArray());
})->where('any', '.*');

