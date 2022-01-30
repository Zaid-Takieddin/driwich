<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Hamburger;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class HamburgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Hamburgers/Index', [
            'hamburgers' => Hamburger::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Hamburgers/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hamburger::Create([
            'name' => Request::input('hamburgerName'),
            'ingredients' => Request::input('hamburgerIngredients'),
            'price' => Request::input('hamburgerPrice')
        ]);

        return Redirect::route('admin.hamburgers.index')->with('flash.banner', 'Hamburger Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hamburger  $hamburger
     * @return \Illuminate\Http\Response
     */
    public function show(Hamburger $hamburger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hamburger  $hamburger
     * @return \Illuminate\Http\Response
     */
    public function edit(Hamburger $hamburger)
    {
        return Inertia::render('Hamburgers/Edit', [
            'hamburger' => $hamburger
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hamburger  $hamburger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hamburger $hamburger)
    {
        $hamburger->update([
            'name' => Request::input('hamburgerName'),
            'ingredients' => Request::input('hamburgerIngredients'),
            'price' => Request::input('hamburgerPrice')
        ]);

        return Redirect::route('admin.hamburgers.index')->with('flash.banner', 'Hamburger Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hamburger  $hamburger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hamburger $hamburger)
    {
        $hamburger->delete();

        return Redirect::route('admin.hamburgers.index')->with('flash.banner', 'Hamburger Deleted Successfully!');
    }
}
