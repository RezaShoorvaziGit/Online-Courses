<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCard extends Model
{
    use HasFactory;
    public $fillable = [
        'start_at',
        'end_at',
        'score',
        'score_total',
        'exam_id',
        'user_id',
    ] ;
}
