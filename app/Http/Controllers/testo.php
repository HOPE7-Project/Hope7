<?php

namespace App\Http\Controllers;

use App\Models\testom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonialss = DB::table('testimonials')->skip(10)->take(5)->get();


        return view('Home.index', [
            'testimonials' => $testimonialss
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
     * @param  \App\Models\testo  $testo
     * @return \Illuminate\Http\Response
     */
    public function show(testo $testo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testo  $testo
     * @return \Illuminate\Http\Response
     */
    public function edit(testo $testo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testo  $testo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testo $testo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testo  $testo
     * @return \Illuminate\Http\Response
     */
    public function destroy(testo $testo)
    {
        //
    }
}
