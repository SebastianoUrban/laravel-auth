@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-2">
            <a href=" {{route('admin.index')}} " class="btn btn-primary">Back</a>
        </div>
        <div class="col-12">
            <h1>Admim Show</h1>
        </div>
        <div class="col-12">
            <h2>{{$project->title}}</h2>
        </div>
        <div class="col-4 d-flex align-items-baseline">
            <h5>Start Date:</h5>
            <p class="ms-2">{{$project->start_date}}</p>
        </div>
        <div class="col-4 d-flex align-items-baseline">
            <h5>End Date:</h5>
            <p class="ms-2">{{$project->end_date}}</p>
        </div>
        <div class="col-4 d-flex align-items-baseline">
            <h5>Place:</h5>
            <p class="ms-2">{{$project->place}}</p>
        </div>
        <div class="col-12">
            <h5>Description:</h5>
            <p class="ms-2">{{$project->description}}</p>
        </div>
    </div>
</div>
@endsection