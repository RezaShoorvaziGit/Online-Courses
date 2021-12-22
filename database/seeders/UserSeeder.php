<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'رضا',
            'family'=>'شوروزی' ,
            'phone'=>'09102231636' ,
            'gender'=>'man' ,
            'nationalcode'=>'6440125801' ,
            'email'=>'admin@admin.com',
            'password'=>'123456789',
            'type'=>'admin',
        ]);
        User::create([
            'name'=>'علیرضا',
            'family'=>'صالحی' ,
            'phone'=>'09386205800' ,
            'gender'=>'man' ,
            'nationalcode'=>'6440125801' ,
            'email'=>'student@student.com',
            'password'=>'123456789',
            'type'=>'student',
        ]);
        User::create([
            'name'=>'علی',
            'family'=>'مختار پور' ,
            'phone'=>'09386205800' ,
            'gender'=>'man' ,
            'nationalcode'=>'6440125801' ,
            'email'=>'student3@student.com',
            'password'=>'123456789',
            'type'=>'student',
        ]);
        User::create([
            'name'=>'محمد',
            'family'=>'شعبانی' ,
            'phone'=>'09386205800' ,
            'gender'=>'man' ,
            'nationalcode'=>'6440125801' ,
            'email'=>'teacher@teacher.com',
            'password'=>'123456789',
            'type'=>'teacher',
        ]);
    }
}
