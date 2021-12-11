<div>
    <div class="row justify-center">
        <div class="col-5 m-2 text-center  bg-gray-200 blockquote  ">دانشجویان</div>
        <div class="col-5 m-2 text-center   bg-gray-200  blockquote ">اساتید</div>
    </div>
    <form action="{{ route('acceptUser') }}" method="POST">
        @csrf
        <div class="row justify-center">
            <div class="col-5 m-2 text-center  bg-gray-200 blockquote  ">
                <table class="table table-striped">
                    @foreach ($students as $student)
                    @php
                    $status = ($student->active_status == 1)? "checked" : '';

                    @endphp
                    <tr>
                        <th>{{$student->id}}</th>
                        <th>{{$student->name}}</th>
                        <th>{{$student->family}}</th>
                        <th>{{$student->nationalcode}}</th>
                        <th>
                            <input type="checkbox" name="{{$student->id}}" data-on="فعال" data-off="غیر فعال"
                                {{$status}} data-toggle="toggle" value="1"  data-onstyle="success" data-offstyle="danger"
                                data-size="sm">

                        </th>

                    </tr>
                    @endforeach

                </table>
            </div>

            <div class="col-5 m-2 text-center  bg-gray-200 blockquote  ">
                <table class="table table-striped">
                    @foreach ($teachers as $teacher)
                    @php
                    $status = ($teacher->active_status == 1)? "checked" : '';
                    @endphp
                    <tr>
                        <th>{{$teacher->id}}</th>
                        <th>{{$teacher->name}}</th>
                        <th>{{$teacher->family}}</th>
                        <th>{{$teacher->nationalcode}}</th>
                        <th>
                            <input type="checkbox" name="{{$teacher->id}}" data-on="فعال" data-off="غیر فعال"
                                {{ $status }} data-toggle="toggle" value="1" data-onstyle="success" data-offstyle="danger"
                                data-size="sm">

                        </th>

                    </tr>
                    @endforeach

                </table>
            </div>

             <input type="submit" class="btn btn-outline-secondary col-5 border border-dark border-2 " value="اعمال تغییرات" >


        </div>

    </form>
</div>