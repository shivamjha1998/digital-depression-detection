<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    /**
     * Display the PHQ-9 questionnaire.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('questionnaire'); // Using the name of your view file.
    }

    /**
     * Handle the form submission, calculate the depression score, and give feedback.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // You can retrieve the answers like so:
        $answers = $request->all();
        unset($answers['_token']);  // Remove CSRF token from the list

        // Calculate the total score
        $totalScore = array_sum($answers);

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

        // Redirect back with the feedback
        return view('result', [
            'score' => $totalScore,
            'interpretation' => $feedback
        ]);
    }
}
