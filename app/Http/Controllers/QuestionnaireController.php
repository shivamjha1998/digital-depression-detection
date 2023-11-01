<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
{
    /**
     * Display the PHQ-9 questionnaire.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($step = 1)
    {
        return view('questionnaire', ['step' => $step]);
    }


    /**
     * Handle the form submission, calculate the depression score, and give feedback.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $step = 1)
    {
        // Store the answer in the session
        session(["question{$step}" => $request->input("question{$step}")]);

        if($step < 9) {
            return redirect()->route('questionnaire.show', ['step' => $step + 1]);
        } else {
            // Calculate the total score using session data
            $totalScore = 0;
            for ($i = 1; $i <= 9; $i++) {
                $totalScore += session("question{$i}");
            }

            // Based on the totalScore, you can provide feedback to the user.
            // For instance: (You can refine this based on the PHQ-9 scoring guidelines)
            if ($totalScore <= 4) {
                $feedback = "Your symptoms suggest minimal depression.";
            } elseif ($totalScore <= 9) {
                $feedback = "Your symptoms suggest mild depression.";
            } elseif ($totalScore <= 14) {
                $feedback = "Your symptoms suggest moderate depression.";
            } elseif ($totalScore <= 19) {
                $feedback = "Your symptoms suggest moderately severe depression.";
            } else {
                $feedback = "Your symptoms suggest severe depression.";
            }

            // If user is logged in, store the score in the database
            if (Auth::check()) {
                $user = Auth::user();
                $user->scores()->create([
                    'score' => $totalScore,
                ]);
            }

            // Redirect back with the feedback
            return view('result', [
                'score' => $totalScore,
                'interpretation' => $feedback
            ]);
        }
    }
}
