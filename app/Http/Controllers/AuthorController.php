<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::with('books')->get();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email'
            ]);

            Author::create([
                'name' => $request->name,
                'email' => $request->email,
                'bio' => $request->bio
            ]);

            return redirect('/authors-ui')->with('success', 'Author added successfully');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        try {

            $author = Author::findOrFail($id);

            $author->update([
                'name' => $request->name,
                'email' => $request->email,
                'bio' => $request->bio
            ]);

            return redirect('/authors-ui')->with('success', 'Author updated');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        Author::destroy($id);

        return redirect('/authors-ui')->with('success', 'Author deleted');
    }

    public function show($id)
    {
        $author = Author::with('books')->findOrFail($id);

        return view('authors.view', compact('author'));
    }
}
