<?php

namespace App\Book;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'description', 'year', 'prise', 'pages', 'leng', 'status', 'img', 'created_at', 'updated_at'];

    protected $guarded = [];

    public function genre(){
        return $this->belongsToMany('App\Book\Janre');
    }

    public function author(){
        return $this->belongsToMany('App\Book\Author');
    }
}
//$book= Book::all()-which('id',1)->get();
//$autor_name=$book->autor()->name;
