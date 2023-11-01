@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">PHQ-9 Depression Questionnaire</h2>

    <form action="{{ route('questionnaire.store', ['step' => $step]) }}" method="post">
        @csrf

        @if($step == 1)
            <!-- Question 1 -->
            <div class="mb-3">
                <label for="question1" class="form-label">1. Little interest or pleasure in doing things?</label>
                @include('partials.radio-options', ['name' => 'question1'])
            </div>
        @elseif($step == 2)
            <!-- Question 2 -->
            <div class="mb-3">
                <label for="question2" class="form-label">2. Feeling down, depressed, or hopeless?</label>
                @include('partials.radio-options', ['name' => 'question2'])
            </div>
        @elseif($step == 3)
            <!-- Question 3 -->
            <div class="mb-3">
                <label for="question3" class="form-label">3. Trouble falling or staying asleep, or sleeping too much?</label>
                @include('partials.radio-options', ['name' => 'question3'])
            </div>
        @elseif($step == 4)
            <!-- Question 4 -->
            <div class="mb-3">
                <label for="question4" class="form-label">4. Feeling tired or having little energy?</label>
                @include('partials.radio-options', ['name' => 'question4'])
            </div>
        @elseif($step == 5)
            <!-- Question 5 -->
            <div class="mb-3">
                <label for="question5" class="form-label">5. Poor appetite or overeating?</label>
                @include('partials.radio-options', ['name' => 'question5'])
            </div>
        @elseif($step == 6)
            <!-- Question 6 -->
            <div class="mb-3">
                <label for="question6" class="form-label">6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down?</label>
                @include('partials.radio-options', ['name' => 'question6'])
            </div>
        @elseif($step == 7)
            <!-- Question 7 -->
            <div class="mb-3">
                <label for="question7" class="form-label">7. Trouble concentrating on things, such as reading the newspaper or watching television?</label>
                @include('partials.radio-options', ['name' => 'question7'])
            </div>
        @elseif($step == 8)
            <!-- Question 8 -->
            <div class="mb-3">
                <label for="question8" class="form-label">8. Moving or speaking so slowly that other people could have noticed? Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual?</label>
                @include('partials.radio-options', ['name' => 'question8'])
            </div>
        @elseif($step == 9)
            <!-- Question 9 -->
            <div class="mb-3">
                <label for="question9" class="form-label">9. Thoughts that you would be better off dead, or of hurting yourself in some way?</label>
                @include('partials.radio-options', ['name' => 'question9'])
            </div>
        @endif

        @if($step < 9)
            <button type="submit" class="btn btn-primary mt-3">Next</button>
        @else
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        @endif
    </form>
</div>
@endsection
