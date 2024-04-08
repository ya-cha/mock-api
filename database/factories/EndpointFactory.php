<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endpoint>
 */
class EndpointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'request_method' => $this->faker->randomElement(['GET', 'POST', 'PUT', 'PATCH', 'DELETE']),
            'request_uri' => $this->faker->url,
            'response_status_code' => $this->faker->numberBetween(100, 599),
            'response_headers' => [
                'Content-Type' => 'application/json',
                'X-Rate-Limit-Limit' => 60,
                'X-Rate-Limit-Remaining' => 59,
                'X-Rate-Limit-Reset' => 1616136000,
            ],
            'response_body' => json_encode([
                'message' => $this->faker->sentence,
            ]),
        ];
    }
}
