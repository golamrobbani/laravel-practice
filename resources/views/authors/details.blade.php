@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">
                    <h1> {{ $author->name }}  book list</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>@Id</th>
                                <th>Name</th>
                                <th>isbn</th>
                                <th>Description</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($author->books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->isbn}}</td>
                                <td>{{$book->description}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection