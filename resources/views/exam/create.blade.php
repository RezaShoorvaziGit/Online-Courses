@extends('./layouts.app')

@section('content')

@section('css')
<link href="{{asset('css/Content/bootstrap.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/Content/bootstrap-theme.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/Content/MdBootstrapPersianDateTimePicker/jquery.Bootstrap-PersianDateTimePicker.css')}}" />

<script src="{{asset('js/Scripts/jquery-2.1.4.js')}}" type="text/javascript"></script>
<script src="{{asset('js/Scripts/bootstrap.min.js')}}" type="text/javascript"></script>

<style type="text/css">
    body, table {
        font-family: 'Segoe UI', Tahoma;
        font-size: 14px;
    }
</style>
@endsection
<div>
    <form action="{{route('storeexam')}}" method="POST">
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
                <textarea class="form-control  text-center" name="description" id="description"
                    rows="3" placeholder="توضیحات آزمون"></textarea>
            </div>
        </div>

        <div class="row justify-center m-2">
            <div class="col-4">
                <div class="form-group">
                    <label class="sr-only" for="exampleInput1">تاریخ و زمان</label>
                    <div class="input-group">
                        <div class="input-group-addon" data-mddatetimepicker="true" data-targetselector="#exampleInput1" data-trigger="click" data-enabletimepicker="true">
                            <span class="glyphicon glyphicon-calendar"><i class="fas fa-clock"></i></span>
                        </div>
                        <input type="text" class="form-control" name="data_of_holding" id="exampleInput1" placeholder="تاریخ به همراه زمان" />
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
                    <option value="{{ $course->id }}">.&ensp;&ensp;{{ $course->title ." " . $course->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </form>
</div>

<script type="text/javascript">
    $('#input1').change(function() {
        var $this = $(this),
            value = $this.val();
        alert(value);
    });
    $('#textbox1').change(function () {
        var $this = $(this),
            value = $this.val();
        alert(value);
    });
</script>
<script src="{{asset('js/Scripts/MdBootstrapPersianDateTimePicker/calendar.js')}}" type="text/javascript"></script>
<script src="{{asset('js/Scripts/MdBootstrapPersianDateTimePicker/jquery.Bootstrap-PersianDateTimePicker.js')}}" type="text/javascript"></script>
@endsection

