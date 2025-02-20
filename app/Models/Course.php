<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;



    protected $fillable = [
        'title',
        'start_at',
        'end_at',
        'description',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    

    public function exams(){
        return $this->hasMany(Exam::class) ;
    }
}
