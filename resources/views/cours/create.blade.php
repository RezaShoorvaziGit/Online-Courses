@extends('./layouts.app')

@section('content')
<div class="row">
    <div class="col-2  ">
        <form style="margin-top: 2rem">
            <div class="mb-3">
                <input type="text" class="form-control" id="nationalcode" name="nationalcode"
                    placeholder="کد ملی">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="نام و نام خانوادگی">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    آقایان
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    خانم ها
                </label>
            </div>

                    <input type="submit" class="btn btn-outline-warning col-12 my-3" value="فیلتر کردن">

        </form>
    </div>
    <div class="col-10 ">
        <form>
            <div class="row justify-center m-2">
                <div class="col-2 ">
                    <input type="submit" class="btn btn-danger" value="ایجاد دوره" />
                </div>
                <div class="form-group col-5  ">
                    <input type="text" class="form-control text-center" name="title" placeholder="نام دوره">
                </div>

            </div>
            <div class="row justify-center m-2">
                <div class="form-group col-8">
                    <textarea class="form-control  text-center" name="description" id="exampleFormControlTextarea1"
                        rows="3" placeholder="توضیحات دوره"></textarea>
                </div>
            </div>
            <div class="row justify-center m-2">
                <div class="col-4">
                    <label for="start_date"> تاریخ شروع دوره</label>

                    <input type="date" name="start_date" id="start_date">
                </div>
                <div class="col-4">
                    <label for="end_date" id="end_date"> تاریخ پایان دوره </label>

                    <input type="date" name="end_date">
                </div>
            </div>
            <div class="row m-3 justify-center">
                <div class="col-7">
                    <select name="teacher_id"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state">
                        <option value="">.&ensp;&ensp;استاد دوره&ensp;&ensp;</option>
                        @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">.&ensp;&ensp;{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row m-3 justify-center">
                @foreach ($students as $student)
                <div class="col-3 m-2">
                    <div class="card" style="width: 20rem; ">
                        <img class="card-img-top p-3" src="{{ asset("img/1.svg") }}" alt="Card image cap"
                            style="width: 18rem; height: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $student->name }}</h5>
                            <p class="card-text">
                            <ul>
                                <div class="row my-2">
                                    <li class="col-6">سه دوره فعال </li>
                                    <li class="col-6">20 ساله </li>
                                </div>
                                <div class="row">
                                    <li class="col-5"> 19.75</li>
                                    <li class="col-5">6440125801</li>
                                </div>
                            </ul>
                            </p>
                            <input class="form-check-input" type="checkbox" value="{{ $student->id }}" id="addCourse">
                            <label for="addCourse" class="px-2">به دوره اضافه شود</label>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </form>
    </div>


</div>

@endsection