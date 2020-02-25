@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">
                    <p>
                        <a href="/persons/create">Create New Person</a>
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($persons as $person)
                            <tr>
                                <td>{{$person->id}}</td>
                                <td>{{$person->name}}</td>
                                <td>{{$person->email}}</td>
                                <td>{{$person->phone}}</td>
                                <td>{{ $person->country->name }}</td>
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