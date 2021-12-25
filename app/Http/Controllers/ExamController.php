<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use App\Models\QuestionRepository;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function index()
    {
        $exams =   Exam::all();

        return view('exam.index', compact('exams'));
    }

    public function create()
    {
        $courses =  Course::all();
        return view('exam.create', compact('courses'));
    }

    public function store(Request $request)
    {


        $exam = Exam::create($request->all());
        $examId = $exam->id;

        return redirect()->route('addquestions', ['examId' => $examId]);
    }

    public function edit($id)
    {
        $exam = Exam::find($id);
        $courses = Course::all();

        return view('exam.edite', compact('exam', 'courses'));
    }

    public function update(Request $request)
    {

        $update =  Exam::find($request->id)->update($request->all());

        return redirect()->route('indexexam');
    }

    public function destroy($id)
    {
        Exam::find($id)->delete();
        return redirect()->route('indexexam');
    }
    public function addQuestions($examId)
    {
        $userId = Auth::user()->id;

        $questions = QuestionRepository::where('user_id', $userId)->get();

        return view('exam.add_question', compact('examId', 'questions'));
    }
}
