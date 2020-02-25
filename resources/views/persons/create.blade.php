@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">

                    <form action="/persons/create" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="">Person Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Country Id</label>
                            <select name="country" id="country" class="form-control">
                                <option value="">Select Your country</option>
                                @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Person</button>

                    </form>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection