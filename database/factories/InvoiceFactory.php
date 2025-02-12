<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoice;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Invoice::class;

    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'invoice_number' => 'INV-' . fake()->unique()->randomNumber(5),
            'amount' => fake()->randomFloat(2, 50, 5000),
            'status' => fake()->randomElement(['draft', 'outstanding', 'paid']),
            'due_date' => fake()->dateTimeInInterval('+1 week', '+1 month')
        ];
    }
}
