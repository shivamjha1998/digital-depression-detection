<div class="container mt-5">
    <h2 class="text-center mb-4">PHQ-9 Depression Questionnaire</h2>
    
    <form action="{{ route('questionnaire.store') }}" method="post">
        @csrf

        <!-- Question 1 -->
        <div class="mb-3">
            <label for="question1" class="form-label">1. Little interest or pleasure in doing things?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question1" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 2 -->
        <div class="mb-3">
            <label for="question2" class="form-label">2. Feeling down, depressed, or hopeless?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question2" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 3 -->
        <div class="mb-3">
            <label for="question2" class="form-label">3. Trouble falling or staying asleep, or sleeping too much?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 4 -->
        <div class="mb-3">
            <label for="question2" class="form-label">4. Feeling tired or having little energy?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question4" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 5 -->
        <div class="mb-3">
            <label for="question2" class="form-label">5. Poor appetite or overeating?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question5" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 6 -->
        <div class="mb-3">
            <label for="question2" class="form-label">6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question6" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question6" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question6" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question6" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 7 -->
        <div class="mb-3">
            <label for="question2" class="form-label">7. Trouble concentrating on things, such as reading the newspaper or watching television?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question7" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question7" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question7" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question7" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 8 -->
        <div class="mb-3">
            <label for="question2" class="form-label">8. Moving or speaking so slowly that other people could have noticed?
Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question8" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question8" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question8" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question8" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <!-- Question 9 -->
        <div class="mb-3">
            <label for="question2" class="form-label">9. Thoughts that you would be better off dead, or of hurting yourself in some way?</label>
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question9" value="0" required>
                    <label class="form-check-label">Not at all</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question9" value="1">
                    <label class="form-check-label">Several days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question9" value="2">
                    <label class="form-check-label">More than half the days</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question9" value="3">
                    <label class="form-check-label">Nearly every day</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
