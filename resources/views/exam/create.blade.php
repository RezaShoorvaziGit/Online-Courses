@extends('./layouts.app')

@section('content')


<div>
    <form action="{{route('storeexam')}}" method="POST">
        @csrf
        <div class="row justify-center m-2">
            <div class="col-2 ">
                <input type="submit" class="btn btn-warning" value="ایجاد آزمون" />
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
               <div class="input-group ">
                <label for="date_of_holding" class="mx-2" > تاریخ برگزاری آزمون </label>

                <input type="date" name="date_of_holding" id="date_of_holding">
               </div>
            </div>
            <div class="col-3">
                <div class="input-group ">
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


@endsection