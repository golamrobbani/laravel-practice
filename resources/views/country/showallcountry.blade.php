@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">

                    <p>
                        <a href="/country/create">Create New Country</a>
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@Id</th>
                                <th>Name</th>
                                <th>Capital</th>
                                <th>Currency</th>
                                <th>Population</th>
                                <th>Created On</th>
                                <th>Updated On</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($countries as $country)
                            <tr>
                                <td>{{ $country->id }}</td>
                                <td>
                                    <a href="/country/{{$country->id}}"> {{ $country->name }} </a>
                                </td>
                                <td>{{ $country->capital }} </td>
                                <td>{{ $country->currency }} </td>
                                <td>{{ $country->population }} </td>
                                <td>{{ $country->created_at->diffForHumans() }} </td>
                                <td>{{ $country->updated_at->format('Y - m - d')  }} </td>
                                <td>
                                    <a href="/country/{{$country->id}}/edit" class="btn btn-success btn-sm">Edit</a> |

                                    <form action="/country/{{$country->id}}/delete" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
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