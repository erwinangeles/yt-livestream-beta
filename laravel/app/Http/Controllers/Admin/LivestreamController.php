<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Livestream;
use Illuminate\Http\Request;

class LivestreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livestreams = Livestream::all();
        return view('admin.livestreams.index', compact('livestreams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
   return view('admin.livestreams.create');
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
        Livestream::create($request->all());
        return redirect()->route('admin.livestreams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livestream  $livestream
     * @return \Illuminate\Http\Response
     */
    public function show(Livestream $livestream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livestream  $livestream
     * @return \Illuminate\Http\Response
     */
    public function edit(Livestream $livestream)
    {
        //
        return view('admin.livestreams.edit', compact('livestream'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livestream  $livestream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livestream $livestream)
    {
        //
        $livestream->update($request->all());
        return redirect()->route('admin.livestreams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livestream  $livestream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livestream $livestream)
    {
        //
        $livestream->delete();
        return redirect()->route('admin.livestreams.index');
    }
}
