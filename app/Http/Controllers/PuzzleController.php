<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puzzle;
use Illuminate\Validation\Rule;

class PuzzleController extends Controller
{
    // protected $validationRules = [
    //     'title'         =>  'min:5|max:250',
    //     'pieces'        =>  'min:100|max:5000|numeric',
    //     'image'         =>  'nullable|min:5|max:500',
    //     'description'   =>  'min:5|max:500|',
    //     'brand'         =>  'nullable|min:5|max:250',
    //     'price'         =>  'numeric|min:5|max:500',
    //     'available'     =>  'boolean',
    //     'quantity'      =>  'numeric|min:5|max:500',
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
        $newPuzzle = Puzzle::create($formData);
        return redirect()->route('puzzles.show', $puzzle->id)->with('status', 'Complited with succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function show(Puzzle $puzzle)
    {
        return view('puzzles.show', ['pageTitle' => $puzzle->title, 'puzzle' => $puzzle ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function edit(Puzzle $puzzle)
    {
        return view('puzzles.edit', compact('puzzle'));
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
        // $request->validate($this->validationRules);

        $formData = $request->all();
        $puzzle->update($formData);
        return redirect()->route('puzzles.show', $puzzle->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Puzzle  $puzzle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puzzle $puzzle)
    {
        $previousURL = url()->previous();
        if ($previousURL === route('puzzles.edit', $puzzle->id)) {
                 $previousURL = route('puzzles.index');
           }
           $puzzle->delete();
           return redirect()->route('puzzles.index');
   }
}

