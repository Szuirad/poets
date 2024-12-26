<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use Illuminate\Http\Request;


class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poems = Poem::query()
       ->orderBy('author', 'asc')
       ->paginate();
       //dd($notes); 
       return view('poem.index', ['poems' => $poems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'author' => ['string'],
            'title' => ['string'],
            'text' => ['string'],
            'resources' => ['string']
        ]);

        $poem = Poem::create($data);
        

        return to_route('poem.show', $poem)->with('message', 'Poem was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Poem $poem)
    {
        return view('poem.show', ['poem' => $poem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poem $poem)
    {
        return view('poem.edit', ['poem' => $poem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poem $poem)
    {
        $data = $request->validate([
            'author' => ['string'],
            'title' => ['string'],
            'text' => ['string'],
            'resources' => ['string']

        ]);

        $poem = Poem::create($data);
        

        return to_route('poem.show', $poem)->with('message', 'Poem was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poem $poem)
    {
        $poem->delete();

        return to_route('poem.index')->with('message', 'Poem was deleted');
    }
}
