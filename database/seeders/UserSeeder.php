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

        $user1 =  User::create([
            'name' => 'رضا',
            'family' => 'شوروزی',
            'active_status' => true ,
            'phone' => '09102231636',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'admin@admin.com',
            'password' => '123456789',
            'type' => 'admin',
        ]);
        $user1->assignRole('Admin');


        $user2 = User::create([
            'name' => 'محمد',
            'family' => 'کریمی',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'teacher@teacher.com',
            'password' => '123456789',
            'type' => 'teacher',
        ]);
        $user2->assignRole('Teacher');

        $user3 = User::create([
            'name' => 'مریم',
            'family' => 'نوری زاده',
            'phone' => '09386205800',
            'gender' => 'woman',
            'nationalcode' => '6440125801',
            'email' => 'teacher2@teacher.com',
            'password' => '123456789',
            'type' => 'teacher',
        ]);
        $user3->assignRole('Teacher');

        $user4 =  User::create([
            'name' => 'علی',
            'family' => 'هاشمی پور',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user4->assignRole('Student');
        
        $user5 =   User::create([
            'name' => 'رضا',
            'family' => 'صبوری',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student2@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user5->assignRole('Student');

        $user6 =   User::create([
            'name' => 'زهرا',
            'family' => 'کریمی',
            'phone' => '09386205800',
            'gender' => 'woman',
            'nationalcode' => '6440125801',
            'email' => 'student3@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user6->assignRole('Student');

        $user7 =   User::create([
            'name' => 'ماه رخ',
            'family' => 'تیموری',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student4@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user7->assignRole('Student');

        $user8 =   User::create([
            'name' => 'پارسا',
            'family' => 'تهرانی',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student5@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user8->assignRole('Student');

        $user9 =   User::create([
            'name' => 'حسن',
            'family' => 'ثابت قدم',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student6@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user9->assignRole('Student');

        $user10 =   User::create([
            'name' => 'اسماعیل',
            'family' => 'درویش نگار',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student7@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user10->assignRole('Student');

        $user11 =   User::create([
            'name' => 'سمیه',
            'family' => 'یزدان پناه',
            'phone' => '09386205800',
            'gender' => 'woman',
            'nationalcode' => '6440125801',
            'email' => 'student8@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user11->assignRole('Student');

        $user12 =   User::create([
            'name' => 'ترانه',
            'family' => 'کریم زاده',
            'phone' => '09386205800',
            'gender' => 'woman',
            'nationalcode' => '6440125801',
            'email' => 'student9@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user12->assignRole('Student');

        $user13 =   User::create([
            'name' => 'متین',
            'family' => 'حسینی ',
            'phone' => '09386205800',
            'gender' => 'man',
            'nationalcode' => '6440125801',
            'email' => 'student10@student.com',
            'password' => '123456789',
            'type' => 'student',
        ]);
        $user13->assignRole('Student');

    }
}
