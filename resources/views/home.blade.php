@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h1 class="text-center mb-4 mt-5">Welcome to the Depression Checker</h1>
                    <p class="lead text-center">This questionnaire helps gauge your mental state based on the PHQ-9 criteria.</p>
                    <div class="text-center mt-4">
                        <a href="{{ route('questionnaire.show') }}" class="btn btn-primary">Start the Test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
