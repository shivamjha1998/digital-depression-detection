@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Welcome to the Depression Checker</h1>
    <p class="lead text-center">This questionnaire helps gauge your mental state based on the PHQ-9 criteria.</p>
    <div class="text-center mt-4">
        <a href="{{ route('questionnaire.show') }}" class="btn btn-primary">Start the Test</a>
    </div>
</div>
@endsection
