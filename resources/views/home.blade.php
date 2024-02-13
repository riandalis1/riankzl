@extends('layouts.main')

@section('container')
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div
                class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-gray-100/10 hover:ring-gray-100/20">
                See some posts.
                <a href="/blogs" class="font-semibold text-cyan-600"><span class="absolute inset-0" aria-hidden="true">
                    </span>Read more <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-6xl shadow-cyan-300">
                Welcome to <span class="text-cyan-500">My Blog!</span>
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-400">
                This blog contains information about <span class="font-semibold">Riandalis</span>, his writings about
                anything,
                as
                well as my stories.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/blogs"
                    class="rounded-md bg-gradient-to-r from-blue-600 to-cyan-600 px-5 py-3 text-sm font-semibold border border-cyan-500 text-gray-200 shadow-sm hover:bg-gradient-to-r hover:from-cyan-600 hover:to-blue-600 hover:text-gray-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600 duration-1000">
                    Go to blogs!
                </a>
            </div>
        </div>
    </div>
@endsection()
