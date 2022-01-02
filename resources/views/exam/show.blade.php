@extends('./layouts.app')

@section('content')

    <h1>{{ $exam->title }}</h1>


    <div class="row justify-center">
        <div class="col-6">
            <table class="table">

                <tbody>
                    <tr>
                        <td>تاریخ برگزاری آزمون</td>
                        <td>  </td>
                    </tr>
                    <tr>
                        <td>نام دوره ی مربوط</td>
                        <td>  </td>
                   
                    </tr>
                    <tr>
                        <td>زمان آزمون</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>تعداد شرکت کنندگان</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-center">
        <div class="col-4" >
            <a href="{{route('exam.holding',['id'=>$exam->id])}}" class="btn btn-info">شرکت در آزمون</a>
        </div>
    </div>
@endsection
