<?php

namespace App\Http\Controllers\Book;

use App\Book\Book;
use App\Book\Author;
use App\Book\Janre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller


{
    public function index(){

        //$book = Book::all();
    return view('Book.book',[
        'books' => Book::all()
    ]);
    }

    public function create(){

        //$book = Book::all();
    return view('Book.create',[
        'authors' => Author::all(),
        'janres' =>  Janre::all()
    ]);
    }

    public function store(Request $request){

        $book = Book::create($request->all());
        if ($request->input('author')){
        $book->author()->attach($request->input('author'));
        }
      return redirect()->route('book.book.index');
    }


    public function show(Book $book){
      //
    }

    public function edit(Book $book){
      return view('Book.edit', [
        'book' => $book,
        'authors' => Author::all(),
        'janres' =>  Janre::all()
      ]);
    }

    public function update(Request $request, Book $book){

      $book->author()->detach();
      $book->update($request->all());
      if ($request->input('author')){
      $book->author()->attach($request->input('author'));
      }
      return redirect()->route('book.book.index');
    }

    public function destroy(Book $book){
      $book->delete();
      return redirect()->route('book.book.index');
    }

}
