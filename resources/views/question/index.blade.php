@extends('./layouts.app')

@section('content')
<div class="row">
  <div class="flex items-center">
    <a href="{{route('createquestion')}}" class=" btn btn-secondary  text-gray text-sm py-2 px-4  rounded">
      <i class="fas fa-plus"></i>
      <span>افزودن سوال</span>
    </a>
  </div>
</div>


<div class="row my-5">

  @foreach ($questions as $question)
  @php
    $answers = $question->answersrepository ;
  @endphp
    <div>

      <div class="row border border-dark">
        <div class="col-7 my-2" >{{$question->text}}</div>
        <div class="col-3">
          <a href="" class="btn btn-sm my-2 btn-secondary ">{{$question->subject}}</a>
          <a href="" class="btn  btn-sm my-2 {{$question->btn_level}}">{{$question->question_level}}</a>
        </div>
        <div class="col-2"> <a href="" class="btn btn-primary my-2">ویرایش سوال</a> </div>
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
@endsection