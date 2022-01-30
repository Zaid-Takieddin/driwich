<?php

namespace App\Http\Controllers\Frontend;

use Inertia\Inertia;
use App\Models\Hamburger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HamburgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Hamburgers/Frontend', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hamburger  $hamburger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hamburger $hamburger)
    {
        //
    }
}
