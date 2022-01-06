@extends('./layouts.app')

@section('content')

    <h1>{{ $exam['title'] }}</h1>


    <div class="row justify-center">
        <div class="col-6">
            <table class="table">

                <tbody>
                    <tr>
                        <td>تاریخ برگزاری آزمون</td>
                        <td> {{ $exam['date_of_holding'] }} </td>
                    </tr>
                    <tr>
                        <td>نام دوره ی مربوط</td>
                        <td> </td>

                    </tr>
                    <tr>
                        <td>زمان آزمون</td>
                        <td> {{ $exam['time'] }} دقیقه</td>
                    </tr>
                    <tr>
                        <td>تعداد شرکت کنندگان</td>
                        <td> {{ $count }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-center">
        @if ($exam['status'] == 'holding')
            <div class="col-4">
                <a href="{{ route('exam.holding', ['id' => $exam['id']]) }}" class="btn btn-info">شرکت در آزمون</a>
            </div>
        @endif
        @if ($exam['status'] == 'off')
            <div class="col-4">
                <p>آزمون هنوز شروع نشده است منتظر بمانید ....</p>
                <a class="btn btn-info">بازگشت به درس</a>
            </div>
        @endif
        @if ($exam['status'] == 'end')
            <div class="col-4">
                <p>این آزمون به پایان رسیده است .... </p>

                <a class="btn btn-info">بازگشت به درس</a>

            </div>
        @endif
    </div>
@endsection
