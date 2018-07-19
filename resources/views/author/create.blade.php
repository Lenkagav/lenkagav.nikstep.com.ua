@extends('voyager::master')

@section('css')
@stop

@section('page_header')
    <h1>
        Автора
    </h1>
@stop

@section('content')
    <div class="content-wrapper">
        Создание Автора

    </div>
    <div class="container">
        <hr />
        <form class="form-horizontal"  action="{{route('book.author.store')}}" method="post">
            {{ csrf_field() }}
            {{-- Form include --}}
            @include('author.form')

        </form>
    </div>
@stop

@section('javascript')
    <script>
    </script>
@stop
