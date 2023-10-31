@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Your Dashboard</h2>
    <!-- Use Chart.js or another library to plot scores over time -->
    <canvas id="scoreChart"></canvas>
    <div class="text-center mt-4">
        <a href="{{ route('questionnaire.show') }}" class="btn btn-primary">Take the Test Again</a>
    </div>
</div>

<script>
// Example using Chart.js to plot data
const ctx = document.getElementById('scoreChart').getContext('2d');
const chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: @json($dates),  // An array of dates
        datasets: [{
            label: 'PHQ-9 Score',
            data: @json($scores),  // An array of scores
            borderColor: 'blue',
            fill: false
        }]
    }
});
</script>
@endsection
