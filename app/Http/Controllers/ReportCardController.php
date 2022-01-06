<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use App\Models\ReportCard;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Break_;
use Prophecy\Argument\Token\InArrayToken;

class ReportCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userId = auth()->user()->id;
        $questions = Exam::find($id)->questions;
        $studentAnswers = UserAnswer::where([
            ['exam_id', '=', $id],
            ['user_id', '=', $userId],
        ])->pluck('answer')->toArray();

        $trueAnswers = Answer::where([
            ['exam_id', '=', $id],
            ['status', '=', true],
        ])->pluck('id')->toArray();
        $questionTrue = [];
        $questionFalse = [];
        $questionNone = [];
        $studentScore = 0  ;
        $totalScore = 0  ;

        foreach ($trueAnswers as $trueAnswer) {
            $score = Answer::find($trueAnswer)->question->score;
            $totalScore += $score ;
            if (in_array($trueAnswer, $studentAnswers)) {
                $question = Answer::find($trueAnswer)->question->id;
                $score = Answer::find($trueAnswer)->question->score;
                $studentScore += $score ;
                array_push($questionTrue, $question);
            } else {
                foreach ($studentAnswers as $studentAnswer) {
                    $answerTotal = Answer::find($studentAnswer)->question->answers->pluck('id')->toArray();
                    if (in_array($trueAnswer, $answerTotal)) {
                        $question = Answer::find($trueAnswer)->question->id;
                        array_push($questionFalse, $question);
                    }
                }
                $question = Answer::find($trueAnswer)->question->id;
                if (!in_array($question, $questionFalse))
                    array_push($questionNone, $question);
            }
        }
        $reportCard = ReportCard::create([
            'user_id'=>$userId,
            'exam_id'=>$id,
            'score'=>$studentScore,
            'score_total'=>$totalScore,
        ]);
        return view('reportCard.show', compact('questions', 'studentAnswers','reportCard','questionTrue','questionFalse','questionNone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCard $reportCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCard $reportCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCard $reportCard)
    {
        //
    }
}
