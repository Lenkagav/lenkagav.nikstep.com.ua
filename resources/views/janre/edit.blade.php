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
        Редактирование Жанра

    </div>
    <div class="container">
        <hr />
        <form class="form-horizontal"  action="{{route('book.janre.update', $janre)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            {{-- Form include --}}
            @include('janre.form')

        </form>
    </div>
@stop

@section('javascript')
    <script>
    </script>
@stop
