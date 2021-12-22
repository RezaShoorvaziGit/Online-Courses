@extends('./layouts.app')

@section('content')

<div class="row">
    <div class="flex items-center">
        <a href="{{route('createexam')}}" class=" btn btn-secondary  text-gray text-sm py-2 px-4  rounded">
            <i class="fas fa-plus"></i>
            <span>ایجاد آزمون</span>
        </a>
    </div>
</div>

<div class="row my-5">
    <table class="table border border-dark table-striped">
        <thead>
          <tr>
            <th scope="col">نام آزمون</th>
            <th scope="col">تاریخ برگزاری</th>
            <th scope="col">مدت زمان آزمون</th>
            <th scope="col">کد دوره</th>
            <th scope="col">کد دوره</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($exams as $exam)
          <tr>
            <td>{{$exam->title}}</td>
            <td>{{$exam->date_of_holding}}</td>
            <td>{{$exam->time}}</td>
            <td>{{$exam->id}}</td>
            <td>
              <a href="{{route('editexam',['id'=>$exam->id])}}" class="mx-2">

                <i class="fas fa-pen"></i>

              </a>
              <a  href="{{route('destroyexam',['id'=>$exam->id])}}" class="mx-2">
                
                <i class="far fa-trash-alt text-danger"></i>

              </a>
            </td>
         
          </tr>
          @endforeach
      
    
        </tbody>
      </table>
</div>

  
@endsection