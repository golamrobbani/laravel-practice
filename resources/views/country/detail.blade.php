@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">
                    <h1> {{ $country->name }} Detail</h1>
                    <h2> {{ $country->capital }} </h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>@Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($country->persons as $person)
                            <tr>
                                <td>{{$person->id}}</td>
                                <td>{{$person->name}}</td>
                                <td>{{$person->email}}</td>
                                <td>{{$person->phone}}</td>
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