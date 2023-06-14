<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = Review::all();

        return view('reviews.create', compact('reviews'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'film' => 'required',
            'user_id' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required',
        ]);
    
        Review::create($validatedData);
    
        return redirect('/reviews')->with('success', 'Review added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $genres = Review::all();
        return view('reviews.edit',compact('review','reviews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validateData = $request->validate([
            'film' => 'required',
            'user_id' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required|date',
            
        ]); 

        $review->update($validateData);
        return redirect('/review')->with('success','Data berhasil di update');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        
        $review->delete();

        return redirect('/reviews')->with('success', 'Review deleted successfully!');
    
    }
}
