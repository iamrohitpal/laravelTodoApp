<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::get();
        return view('index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $todo = Todo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return to_route('index')->with('success', 'Todo add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $todo = Todo::where('id', $request->id)->first();
        return view('details', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $todo = Todo::where('id', $request->id)->first();
        return view('edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $todo = Todo::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return to_route('index')->with('success', 'Todo update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $todo = Todo::where('id', $request->id)->first()->delete();
        return to_route('index')->with('success', 'Todo deleted successfully');
    }
}
