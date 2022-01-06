@extends('./layouts.app')

@section('content')
    <div class="row">
        <div class="row justify-center">
            <div class="col-6">
                <table class="table table-primary table-striped border">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th class="text-center" scope="col">کارنامه آزمون زیست شناسی</th>
                            <th class="text-start " id="down"><i id="show"
                                    class="fas fa-chevron-down px-3 py-1 text-danger "></i></th>
                            <th class="text-start px-3 py-1 " id="up" style="display: none"><i id="hide"
                                    class="fas fa-chevron-up text-danger"></i></th>
                        </tr>
                    </thead>
                    <tbody style="display: none" id="tbody">
                        <tr>
                            <td>زمان شروع</td>
                            <td></td>
                            {{-- <td>{{$reportCard->start_at}}</td> --}}
                            <td>16 دی ماه 1400 14:26:00</td>
                        </tr>
                        <tr>
                            <td>پایان آزمون</td>
                            <td></td>
                            {{-- <td>{{$reportCard->end_at}}</td> --}}
                            <td>16 دی ماه 1400 14:29:47</td>
                        </tr>
                        <tr>
                            <td>زمان صرف شده</td>
                            <td></td>
                            <td>3 دقیقه 47 ثانیه</td>
                        </tr>
                        <tr>
                            <td>نمره از {{$reportCard->score_total}}</td>
                            <td></td>
                            <td>{{$reportCard->score}}</td>
                        </tr>
                        <tr>
                            <td>حداقل نمره قبولی آزمون</td>
                            <td></td>
                            <td>30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @foreach ($questions as $question)

            <div class="row border my-2">
                <div class="col-2 border-start bprder-info">
                    <div class="row mt-3" style="margin-left: 1px ; margin-right:1px ">
                        <table class="table ">
                            <tr>
                                <th>شماره سوال</th>
                                <td>{{$question->id}}</td>
                            </tr>
                            <tr>
                                <th>بارم سوال</th>
                                <td>{{$question->score}}</td>
                            </tr>
                            <tr>
                                <th>سطح سوال</th>
                                <td>متوسط</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        @if (in_array($question->id, $questionFalse))
                            <div class="h1 text-danger" style="text-align:center; margin:15% auto; ">
                                <i class="fas fa-times-circle"></i>
                            </div>
                        @endif
                        @if (in_array($question->id, $questionTrue))
                            <div class="h1 text-success" style="text-align:center; margin:15% auto; ">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        @endif
                        @if (in_array($question->id, $questionNone))
                            <div class="h1 text-secondary" style="text-align:center; margin:15% auto; ">
                            <i class="fas fa-minus-circle"></i>
                        </div>
                        @endif



                    </div>
                </div>
                <div class="col-10">
                    <div class="col-12 h5 my-3">{{ $question->text }}</div>
                    @foreach ($question->answers as $answer)

                        @php
                            if ($answer->status == true) {
                                $trueAnswer = $answer->text;
                            }
                        @endphp
                        <div class="col my-2">
                            <div class="form-check">
                                <label class="form-check-label mt-1" for="flexRadioCheckedDisabled">
                                    {{ $answer->text }} 
                                </label>
                                <input class="form-check-input float-end mx-2" type="radio" name="{{ $question->id }}"
                                    id="flexRadioCheckedDisabled" <?php echo in_array($answer->id, $studentAnswers) ? 'checked' : ''; ?> disabled>

                            </div>
                        </div>
                    @endforeach
                    <div class="my-3 mr-5 p-2 shadow rounded" style="background-color: #f8d8af ; color: #7d5a29">
                        پاسخ درست « {{ $trueAnswer }} » است.
                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/reportcard/show.js') }}">

    </script>

@endsection
