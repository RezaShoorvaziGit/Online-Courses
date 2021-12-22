@extends('./layouts.app')

@section('content')
<div class="row">
    <div class="flex items-center">
        <a href="{{route('createcours')}}" class=" btn btn-secondary  text-gray text-sm py-2 px-4  rounded">
            <i class="fas fa-plus"></i>
            <span>ایجاد دوره</span>
        </a>
    </div>
</div>

<div class="row  justify-center">

    @foreach ($courses as $course)
    <div class="col-3 m-2">
        <div class="card" style="width: 20rem; ">
           <a href="{{route("showcourse",["id"=>$course->id])}}">
            <img class="card-img-top p-3" src="{{ asset("img/1.svg") }}" alt="Card image cap"
            style="width: 18rem; height: 10rem;">
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



@endsection