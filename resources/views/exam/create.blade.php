@extends('./layouts.app')

@section('content')

@section('css')

    <link rel="stylesheet" href="{{ asset('js/persian-datepicker/dist/css/persian-datepicker.css') }}" />

@endsection
<div>
    <form action="{{ route('storeexam') }}" method="POST">
        @csrf
        <div class="row justify-center m-2">
            <div class="col-2 ">
                <input type="submit" class="btn btn-info" value="ایجاد آزمون" />
            </div>
            <div class="col-5  ">
                <div>
                    <input type="text" class="form-control text-center" name="title" placeholder="عنوان آزمون">
                </div>

            </div>

        </div>
        <div class="row justify-center m-2">
            <div class="form-group col-8">
                <textarea class="form-control  text-center" name="description" id="description" rows="3"
                    placeholder="توضیحات آزمون"></textarea>
            </div>
        </div>

        <div class="row justify-center m-2">
            <div class="col-4">



                <div class="form-group">
                    <div class="input-group col-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                        <input class="date-start form-control pwt-datepicker-input-element">
                        <input type="hidden" name="date_of_holding" class="start-at-form">
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="form-group ">
                    <input type="number" class="form-control" min="1" max="1000" name="time" placeholder="زمان آزمون">
                    <span class="input-group-text">دقیقه</span>
                </div>
            </div>


            {{-- <div class="col-4">
                <label for="end_date" id="end_at" name="end_at"> تاریخ پایان دوره </label>
                        in gesmat bayad ba datapiker saat va tarikh begire!!!!!!!!!!!!!!!
                <input type="date" name="end_at">
            </div> --}}
        </div>

        <div class="row m-3 justify-center">
            <div class="col-5">
                <select name="course_id"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                    <option value="">.&ensp;&ensp;انتخاب دوره&ensp;&ensp;</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">.&ensp;&ensp;{{ $course->title . ' ' . $course->title }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

    </form>
</div>

<script src="{{ asset('js/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('js/persian-datepicker/dist/js/persian-datepicker.min.js') }}"></script>
<script src="{{ asset('js/persian-date/dist/persian-date.min.js') }}"></script>

@endsection

@section('js')

<script type="text/javascript">
    $('.date-start').persianDatepicker({
        altField: '.start-at-form',
        timePicker: {
            enabled: true,
            meridiem: {
                enabled: true
            }
        }
    });
</script>
@endsection
