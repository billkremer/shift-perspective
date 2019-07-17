<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Question;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    /**
     * Show the main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // get current quiz questions
        $quizId = 1; // get the first quiz 
        // this could be passed dynamically if there are multiple quizzes.
        // for this code challenge, there is one quiz
        $questions = Question::where('quizid', $quizId)->select('id', 'question', 'dimension', 'direction', 'meaning')->get();

// dump($questions->all()); 

        return view('home', ['questions' => $questions->all()]);
    }


    /**
     * Create a new shortened url.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function results(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email',

        ]);

       



        $su = new Shorturl();
        $su->userid = Auth::user()->id;
        $su->url = $request->get('url');
        $su->shorturl = $newSU;

        $su->save();

        return view('results', ['results' => $results]);
    }

    /**
     * Create a new shortened url.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    private function calculateResults($resultArray) 
    {
        $returnArray = [];



        return $returnArray;
    }


}
