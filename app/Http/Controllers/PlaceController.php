<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $places = Place::all();
            return view('home', compact('places'));
        
    
    }

    public function comentar(Place $place)
    {
        
        return view('comentar', compact('place'));
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
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->name=$request->name;
        $comment->email=$request->email;
        $comment->password=$request->password;
        $comment->save();
        return view('comment.save',compact('comment'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        return view('show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        $place->delete();
        return redirect()->route('place.index');
    }
}
