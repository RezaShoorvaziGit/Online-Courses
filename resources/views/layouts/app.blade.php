<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4cb48a548e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

  <link rel="stylesheet" href="./css/app/app.css">
  <script src="{{asset('js/app.js')}}">

  </script>
    @yield("css") ;

</head>

<body class="bg-gray-100 font-sans antialiased" style="font-family: byekan ">

    <div id="app">

        @include('layouts.navbar')

        <div class="main flex flex-wrap justify-end mt-16">

            @include('layouts.sidebar')

            <div class="content w-full sm:w-5/6">
                <div class="container mx-auto p-4 sm:p-6">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>


 

    @stack('scripts')


  

 
    @yield("js") ;

</body>

</html>