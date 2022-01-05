<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ReportCard;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

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
        $userAnswer = UserAnswer::where([
            ['exam_id', '=', $id],
            ['user_id', '=', $userId],
        ])->pluck('answer')->toArray();
        return view('reportCard.show', compact('questions', 'userAnswer'));
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
