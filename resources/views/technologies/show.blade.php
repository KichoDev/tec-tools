@extends('layout.app')

@section('title', 'View Technology')

@section('content')
<div class="container">
    <h1>Show Technology</h1>
    <div>
        <b>ID:</b>{{ $Technology->id }}
    </div>
    <div>
        <b>Name:</b>{{ $Technology->name }}
    </div>
    <div>
        <b>Description:</b>{{ $Technology->description }}
    </div>
    <a href="{{ route('technologies.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
</div>
@endsection