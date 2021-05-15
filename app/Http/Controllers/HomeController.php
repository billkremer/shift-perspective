<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

use App\Models\Question;
use App\Models\Answer;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }


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
        $questions = Question::where('quizid', $quizId)->select('id', 'question', 'dimension', 'direction', 'meaning')->orderBy('id', 'asc')->get();

        return view('home', ['questions' => $questions->all(), 'quizId' => $quizId]);
    }


    /**
     * Display the results of the test.
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function results(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email',
        ]);
        // can't easily validate that questions have been answered since they are created dynamically

        // check whether the user exists or create a new one.
        $user = User::where('email', $request->email)->first();

        if (empty($user->id)) {
            $user = new User();
            $user->email = $request->email;
            $user->save();
        };

        foreach ($request->all() as $key => $value) {
            if (Str::contains($key, 'questionAnswer')) {
                $questionId = explode('-',$key)[1];
                $resultArray[$questionId] = $value;

                $ans = new Answer();
                $ans->questionid = $questionId;
                $ans->userid = $user->id;
                $ans->answer = $value;
                $ans->save();
            }
        }

        $questionData = Question::whereIn('quizid', array_keys($resultArray))->select('id', 'question', 'dimension', 'direction', 'meaning')->get();

        $results = $this->calculateResults($resultArray, $questionData);

        return view('results', ['results' => $results]);
    }


    /**
     * Calculate the result of the quiz.
     * @param Array $resultArray
     * @param Array $questionData
     * @return Array $arrayToReturn
     */
    private function calculateResults($resultArray, $questionData) 
    {
        $arrayToReturn = ['summary' => '', // ENTJ
                        'EI' => 4, // numerical value, default=4
                        'SN' => 4,                    
                        'TF' => 4,                    
                        'JP' => 4,                    
                        ];

        $accumulatorArray = ['EI' => ['total' => 0, 'count' => 0],
                             'SN' => ['total' => 0, 'count' => 0],
                             'TF' => ['total' => 0, 'count' => 0],
                             'JP' => ['total' => 0, 'count' => 0], ];

                        // dump($resultArray, $questionData); 


        foreach ($resultArray as $questionId => $result) {
            $question = $questionData->where('id', $questionId)->first();

            // TODO consider using:
            // total = ($question->dimension + 1) * 0.5 * ($result) + ($question->dimension - 1) * -0.5 * (8 - $result)
            // -1 goes to 0. 1 stays 1 & vice versa, do in one line, but unnecessarily complicated?
            if ($question->direction > 0) {
                $accumulatorArray[$question->dimension]['total'] += $result;
            } else {
                $accumulatorArray[$question->dimension]['total'] += (8 - $result);
            }
            $accumulatorArray[$question->dimension]['count'] += 1;

        }

        foreach ($accumulatorArray as $dimension => $values) {
            $arrayToReturn[$dimension] = $values['total']/$values['count'];

            if ($arrayToReturn[$dimension] <= 4 ) {
                    $arrayToReturn['summary'] .= substr($dimension,0,1);
            } else {
                    $arrayToReturn['summary'] .= substr($dimension,1,1);
            }

        }

        return $arrayToReturn;
    }











}
