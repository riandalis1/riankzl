@extends('layouts.main')

@section('container')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue format-invert py-4">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-8 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="{{ $blog->user->name }}">
                            <div>
                                <p class="text-xl font-bold text-white">
                                    {{ $blog->user->name }}
                                </p>
                                <p class="text-base text-gray-400">
                                    Software Developers
                                </p>
                                <p class="text-base text-gray-400">
                                    {{ $blog->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    </address>
                    <div class="mb-4 lg:mb-6 ">
                        <h1 class="text-3xl font-extrabold leading-tight lg:text-4xl text-white">
                            {{ $blog->title }}
                        </h1>
                        <p class="my-0 py-0 text-gray-500">
                            @if ($blog->category)
                                Category: <span class="text-gray-300">{{ $blog->category->name }}</span>
                            @else
                                Category: <span class="text-red-500">Category has been deleted</span>
                            @endif
                        </p>
                    </div>
                </header>

                <figure>
                    <img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt="">
                    <figcaption>Digital art by Anonymous</figcaption>
                </figure>


                {{-- BODY --}}
                <div class="text-gray-300 prose lg:prose-xl">
                    {!! $blog->body !!}
                </div>
            </article>
        </div>
    </main>
@endsection()
