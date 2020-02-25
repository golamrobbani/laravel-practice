@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">
                    <form action="/country/{{$country->id}}/edit" method="POST">

                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="">Country Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $country->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Capital Name</label>
                            <input type="text" name="capital" class="form-control" value="{{ $country->capital }}">
                        </div>

                        <div class="form-group">
                            <label for="">Currency Name</label>
                            <input type="text" name="currency" class="form-control" value="{{ $country->currency }}">
                        </div>

                        <div class="form-group">
                            <label for="">Population</label>
                            <input type="text" name="population" class="form-control"
                                value="{{ $country->population }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Updae Country</button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection