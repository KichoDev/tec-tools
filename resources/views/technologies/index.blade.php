@extends('layout.app')

@section('title', 'Technologies list')

@section('content')
<div class="container">
    <h1 class="mt-4">Technologies list</h1>
    @if(session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
    @endif
    <div class="text-end">
        <a href="{{ route('technologies.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">DESCRIPTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
            <tr>
                <th scope="row">{{ $technology->id }}</th>
                <td>{{ $technology->name }}</td>
                <td>{{ $technology->description }}</td>
                <td class="text-end">
                    <a href="{{ route('technologies.show', $technology->id) }}" class="btn btn-primary"><i class="bi bi-eye"></i>View</a>
                    <a href="{{ route('technologies.edit', $technology->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a>
                    <form action="{{ route('technologies.destroy', $technology->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection