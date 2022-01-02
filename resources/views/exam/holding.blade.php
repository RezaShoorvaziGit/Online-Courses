@extends('./layouts.app')

@section('content')

@foreach ($questions as $question )
    <h1>{{$question->text}}</h1>


@foreach ($question->answers as $answer )
    <li>{{$answer->text}}</li>
@endforeach

    {{ $questions->links('paginate.simplePaginateExam') }}

@endforeach
@endsection