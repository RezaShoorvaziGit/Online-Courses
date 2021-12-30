@extends('./layouts.app')

@section('content')
@can("AdminTeacher")
<div class="row">
    <div class="flex items-center">
        <a href="{{route('createcours')}}" class=" btn btn-secondary  text-gray text-sm py-2 px-4  rounded">
            <i class="fas fa-plus"></i>
            <span>ایجاد دوره</span>
        </a>
    </div>
</div>
@endcan

<div class="row  justify-center">

    @foreach ($courses as $course)
    <div class="col-3 m-2">
        <div class="card" style="width: 20rem; ">
           <a href="{{route("showcourse",["id"=>$course->id])}}">
            <img class="card-img-top p-3" src="{{ asset("img/course.svg") }}" alt="Card image cap"
            style="width: 18rem; height: 10rem;">
           </a>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $student->name . " " . $student->family}}</h5> --}}
                <p class="card-text">
                <ul>
                    <div class="row my-2">
                        <li class="col-12">{{$course->title}} </li>
                    </div>
                    <div class="row">
                        

                    </div>
                </ul>
                </p>
           
            </div>
        </div>
    </div>
    @endforeach

</div>



@endsection