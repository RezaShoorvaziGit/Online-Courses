@extends('./layouts.app')

@section('content')


@role('Admin')
@include('exam.teacherIndex')
@endrole


@role('Teacher')
@include('exam.teacherIndex')
@endrole

@role('Student')
@include('exam.studentIndex')
@endrole


  
@endsection