<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
        'description',
        'time',
        'title',
        'course_id',
        'date_of_holding',
    ] ;

    public function course(){
        return $this->belongsTo(Course::class) ;
    }
}
