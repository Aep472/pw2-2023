<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return view('genres/index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
   {
    $genres = Genre::all();

    return view('genres.create', compact('genres'));

   }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'desk' => 'required',
       
           
        ]);
    
        Genre::create($validatedData);
    
        return redirect('/genres')->with('success', 'Genre added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        $genres = Genre::all();
        return view('genres.edit',compact('genre','genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'desk' => 'required',
           
        ]); 

        $genre->update($validateData);
        return redirect('/genres')->with('success','Data berhasil di update');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
          $genre->delete();

        return redirect('/genres')->with('success', 'Genre deleted successfully!');
    }
}
