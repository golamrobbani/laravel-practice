@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">

                    <form action="/books/{{$book->id}}/edit" method="POST">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="name">Book Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$book->name}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Book Description</label>
                            <textarea name="description" class="form-control" id="description" cols="10"
                                rows="5"> {{$book->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="isbn">ISBN Number</label>
                            <input type="text" name="isbn" class="form-control" id="isbn" value="{{$book->isbn}}">
                        </div>

                        <div class="form-group">
                            <label for="isbn">Book Authors</label>

                            @foreach ($book->authors as $author)
                            <li> {{ $author->name }} </li>
                            @endforeach

                            <select name="authors[]" id="authors" class="form-control" multiple>

                                @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach

                            </select>

                        </div>

                        <button type="submit" class="btn btn-success">Update Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection