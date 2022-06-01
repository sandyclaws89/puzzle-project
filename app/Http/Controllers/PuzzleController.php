<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puzzle;

class PuzzleController extends Controller
{
    // protected $validationRules = [
    //     'title'         =>  'min:5|max:250',
    //     'pieces'        =>  'numeric',
    //     'description'   =>  'min:5|max:500|',
    //     'price'         =>  'numeric',
    //     'available'     =>  'boolean',
    //     'quantity'      =>  'numeric',
    // ];

    public function index()
    {
       $puzzles = Puzzle::paginate(15);
       return view('puzzles.index', compact('puzzles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('puzzles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate($this->validationRules);
        $formData = $request->all();

        $puzzle = new Puzzle();
        $puzzle->fill($formData);
        $puzzle->save();
        // $newPuzzle = Puzzle::create($request->only('title', 'pieces', 'description', 'available', 'quantity', 'price'));
        return redirect()->route('puzzles.show', $puzzle->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function show(Puzzle $puzzle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function edit(Puzzle $puzzle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puzzle $puzzle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puzzle $puzzle)
    {
        //
    }
}
