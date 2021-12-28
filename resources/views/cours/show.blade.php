@extends('./layouts.app')

@section('content')
<div class="roles">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">دوره </h2>
        </div>
        <div class="flex flex-wrap items-center">
            <a href="{{ route('indexcours') }}"
                class=" btn btn-light  border-1 border-dark text-sm uppercase py-2 px-4 flex items-center rounded">
                <span class="ml-2 text-xs font-semibold">بازگشت</span>
                <i class="fas fa-long-arrow-alt-left"></i>
               
            </a>
        </div>
    </div>

    <div class="mt-8 bg-white rounded">
        <div class="w-full max-w-none px-6 py-12">

            {{-- <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <img class="w-20 h-20 sm:w-32 sm:h-32 rounded" src="{{ asset('img/1.svg' ) }}" alt="avatar">
                </div>
            </div> --}}
            <div class="row">
                <div class="md:flex md:items-center mb-6 col-7 ">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            نام دوره :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="block text-gray-600 font-bold">{{ $course->title }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 col-5">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                             شروع دوره :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $course->start_at}}</span>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="md:flex md:items-center mb-6 col-7 ">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            توضیحات :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $course->description }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 col-5">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                             پایان دوره :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $course->end_at }}</span>
                    </div>
                </div>
            </div>

<div class="row my-5">

    @foreach ($exams as $exam)
    <div class="col-3 m-2">
        <div class="card" style="width: 15rem; ">
           <a href="{{route("showcourse",["id"=>$exam->id])}}">
            <img class="card-img-top p-3" src="{{ asset("img/1.svg") }}" alt="Card image cap"
            style="width: 18rem; height: 8rem;">
           </a>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $student->name . " " . $student->family}}</h5> --}}
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
                {{-- <input class="form-check-input" type="checkbox" value="{{ $student->id }}" name="students[]"
                    id="addCourse"> --}}
                <label for="addCourse" class="px-2">به دوره اضافه شود</label>
            </div>
        </div>
    </div>
    @endforeach
</div>





        </div>
    </div>

</div>


{{-- <div>
    @foreach ($collection as $item)
        
    @endforeach
</div> --}}
@endsection