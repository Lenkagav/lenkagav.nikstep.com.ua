<label for="">Название</label>
<input type="text" class="form-control" name="name" placeholder="Имя автора" value="{{$janre->name or ""}}" required />

<label for="">Описание</label>
<input type="text" class="form-control" name="description" placeholder="Об авторе" value="{{""}}"  />

<hr />

<input class="btn btn-primary" type="submit" value="Save" />
