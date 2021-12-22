<?php

namespace App\Http\Controllers;

use App\Models\AnswersRepository;
use App\Models\Question;
use App\Models\QuestionRepository;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions =QuestionRepository::all();

        return view('question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all()) ;

        $userId = auth()->user()->id;
        $question =   QuestionRepository::create([
            'user_id' => $userId,
            'text' => $request->text,
            'subject' => $request->subject,
            'type' => $request->type,
        ]);
        $questionId = $question->id;
        if ($request->type == 'multiple_options') {
            $answer = $request->answer;

            $options = $request->options;

            foreach ($options as $k => $v) {
                $status = false;
                if ($answer == $k)
                    $status = true;
                AnswersRepository::create([
                    'text' => $v,
                    'question_repository_id' => $questionId,
                    'status' => $status,
                ]);
            }
        } elseif ($request->type == 'descriptive') {
            AnswersRepository::create([
                'text' => $request->answer,
                'question_repository_id' => $questionId,
                'status' => true,
            ]);

        }

      return redirect()->route('indexquestion') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
