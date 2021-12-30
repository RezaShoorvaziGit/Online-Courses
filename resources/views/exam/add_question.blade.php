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
    <div class="row">
        <div class="col-2 ">
            <form {{route('addquestions',['examId'=>$examId])}} style="margin-top: 2rem">
                <div>

                    <div class="form-group">
                        <select id='myselect' multiple>
                            <option value="1">آسان</option>
                            <option value="2">متوسط</option>
                            <option value="3">دشوار</option>
                        </select>
                    </div>
                </div>
                <div class="my-3">

                    <div class="form-group">
                        <select id='myselect2' multiple>
                            <option value="1">ریاضیات</option>
                            <option value="2">زیست</option>
                        </select>
                    </div>
                </div>


                <input type="submit" class="btn btn-outline-warning col-12 my-3" value="فیلتر کردن">

            </form>
        </div>
        <div class="col-10 ">



                @foreach ($questions as $question)
                 <form action="{{route("addquestionsstore")}}" method="POST">
                    @csrf
                @php
                 $value = 0 ;

                $answers = $question->answersrepository ;
                @endphp
                <div class="my-3">

                    <div class="row border border-dark ">
                        <div class="col-7">
                       <input type="text" name="text" class="border col-12 my-2 " value="{{$question->text}}">
                           <input type="hidden" value="{{$examId}}" name="examId"> 
                           <input type="hidden" value="{{$question->id}}" name="question_repository_id"> 

                        </div>
                        <div class="col-3">
                            <a href="" class="btn btn-sm my-2 btn-secondary ">{{$question->subject}}</a>
                            <a href=""
                                class="btn  btn-sm my-2 {{$question->btn_level}}">{{$question->question_level}}</a>
                        </div>
                        {{-- <div class="col-2"> <a href="" class="btn btn-primary my-2">ویرایش سوال</a> </div> --}}
                        <div class="col-2"> <input type="submit" class="btn btn-primary my-2" value="افزودن به آزمون"> </div>
                    </div>

                    <div class="row bg-secondary rounded-3 ">
                        @foreach ($answers as $answer)
                        @php
                        $value = $value + 1 ;
                        $status = 'fs-5' ;
                        $checked = "" ;
                        if($answer['status']== true){
                        $status = 'text-success fs-4' ;
                        $checked = "checked" ;
                        }

                        @endphp

                        <div class="col-2 {{$status}} m-3">

                            <div class="input-group">
                                <div class="input-group-text">
                                  <input class="form-check-input mt-0" name="answer" value="{{$value}}" type="radio" {{$checked}}>
                                </div>
                                <input type="text" class="form-control"   name="options[]"   value="{{$answer['text']}} " >
                              </div>
                        </div>
                        @endforeach
                        <div class="col-1">
                            <input class="border form-control mt-3" type="text" placeholder="بارم   ">

                        </div>
                    </div>

                </div>

            </form>

                @endforeach

        </div>
    </div>
</div>



<script>
    $('#myselect').select2({
        width: '100%',
        placeholder: "سطح دشواری",
        allowClear: true
    });

    $('#myselect2').select2({
        width: '100%',
        placeholder: "مبحث سوالات",
        allowClear: true
    });
</script>
@endsection