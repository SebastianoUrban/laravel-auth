@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-2">
            <a href=" {{route('admin.index')}} " class="btn btn-primary">Back</a>
        </div>
        <div class="col-12">
            <h1>Admim Create</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="row g-4">
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="">
                    </div>
                    <div class="col-4">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" value="">
                    </div>
                    <div class="col-4">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" value="">
                    </div>
                    <div class="col-4">
                        <label for="place">Place</label>
                        <input type="text" name="place" id="place" value="">
                    </div>
                    <div class="col-12">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value="">
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit">Crea</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection