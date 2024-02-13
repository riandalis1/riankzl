@extends('dashboard.layouts.main')

@section('container')
    <h1 class="text-white text-center text-md md:text-xl lg:text-2xl mb-4 font-semibold">
        Welcome Back, <span class="text-cyan-500 font-bold">{{ auth()->user()->name }}</span>!
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div class="border-2 border-dashed border-gray-600 rounded-lg h-32 md:h-64"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-600 h-32 md:h-64"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-600 h-32 md:h-64"></div>
        <div class="border-2 border-dashed rounded-lg border-gray-600 h-32 md:h-64"></div>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-600 h-96 mb-4"></div>
@endsection()
