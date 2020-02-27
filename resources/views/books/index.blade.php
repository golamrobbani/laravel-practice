@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">
                    <p>
                        <a href="/books/create">Create New book</a>
                    </p>
                    <table class="table">
                        <tr>
                            <td>@id</td>
                            <td>Book name</td>
                            <td>Book description</td>
                            <td>ISBN</td>
                            <td>Authors</td>
                            <td>Action</td>
                        </tr>

                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->isbn }}</td>

                            <td>

                                @foreach ($book->authors as $author)
                                <li> {{ $author->name }} </li>
                                @endforeach

                            </td>
                            <td>
                                <a href="/books/{{$book->id}}/edit" class="btn btn-danger btn-sm">Edit</a>
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