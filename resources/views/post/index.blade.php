@extends('layout')
@section('content')
<style>
    .upper{
        margin-top: 100px;
    }
</style>
<div class="upper">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    @if(count($books) == 0)
        <h1>No data yet please Enter Data</h1>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Judul</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td>Pengarang</td>

                <td colspan="2">Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td><a href="{{route('post.show', $book->id)}}">{{$book->judul}}</a></td>
                <td>{{$book->penerbit}}</td>
                <td>{{$book->tahun_terbit}}</td>
                <td>{{$book->pengarang}}</td>

                <td><a href="{{route('post.show', $book->id)}}" class="btn btn-primary">View</a></td>
                <td><a href="{{route('post.edit', $book->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('post.destroy', $book->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <a href="{{route('post.create')}}">
    <button class="btn btn-success">Add Book</button>
    </a>
</div>
@endsection