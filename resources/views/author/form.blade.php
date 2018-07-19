<label for="">Имя автора</label>
<input type="text" class="form-control" name="name" placeholder="Имя автора" value="{{$author->name or ""}}" required />

<label for="">Об авторе</label>
<input type="text" class="form-control" name="description" placeholder="Об авторе" value="{{""}}"  />

<hr />

<input class="btn btn-primary" type="submit" value="Save" />
