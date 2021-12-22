<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswersRepository extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'question_repository_id',
        'status',
    ] ;

    public function questionrepository(){
        return $this->belongsTo(QuestionRepository::class,'question_repository_id') ;
    }
}
