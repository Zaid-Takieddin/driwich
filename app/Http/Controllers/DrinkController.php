<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Drink;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Drinks/Index', [
            'drinks' => Drink::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Drinks/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Drink::Create([
            'name' => Request::input('drinkName'),
            'price' => Request::input('drinkPrice')
        ]);

        return Redirect::route('admin.drinks.index')->with('flash.banner', 'Drink Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        return Inertia::render('Drinks/Edit', [
            'drink' => $drink
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Drink $drink)
    {
        $drink->update([
            'name' => Request::input('drinkName'),
            'price' => Request::input('drinkPrice')
        ]);

        return Redirect::route('admin.drinks.index')->with('flash.banner', 'Drink Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        $drink->delete();

        return Redirect::route('admin.drinks.index')->with('flash.banner', 'Drink Deleted Successfully!');
    }
}
