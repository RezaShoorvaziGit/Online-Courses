@extends('./layouts.app')

@section('content')

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
@endsection

<div>
    <div class="row mb-5">
        <button class=" btn btn-danger">لیست آزمون ها</button>
    </div>
    <form action="">
        <div class="row">
            <div class="col-2 ">
                <form {{route('addquestions',['examId'=>$examId])}} style="margin-top: 2rem">
                    <div>

                        <div class="form-group">
                            <strong>Name:</strong>
                            <select id='myselect' multiple>
                                <option value="">Select An Option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-outline-warning col-12 my-3" value="فیلتر کردن">

                </form>
            </div>
            <div class="col-10 ">



                @foreach ($questions as $question)
                @php
                $answers = $question->answersrepository ;
                @endphp
                <div>

                    <div class="row border border-dark">
                        <div class="col-7 my-2">{{$question->text}}</div>
                        <div class="col-3">
                            <a href="" class="btn btn-sm my-2 btn-secondary ">{{$question->subject}}</a>
                            <a href=""
                                class="btn  btn-sm my-2 {{$question->btn_level}}">{{$question->question_level}}</a>
                        </div>
                        {{-- <div class="col-2"> <a href="" class="btn btn-primary my-2">ویرایش سوال</a> </div> --}}
                        <div class="col-2"> <a href="" class="btn btn-primary my-2">افزودن به آزمون</a> </div>
                    </div>

                    <div class="row bg-secondary rounded-3 ">
                        @foreach ($answers as $answer)
                        @php
                        $status = 'fs-5' ;
                        if($answer['status']== true)
                        $status = 'text-success fs-4' ;
                        @endphp

                        <div class="col-2 m-3 {{$status}}">

                            {{$answer['text']}}

                        </div>
                        @endforeach

                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </form>
</div>

@section('js')

@endsection

<script>
    $('#myselect').select2({
        width: '100%',
        placeholder: "Select an Option",
        allowClear: true
    });
</script>
@endsection