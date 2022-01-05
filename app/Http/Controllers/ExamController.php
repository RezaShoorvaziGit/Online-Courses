<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;
use App\Models\QuestionRepository;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hekmatinasser\Verta\Verta;

class ExamController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        $courses = $user->courses->pluck('id')->toArray();

        if ($user->hasRole('Admin')) {
            $exams =   Exam::all();
        } elseif ($user->hasRole('Teacher')) {
            $exams =   Exam::whereIn('course_id', $courses)->get();
        } elseif ($user->hasRole('Student')) {
            $exams =   Exam::whereIn('course_id', $courses)->get();
        }


        return view('exam.index', compact('exams'));
    }

    public function create()
    {
        $courses =  Course::all();
        return view('exam.create', compact('courses'));
    }

    public function store(Request $request)
    {
        session()->forget('questionsAdded');
        $dataOfHolding = $request->data_of_holding;
        $dataOfHolding = to_english_numbers($dataOfHolding);
        $dataOfHolding = Verta::parse($dataOfHolding);
        $dataOfHolding = Carbon::instance($dataOfHolding->datetime())->isoFormat('YYYY-MM-DD HH:MM:SS');
        $exam = Exam::create($request->all());
        $examId = $exam->id;
        $exam = Exam::find($examId);
        $exam->date_of_holding = $dataOfHolding;
        // dd($dataOfHolding) ;
        $exam->save();


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

        if (session('questionsAdded') == null) {
            $questionAdded = [];
        } else {
            $questionAdded = session('questionsAdded');
        }

        $questions = QuestionRepository::where('user_id', $userId)->whereNotIn('id', $questionAdded)->get();


        return view('exam.add_question', compact('examId', 'questions'));
    }
    public function addQuestionsStore(Request $request)
    {
        $question = Question::create([
            'text' => $request->text,
            'exam_id' => $request->examId,
        ]);
        $examId = $request->examId;

        $questionId = $question->id;

        $answer = $request->answer;

        $options = $request->options;

        foreach ($options as $k => $v) {
            $status = false;
            if ($answer == $k + 1) {
                $status = true;
            }
            Answer::create([
                'text' => $v,
                'question_id' => $questionId,
                'status' => $status,
            ]);
        }
        if (session('questionsAdded') == null)
            session()->put('questionsAdded', []);


        session()->push('questionsAdded',  $request->question_repository_id);

        return redirect()->route('addquestions', ['examId' => $examId]);
    }


    public function show($id)
    {
        $exam = Exam::find($id);


        return view('exam.show', compact('exam'));
    }


    public function holding($id)
    {
        $user_id = auth()->user()->id ;
        $questions = Exam::find($id)->questions()->simplePaginate(1) ;
        $examId = $id ;

        return view('exam.holding',compact('questions','user_id','examId')) ;
    }
}
