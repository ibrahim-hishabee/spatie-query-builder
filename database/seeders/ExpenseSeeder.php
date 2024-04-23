<?php

namespace Database\Seeders;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Database\Seeder;
use Database\Factories\ExpenseCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Expense::factory(200)
            // ->for(ExpenseCategory::fatory())
            ->create();
    }
}
