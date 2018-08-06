<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Answer;
use App\Question;



class AdminController extends Controller
{
    public function index() {
        $questions = Question::get();
        $answers = new Answer;
        $i = 1;
        return view('view_faqs', compact('questions', 'answers','i'));
    }
}