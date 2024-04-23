<?php

namespace Database\Factories;

use App\Models\ExpenseCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expense_category_id' => fn() => ExpenseCategory::factory()->create()->id,
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'date' => $this->faker->dateTimeBetween('-2 years'),
            'created_at' => $this->faker->dateTimeBetween('-2 years')
        ];
    }
}
