<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books', compact('books'));
    }
    public function ManageBook() {
        $books = Book::all();
        return view('books/index', compact('books'));
    }
    public function add() {
        return view('books/add');
    }
    public function store(request $request) {
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'writer' => 'required|string|min:5|max:20',
            'number_of_pages' => 'required|integer|min:1',
            'year_published' => 'required|integer|min:2000|max:2021'
        ]);

        Book::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'number_of_pages' => $request->number_of_pages,
            'year_published' => $request->year_published
        ]);
        return redirect('/books/manage')->with('success', 'Book Added Successfully');
    }
    public function edit($id) {
        $book = Book::find($id);
        return view('books/edit', compact('book'));
    }
    public function update(request $request, $id) {
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'writer' => 'required|string|min:5|max:20',
            'number_of_pages' => 'required|integer|min:1',
            'year_published' => 'required|integer|min:2000|max:2021'
        ]);

        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'number_of_pages' => $request->number_of_pages,
            'year_published' => $request->year_published
        ]);
        return redirect('/books/manage')->with('success', 'Book Updated Successfully');
    }
    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books/manage')->with('success', 'Book Deleted Successfully');
    }
}
