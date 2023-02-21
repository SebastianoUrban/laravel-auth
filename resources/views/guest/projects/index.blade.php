@extends('layouts.guest')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Guest Home</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($projects as $project)
            <div class="card mb-3">
                <div class="row">
                    <div class="col-12 text-center py-3">
                        <h3>{{$project->title}}</h3>
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
        @endforeach
    </div>
</div>
@endsection