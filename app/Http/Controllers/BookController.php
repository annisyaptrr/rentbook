<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function book(){
        $book = Book::all();
        return view('dashboard.book', compact('book'));
    }

    public function form(){
        return view ('dashboard.form');
    }

    public function add (Request $request){
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'synopsis' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        Book::create([
            'title'=> $request->title,
            'writer'=> $request->writer,
            'publisher'=> $request->publisher,
            'synopsis'=> $request->synopsis,
            'image'=> $image,
        ]);
       
        return redirect(route('book'));
    }
}
