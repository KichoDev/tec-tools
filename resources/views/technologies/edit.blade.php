@extends('layout.app')

@section('title', 'Edit Technology')

@section('content')
<div class="container">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Edit Technology</h1>
    <form action="{{ route('technologies.update', $technology->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <b>ID:</b>{{ $technology->id }}
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ $technology->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ $technology->description }}">
        </div>
        <button type=" submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
        <a href="{{ route('technologies.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
    </form>
</div>
@endsection