<?php

namespace App\Http\Controllers\Book;

use App\Book\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller

{
    public function index(){

    return view('author.author',[
        'authors' => Author::all()
    ]);
    }

    public function create(){

    return view('author.create');
    }

    public function store(Request $request){

        $author = Author::create($request->all());
        return redirect()->route('book.author.index');
    }

    public function show(Author $author){
      //
    }

    public function edit(Author $author){
      return view('author.edit', [
        'author' => $author,
      ]);
    }

    public function update(Request $request, Author $author){


      $author->update($request->all());

      return redirect()->route('book.author.index');
    }

    public function destroy(Author $author){
      $author->delete();
      return redirect()->route('book.author.index');
    }
}
