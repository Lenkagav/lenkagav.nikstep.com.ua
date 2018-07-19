@extends('voyager::master')

@section('css')
@stop

@section('page_header')
    <h1>
        Книги
    </h1>
@stop

@section('content')
    <div class="content-wrapper">
        Редактирование Книги

    </div>
    <div class="container">
        <hr />
        <form class="form-horizontal"  action="{{route('book.book.update', $book)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            {{-- Form include --}}
            @include('Book.form')

        </form>
    </div>
@stop

@section('javascript')
    <script>
    </script>
@stop
