@extends('voyager::master')

@section('css')
@stop

@section('page_header')
    <h1>
        Автора
    </h1>
@stop

@section('content')
<div class="container">
    <a href="{{route('book.author.create')}}" class="btn btn-primary pull-right"><i class="fa-plus-square"></i> Create author</a><br />
    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Имя автора</th>
              <th scope="col">Об авторе</th>
            </tr>
        </thead>
        <tbody>
              @foreach ($authors as $author)
                <tr>
                  <th scope="row">{{$author->id}}</th>
                  <td>{{$author->name}}</td>
                  <td>{{$author->description}}</td>

                <td class="text-right">
                    <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('book.author.destroy', $author)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE" />
                          {{csrf_field()}}
                          <a class="btn btn-default" href="{{route('book.author.show', $author)}}"><i class="fa-plus-eye"></i>Show</a>
                          <a class="btn btn-default" href="{{route('book.author.edit', $author)}}"><i class="fa-plus-edit"></i>Edit</a>
                          <button type="submit" class="btn"><i class="fa-plus-trast"></i>delete</button>
                    </form>
                </td>
            @endforeach
              </tr>
        </tbody>
    </table>
    </div>
@stop

@section('javascript')
    <script>
    </script>
@stop
