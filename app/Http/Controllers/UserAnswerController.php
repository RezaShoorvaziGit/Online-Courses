<?php

namespace App\Http\Controllers;

use App\Models\UserAnswer;
use Illuminate\Http\Request;

class UserAnswerController extends Controller
{


    public function store(Request $request)
    {


        $userAnswer = UserAnswer::updateOrCreate([
            'question_id'=>$request->question_id,],
            ['user_id'=>$request->user_id,'answer'=>$request->answer,'exam_id'=>$request->exam_id]);


        return response()->json(['success'=>'Data is successfully added']);

        // return redirect()->back() ;
        
    }



}
