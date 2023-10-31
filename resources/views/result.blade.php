@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Your Results</h2>
    <p class="lead text-center">Your score is: {{ $score }}</p>
    <p class="lead text-center">{{ $interpretation }}</p>
    <div class="text-center mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">View Dashboard</a>
    </div>
</div>
@endsection
