@extends('layouts.admin')

@section('content')
@include('partials.errors')
<h1 class="mt-4">Create a new Project!</h1>
<form action="{{route('admin.projects.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Add title" aria-describedby="titleHelper">
    </div>
    <div class="my-3">
        <label for="description" class="form-label">Overview</label>
        <textarea class="form-control" name="overview" id="overview" rows="3" placeholder="Add Overview"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
</form>
@endsection