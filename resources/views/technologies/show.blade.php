@extends('layout.app')

@section('title', 'View Technology')

@section('content')
<div class="container">
    <h1>Show Technology</h1>
    <div class="mb-3">
        <b>ID:</b>{{ $technology->id }}
    </div>
    <div class="mb-3">
        <b>Name:</b>{{ $technology->name }}
    </div>
    <div class="mb-3">
        <b>Description:</b>{{ $technology->description }}
    </div>
    <a href="{{ route('technologies.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
</div>
@endsection