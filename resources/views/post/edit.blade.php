@extends('layout')
@section('content')

<style>
.uper{
    margin-top: 100px;
}
</style>

<div class="card uper">
  <div class="card-header">
    Edit Post Buku
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('post.update', $book->id) }}">
          <div class="form-group">
              {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
              <label for="name">Judul</label>
              <input type="text" class="form-control" name="judul" value="{{$book->judul}}"/>
          </div>
          <div class="form-group">
              <label for="price">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" value="{{$book->penerbit}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Tahun Terbit</label>
              <input type="number" class="form-control" name="tahun_terbit" value="{{$book->tahun_terbit}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Pengarang</label>
              <input type="text" class="form-control" name="pengarang" value="{{$book->pengarang}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection