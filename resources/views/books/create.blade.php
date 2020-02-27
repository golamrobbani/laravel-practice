@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">

                    <form action="/books/create" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Book Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="description">Book Description</label>
                            <textarea name="description" class="form-control" id="description" cols="10"
                                rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="isbn">ISBN Number</label>
                            <input type="text" name="isbn" class="form-control" id="isbn">
                        </div>

                        <div class="form-group">
                            <label for="isbn">Book Authors</label>
                            <select name="authors[]" id="authors" class="form-control" multiple>

                                @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach

                            </select>

                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection