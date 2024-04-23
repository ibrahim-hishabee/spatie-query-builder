<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Http\Requests\StoreExpenseCategoryRequest;
use App\Http\Requests\UpdateExpenseCategoryRequest;

class ExpenseCategoryController extends Controller
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

            ->
        */



        $expenseCategories = QueryBuilder::for(ExpenseCategory::class)
            ->allowedFilters([
                'name', 'is_active',
                AllowedFilter::scope('starts_before')
            ])
            ->allowedSorts(['id', 'name', 'created_at'])
            ->allowedFields(['id', 'name', 'is_active', 'created_at'])
            ->paginate()
            ->appends(request()->query());

        return response()->json([
            'data' => $expenseCategories
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
    public function store(StoreExpenseCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseCategoryRequest $request, ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseCategory $expenseCategory)
    {
        //
    }
}
