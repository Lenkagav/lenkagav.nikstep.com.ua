<?php

namespace App\Book;

use Illuminate\Database\Eloquent\Model;

class Janre extends Model
{
    protected $fillable = ['name', 'description','created_at', 'updated_at'];
    public function book(){
        return $this->belongsToMany('App\Book\Janre');
    }
}
