@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>
                <div class="card-body">
                    <form action="/authors/create" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Author Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Author Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection