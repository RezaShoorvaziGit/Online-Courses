@extends('layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
@endsection
@section('content')


<div class="home">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">داشبورد</h2>
        </div>
        <div class="flex flex-wrap items-center">
            {{-- <a href="{{ route('profile') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded"> --}}
            </a>
        </div>
    </div>

    @role('Admin')
        @include('dashboard.admin')
    @endrole


    @role('Teacher')
        @include('dashboard.teacher')
    @endrole

    @role('Student')
        @include('dashboard.student')
    @endrole


</div>


<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

@endsection
