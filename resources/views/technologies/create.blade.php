@extends('layout.app')

@section('title', 'Create Technology')

@section('content')
<div class="container">
    <form action="{{ route('technologies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="description">
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>Submit</button>
        <a href="{{ route('technologies.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Back</a>
    </form>
</div>
@endsection