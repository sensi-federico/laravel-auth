@extends('layouts.admin')

@section('content')

<div class="table-responsive pt-4">
    <div class="d-flex justify-content-end">
        <a href="{{route('admin.projects.create')}}" class="btn btn-primary mb-3" role="button">Add Project</a>
    </div>
    <table class="table table-striped
      table-hover	
      table-borderless
      table-primary
      align-middle">
        <thead class="table-light">

            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Overview</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->overview}}</td>
                <td>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </td>
            </tr>
            @empty
            <tr class="table-primary">
                <td>No projects found!</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>


@endsection