<label for="">Название</label>
<input type="text" class="form-control" name="title" placeholder="Название" value="{{$book->title or ""}}" required />

<label for="">Описание</label>
<input type="text" class="form-control" name="description" placeholder="Описание" value="{{$book->description or ""}}"  />

<label for="">Цена</label>
<input type="text" class="form-control" name="prise" placeholder="Цена" value="{{$book->prise or ""}}"  />

<label for="">Страницы</label>
<input type="text" class="form-control" name="pages" placeholder="Страницы" value="{{$book->pages or ""}}"  />

<label for="">Год</label>
<input type="text" class="form-control" name="year" placeholder="Год" value="{{$book->year or ""}}"  />

<label for="">Автор</label>
<select class="form-control" multiple name="author[]">
    @foreach ($authors as $author)
        <option value="{{$author->id}}">{{$author->name}}</option>
        @endforeach
</select>

<label for="">Жанр</label>
<select class="form-control" multiple name="janre[]">
    @foreach ($janres as $janre)
        <option value="{{$janre->id}}">{{$janre->name}}</option>
        @endforeach
</select>

<lable for="">Статус</lable>
<select class="form-control" name="status">
    @if (isset($book->id))
        <option value="0" @if ($book->status == 0) selected="" @endif >Черновик</option>
        <option value="1" @if ($book->status == 1) selected="" @endif >Опубликованно</option>
    @else
        <option value="0">Черновик</option>
        <option value="1">Опубликованно</option>
    @endif
</select>


<hr />

<input class="btn btn-primary" type="submit" value="Save" />
