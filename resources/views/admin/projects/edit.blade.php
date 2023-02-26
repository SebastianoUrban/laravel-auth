@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-2">
            <a href=" {{route('admin.projects.index')}} " class="btn btn-primary">Back</a>
        </div>
        <div class="col-12">
            <h1>Admim Edit</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-4">
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{$project->title}}">
                    </div>
                    <div class="col-4">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" value="{{$project->start_date}}">
                    </div>
                    <div class="col-4">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" value="{{$project->end_date}}">
                    </div>
                    <div class="col-4">
                        <label for="place">Place</label>
                        <input type="text" name="place" id="place" value="{{$project->place}}">
                    </div>
                    <div class="col-12">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value="{{$project->description}}">
                    </div>
                    <div class="col-12">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" value="{{$project->image}}">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit">Invia</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection