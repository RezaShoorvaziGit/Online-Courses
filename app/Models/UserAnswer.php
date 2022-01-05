<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;
    protected $primaryKey = 'question_id';

    public $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'answer',
    ] ;
}
