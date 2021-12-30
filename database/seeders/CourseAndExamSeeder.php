<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseAndExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $course1 = Course::create([
            'title'=>' زیست شناسی یازدهم',
            'start_at'=>'2021-12-28',
            'end_at'=>'2021-12-31',
            'description'=>'این دوره برای جمع بندی درس زیست شناسی پایه ی دهم تشکیل شده است. این دوره پیش نیازی لازم ندارد لارم به ذکر است در پابان دوره به نمرات بالای 80 گواهی رسمی تعلق میگیرد.',

        ]);

       $course2 =  Course::create([
            'title'=>'جمع بندی شیمی ریاضی دهم',
            'start_at'=>'2021-12-27',
            'end_at'=>'2021-12-30',
            'description'=>'این دوره برای شیمی و ریاضی دهم تشکیل شده است و دارای 5 آزمون می باشد که در صورت قبولی با نمره بالای 70 به شما گواهی رسمی آموزشگاه تعلق میگیرد.',
        ]);

        DB::table('course_user')->insert([
            ['course_id' =>  $course1->id,'user_id'=>2],
            ['course_id' =>  $course1->id,'user_id'=>4],
            ['course_id' =>  $course1->id,'user_id'=>5],
            ['course_id' =>  $course1->id,'user_id'=>13],

            ['course_id' =>  $course2->id,'user_id'=>2],
            ['course_id' =>  $course2->id,'user_id'=>7],
            ['course_id' =>  $course2->id,'user_id'=>5],
            ['course_id' =>  $course2->id,'user_id'=>12],
        ]);
        
    }
}
