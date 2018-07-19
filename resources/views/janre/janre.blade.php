@extends('voyager::master')

@section('css')
@stop

@section('page_header')
    <h1>
        Жанры
    </h1>
@stop

@section('content')
    <div class="container">
        <a href="{{route('book.janre.create')}}" class="btn btn-primary pull-right"><i class="fa-plus-square"></i> Create janre</a><br />
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Название</th>
                  <th scope="col">Описание</th>
                </tr>
            </thead>
            <tbody>
                  @foreach ($janres as $janre)
                    <tr>
                      <th scope="row">{{$janre->id}}</th>
                      <td>{{$janre->name}}</td>
                      <td>{{$janre->description}}</td>

                      <td class="text-right">
                          <form onsubmit="if(confirm('Delete?')) {return true} else {return false}" action="{{route('book.janre.destroy', $janre)}}" method="post">
                              <input type="hidden" name="_method" value="DELETE" />
                                {{csrf_field()}}
                                <a class="btn btn-default" href="{{route('book.janre.show', $janre)}}"><i class="fa-plus-eye"></i>Show</a>
                                <a class="btn btn-default" href="{{route('book.janre.edit', $janre)}}"><i class="fa-plus-edit"></i>Edit</a>
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
