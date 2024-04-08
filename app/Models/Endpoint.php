<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'response_headers' => 'collection',
        ];
    }
}
