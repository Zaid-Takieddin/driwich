<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Pizza;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Pizzas/Index', [
            'pizzas' => Pizza::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Pizzas/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pizza::Create([
            'name' => Request::input('pizzaName'),
            'ingredients' => Request::input('pizzaIngredients'),
            'price' => Request::input('pizzaPrice')
        ]);

        return Redirect::route('admin.pizzas.index')->with('flash.banner', 'Pizza Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        return Inertia::render('Pizzas/Edit', [
            'pizza' => $pizza
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        $pizza->update([
            'name' => Request::input('pizzaName'),
            'ingredients' => Request::input('pizzaIngredients'),
            'price' => Request::input('pizzaPrice')
        ]);

        return Redirect::route('admin.pizzas.index')->with('flash.banner', 'Pizza Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();

        return Redirect::route('admin.pizzas.index')->with('flash.banner', 'Pizza Deleted Successfully!');
    }
}
