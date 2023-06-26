<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'value' => 'required|numeric',
        ]);

        Book::create($validatedData);

        return redirect('/');
    }

    public function destroy($id)
    {
        Book::where('id', $id)->delete();

        return redirect('/');
    }

}