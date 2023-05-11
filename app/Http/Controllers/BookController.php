<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller

{
    public function book(){
        $book = Books::all();
        return view('dashboard.book.index', ['book' => $book]);
    }

    public function destroy($item)
    {
        Books::where('id',$item)->delete();
        return redirect('/book');
    }

    public function form(){
        return view ('dashboard.book.add');
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

        Books::create([
            'title'=> $request->title,
            'writer'=> $request->writer,
            'publisher'=> $request->publisher,
            'synopsis'=> $request->synopsis,
            'image'=> $image,
        ]);
       
        return redirect(route('book'));
    }

    public function edit(){
        return view('dashboard.book.edit');
    }

    public function update(Request $request)
    {
        $book->update($request->all());
        return redirect('book');
    }
}