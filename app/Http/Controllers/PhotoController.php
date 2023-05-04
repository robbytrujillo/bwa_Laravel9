<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        //
        // Query builder
        DB::table('users')->get();
        DB::table('users')->where('email', 'hallo@gmail.com')->first();

        // Elequent
        User::all();
        User::where('email', 'hallo@gmail.com')->first();

        return view('welcome');
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
    

    public function store(StorePhotoRequest $request)
    {
        //
        return $request -> all();
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2848',
        // ]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
