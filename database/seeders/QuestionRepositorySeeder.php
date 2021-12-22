<?php

namespace Database\Seeders;

use App\Models\AnswersRepository;
use App\Models\QuestionRepository;
use Illuminate\Database\Seeder;
class question{
    public $text ;
    public $subject;
    public function __construct($text,$subject)
    {
        $this->text = $text;
        $this->subject = $subject;
    }
} ;

class answer{
    public $question_repository_id;
    public $text ;
    public $status ;
    public function __construct($question_repository_id,$text,$status = false)
    {
        $this->question_repository_id = $question_repository_id;
        $this->text= $text ;
        $this->status = $status ;
    }
}
class QuestionRepositorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
$questions = [
    new question('کدام یک از موجودات زیر پستاندار است ؟','زیست شناسی'),
    new question('با کدام وسیله ی زیر میتوان نور را تجزیه کرد؟','زیست شناسی'),
    new question('کدام یک از موجودات زنده زیر میتواند فتوسنتز را انجام  دهد؟','زیست شناسی'),
    new question('حاصل عبارت(25+10-5) کدام گزینه است؟','ریاضیات'),
    new question('اختلاف سن علی و پدرش 30سال است اکنون سن پدر علی 3 برابر سن او است سن پدر علی چند است؟','ریاضیات'),
    new question('کدام گزینه عددی اول را به ما نشان نمیدهد؟','ریاضیات'),
] ;
        // $questions = [
        //     'کدام یک از موجودات زیر پستاندار است ؟',
        //     'با کدام وسیله ی زیر میتوان نور را تجزیه کرد؟',
        //     'کدام یک از موجودات زنده زیر میتواند فتوسنتز را انجام  دهد؟',
        //     'حاصل عبارت(25+10-5) کدام گزینه است؟',
        //     'کدام گزینه عددی اول را به ما نشان نمیدهد؟',
        //     'اختلاف سن علی و پدرش 30سال است اکنون سن پدر علی 3 برابر سن او است سن هر کدام را مشخص کنید.',
        // ];

        $naswers = [
            new answer('1','مرغ'),
            new answer('1','پروانه'),
            new answer('1','اسب',true),
            new answer('1','مار'),

            new answer('2','ذره بین'),
            new answer('2','منشور',true),
            new answer('2','تلسکوپ'),
            new answer('2','دوربین'),

            new answer('3','کاکتوس',true),
            new answer('3','پشه'),
            new answer('3','مورچه'),
            new answer('3','شته'),

            new answer('4','20',true),
            new answer('4','-5'),
            new answer('4','-20'),
            new answer('4','15'),

            new answer('5','45',true),
            new answer('5','15'),
            new answer('5','36'),
            new answer('5','47'),

            new answer('6','11'),
            new answer('6','23',true),
            new answer('6','93'),
            new answer('6','37'),
        ] ;
   
        $questions = collect($questions)->map(function ($questions) {
            return ['text' => $questions->text, 'type' => 'multiple_options', 'subject' => $questions->subject,'user_id'=>1,'created_at'=>now(),'updated_at'=>now()];
        });

        QuestionRepository::insert($questions->toArray());

        $naswers = collect($naswers)->map(function($naswers){

            return ['text'=> $naswers->text,'question_repository_id'=> $naswers->question_repository_id,'status'=>$naswers->status,'created_at'=>now(),'updated_at'=>now()] ;
        }) ;

        AnswersRepository::insert($naswers->toArray()) ;
        

    }
}
