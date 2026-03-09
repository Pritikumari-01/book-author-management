<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Author;

class BookController extends Controller
{

    public function index()
    {
        try {

            $books = Book::with('author')->get();

            return view('books.index', compact('books'));
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        try {

            $authors = Author::all();

            return view('books.create', compact('authors'));
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {

            $request->validate([
                'title' => 'required',
                'author_id' => 'required',
                'published_year' => 'required|numeric'
            ]);

            Book::create([
                'title' => $request->title,
                'author_id' => $request->author_id,
                'published_year' => $request->published_year
            ]);

            return redirect('/books')->with('success', 'Book added successfully');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        try {

            $book = Book::with('author')->findOrFail($id);

            return view('books.view', compact('book'));
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {

            $book = Book::findOrFail($id);

            $authors = Author::all();

            return view('books.edit', compact('book', 'authors'));
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {

            $book = Book::findOrFail($id);

            $book->update([
                'title' => $request->title,
                'author_id' => $request->author_id,
                'published_year' => $request->published_year
            ]);

            return redirect('/books')->with('success', 'Book updated successfully');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {

            Book::destroy($id);

            return redirect('/books')->with('success', 'Book deleted successfully');
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
}
