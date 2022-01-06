<?php

namespace App\Http\Middleware;

use App\Models\Exam;
use Closure;
use Illuminate\Http\Request;

class CeckStatusExam
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $exam = Exam::find($request->id);
        $startTime = strtotime($exam->date_of_holding);
        $endTime = $startTime + $exam->time * 60;
        if (time() > $startTime and time() < $endTime) {
            $exam = Exam::find($request->id);
            $exam->status = 'holding';
            $exam->save();
        } elseif (time() < $startTime) {
            $exam = Exam::find($request->id);
            $exam->status = 'off';
            $exam->save();
        } elseif (time() > $endTime) {
            $exam = Exam::find($request->id);
            $exam->status = 'end';
            $exam->save();
        }


        return $next($request);
    }
}
