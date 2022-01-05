@extends('./layouts.app')

@section('content')
    <div class="row">
        @foreach ($questions as $question)

            <div class="row border my-2">
                <div class="col-2 border-start bprder-info">
                    <div class="row mt-3" style="margin-left: 1px ; margin-right:1px ">
                        <table class="table ">
                            <tr><th>شماره سوال</th><td>1</td></tr>
                           <tr><th>بارم سوال</th><td>20</td></tr>
                            <tr><th>سطح سوال</th><td>متوسط</td></tr>
                        </table>
                    </div>
                    <div class="row">
                        {{-- <div class="h1 text-success" style="text-align:center; margin:15% auto; ">
                            <i class="fas fa-check-circle"></i>
                        </div> --}}
                        <div class="h1 text-danger" style="text-align:center; margin:15% auto; ">
                            <i class="fas fa-times-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="col-12 h5 my-3">{{ $question->text }}</div>
                    @foreach ($question->answers as $answer)
                  
                    @php
                        if($answer->status==true)
                            $trueAnswer = $answer->text
                    @endphp
                        <div class="col my-2">
                            <div class="form-check">
                                <label class="form-check-label mt-1" for="flexRadioCheckedDisabled">
                                    {{ $answer->text }} {{$answer->id}}
                                </label>
                                <input class="form-check-input float-end mx-2" type="radio" name="{{$question->id}}"
                                    id="flexRadioCheckedDisabled" <?php echo (in_array($answer->id,$userAnswer)) ? 'checked' : ''?> disabled>

                            </div>
                        </div>
                    @endforeach
                    <div class="my-3 mr-5 p-2 shadow rounded" style="background-color: #f8d8af ; color: #7d5a29">
                        پاسخ درست « {{$trueAnswer}} » است.
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
