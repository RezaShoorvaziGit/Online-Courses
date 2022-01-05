@extends('./layouts.app')
@section('content')
    <div class="alert alert-success" style="display:none"></div>

    @foreach ($questions as $question)

        {{-- <form  action="{{route('holding.store')}}" method="POST"> --}}
            <form >
            <input type="hidden" value="{{ $user_id }}" name="user_id" id="user_id">
            <input type="hidden" value="{{ $examId }}" name="exam_id" id="exam_id">
            <input type="hidden" value="{{ $question->id }}" name="question_id" id="question_id">
            <h1>{{ $question->text }}</h1>


            <div class="row">
                @foreach ($question->answers as $answer)
                    <div class="col-4 m-3">

                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0 answer" name="answer" value="{{ $answer->id }}"
                                    type="radio">
                            </div>
                            <input class="form-control" type="text" value="{{ $answer->text }}"
                                aria-label="Disabled input example" disabled readonly>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <input type="submit" name="" id=""> --}}
            {{ $questions->appends(['examId'=>$examId])->links('paginate.simplePaginateExam') }}

        </form>

   
    @endforeach

@endsection

@section('js') ;
<script src="{{asset('js/exam/holding.js')}}">

</script>

@endsection
