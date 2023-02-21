@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admim Home</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Place</th>
                        <th scope="col">Description</th>
                        <th scope="col">
                            CRUD
                            <a href=" {{route('admin.create')}} " class="btn btn-info ms-3">Create</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->title}}</td>
                            <td>{{$project->start_date}}</td>
                            <td>{{$project->end_date}}</td>
                            <td>{{$project->place}}</td>
                            <td>{{$project->description}}</td>
                            <td>
                                <a href=" {{route('admin.show', $project->id)}} " class="btn btn-primary">Show</a>
                                <a href=" {{route('admin.edit', $project->id)}} " class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.destroy', $project->id)}}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Cancella" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection