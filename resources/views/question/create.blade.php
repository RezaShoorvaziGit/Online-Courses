@extends('./layouts.app')


@section('content')

<div>
    <form action="{{route('storequestion')}}" method="POST">

        @csrf
        
        <div class="row">
            <div class="mb-3 col-9">
                <input type="text" class="form-control" id="text" name="text"
                    placeholder="استاد محترم متن سوال خود را در این فیلد وارد کنید">
            </div>
            <div class="mb-3 col-2">
                <input type="text" class="form-control" id="text" name="subject"
                    placeholder="موضوع سوال">
            </div>
          
        </div>



        <div class="row justify-content-center ">
            <div class="col">
                <a href="#" class="btn btn-info" onclick="divVisibility('Div2');">چهار گزینه ای</a>

            </div>
            <div class="col">
                <a href="#" class="btn btn-info" onclick="divVisibility('Div1');">تشریحی</a>
            </div>

        </div>

        <div class="row m-5" id="Div1" style="display: none">
            <input type="hidden" name="type" id="type1" value="descriptive">
            <div class="mb-3 ">
                <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="3">
                    استاد محترم لطفا پاسخ صحیح و مورد انتظار خود را در این کادر وارد کنید.
                </textarea>
            </div>
        </div>


        <div class="row m-5" id="Div2">
             <input type="hidden" name="type" value="multiple_options">

            <div>
                <input type="submit" id="options" class="btn btn-warning opacity-75 btn-sm mt-4 mx-4" value="افزودن گزینه">
            </div>
            <div class="col-5 m-3">
                <input type="radio" name="answer" class="mx-2" id="" value="1">
                <input type="text" class="border col-11" id="" name="options[1]" placeholder="متن گزینه خود را اینجا وارد کنید">
            </div>
            <div class="col-5 m-3">
                <input type="radio" name="answer" class="mx-2" id="" value="2">
                <input type="text" class="border col-11" id=""  name="options[]" placeholder="متن گزینه خود را اینجا وارد کنید">
            </div>
            <div class="col-5 m-3">
                <input type="radio" name="answer" class="mx-2" id="" value="3">
                <input type="text" class="border col-11" id=""  name="options[]" placeholder="متن گزینه خود را اینجا وارد کنید">
            </div>
            <div class="col-5 m-3">
                <input type="radio" name="answer" class="mx-2" id="" value="4">
                <input type="text" class="border col-11" id=""  name="options[]" placeholder="متن گزینه خود را اینجا وارد کنید">
            </div>
      

        </div>

        <div>
            <input type="submit" value="ایجاد سوال" class="btn btn-outline-success mx-3">
        </div>
    </form>
</div>

<div>
    <div class="row">
        <div class="col5">
            <h1>سوالات</h1>
        </div>
    </div>
</div>

@endsection




@section('js') ;
<script src="./js/question/create.js">

</script>
@endsection