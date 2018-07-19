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
        Создание Книги

    </div>
    <div class="container">
        <hr />
        <form class="form-horizontal"  action="{{route('book.book.store')}}" method="post">
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
