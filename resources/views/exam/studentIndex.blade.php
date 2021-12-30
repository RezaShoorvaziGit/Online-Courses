<div class="row  justify-center">

    @foreach ($exams as $exam)
    <div class="col-3 m-2">
        <div class="card" style="width: 20rem; ">
           <a href="{{route("show.exam",["id"=>$exam->id])}}">
            <img class="card-img-top p-3" src="{{ asset("img/exam.svg") }}" alt="Card image cap"
            style="width: 18rem; height: 10rem;">
           </a>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $student->name . " " . $student->family}}</h5> --}}
                <p class="card-text">
                <ul>
                
                    <div class="row">
                        <li class="col-5"> {{$exam->date_of_holding}}</li>
                    </div>
                </ul>
                </p>
                {{-- <input class="form-check-input" type="checkbox" value="{{ $student->id }}" name="students[]"
                    id="addCourse"> --}}
                <label for="addCourse" class="px-2">{{$exam->title}}</label>
            </div>
        </div>
    </div>
    @endforeach

</div>