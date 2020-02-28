@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">
                    <p>
                        <a href="/authors/create">Create New author</a>
                    </p>

                    <table class="table">
                        <tr>
                            <td>@id</td>
                            <td>Author name</td>
                            <td>Author Email</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($authors as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td><a href="/authors/{{$author->id}}">{{ $author->name }}</a></td>
                            <td>{{ $author->email }}</td>
                            <td>
                                <a href="/authors/{{$author->id}}/edit" class="btn btn-danger btn-sm">Edit</a>
                                <form action="/authors/{{$author->id}}/delete" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection