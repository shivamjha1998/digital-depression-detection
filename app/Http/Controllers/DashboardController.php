<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $scoresData = $user->scores()->orderBy('created_at', 'desc')->get();
        
        $dates = $scoresData->pluck('created_at')->map(function ($date) {
            return $date->format('Y-m-d');
        })->toArray();

        $scores = $scoresData->pluck('score')->toArray();

        return view('dashboard', compact('dates', 'scores'));
    }
}
