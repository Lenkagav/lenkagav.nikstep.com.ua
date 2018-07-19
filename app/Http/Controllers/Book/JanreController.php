<?php

namespace App\Http\Controllers\Book;

use App\Book\Janre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JanreController extends Controller
{
    public function index(){

        //$book = Book::all();
    return view('janre.janre',[
        'janres' => Janre::all()
    ]);
    }
    public function create(){

        //$book = Book::all();
    return view('janre.create');
    }

    public function store(Request $request){

      $janre = Janre::create($request->all());
      return redirect()->route('book.janre.index');
    }

    public function show(Janre $janre){
      //
    }

    public function edit(Janre $janre){
      return view('janre.edit', [
        'janre' => $janre,
      ]);
    }

    public function update(Request $request, Janre $janre){


      $janre->update($request->all());

      return redirect()->route('book.janre.index');
    }

    public function destroy(Janre $janre){
      $janre->delete();
      return redirect()->route('book.janre.index');
    }
}
