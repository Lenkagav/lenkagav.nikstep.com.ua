@extends('voyager::master')

@section('css')
@stop

@section('page_header')
    <h1>
        Книги
    </h1>
@stop

@section('content')
    <div class="container">
        <a href="{{route('book.book.create')}}" class="btn btn-primary pull-right"><i class="fa-plus-square"></i> Create book</a><br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Название</th>
              <th scope="col">Описание</th>
              <th scope="col">Цена</th>
              <th scope="col">Страницы</th>
              <th scope="col">Год</th>
              <th scope="col">Статус</th>

            </tr>
          </thead>
          <tbody>
                  @foreach ($books as $book)
            <tr>
              <th scope="row">{{$book->id}}</th>
              <td>{{$book->title}}</td>
              <td>{{$book->description}}</td>
              <td>{{$book->prise}}</td>
              <td>{{$book->pages}}</td>
              <td>{{$book->year}}</td>
              <td>{{$book->status}}</td>

              <td class="text-right">
                  <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('book.book.destroy', $book)}}" method="post">
                      <input type="hidden" name="_method" value="DELETE" />
                        {{csrf_field()}}
                        <a class="btn btn-default" href="{{route('book.book.show', $book)}}"><i class="fa-plus-eye"></i>Show</a>
                        <a class="btn btn-default" href="{{route('book.book.edit', $book)}}"><i class="fa-plus-edit"></i>Edit</a>
                        <button type="submit" class="btn"><i class="fa-plus-trast"></i>delete</button>
                  </form>
              </td>

            </tr>

        @endforeach
  </tbody>
</table>

    </div>
@stop

@section('javascript')
    <script>
    </script>
@stop
