<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
            ->filtering
            /expense-category?filter[name]=challan&filter[starts_before]=2023-01-01

            -> sorting
            /expense-category?sort=name|-created_at   // name asc and created_at desc

            ->fields
            /expense-category?fields[expense_categories]=id,name,created_at,is_active
            /expense-category?fields=id,name,created_at,is_active

            ->relationships
            /expense-category?include=expenseCategory
        */

        $expenses = QueryBuilder::for(Expense::class)
            ->allowedFilters([
                'expense_category_id', 'date',
                AllowedFilter::scope('starts_before')
            ])
            ->allowedSorts(['id', 'expense_category_id', 'date', 'created_at'])
            ->allowedFields(['id', 'expense_category_id', 'date', 'created_at', 'expenseCategory.id', 'expenseCategory.name'])
            ->allowedIncludes(['expenseCategory'])
            ->paginate()
            ->appends(request()->query());

        return response()->json([
            'data' => $expenses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
