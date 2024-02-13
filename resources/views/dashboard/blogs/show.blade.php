@extends('dashboard.layouts.main')

@section('container')
    <h1 class="text-white text-center text-md md:text-xl lg:text-2xl mb-4 font-semibold">
        Detail <span class="text-cyan-500">blog</span>
    </h1>

    <!-- Start coding here -->
    <div
        class="relative rounded-lg flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 ">
        <article
            class="bg-gray-800/25 rounded-lg overflow-hidden px-2 py-4 md:px-4 md:py-6 mx-auto w-full max-w-3xl format format-sm sm:format-base lg:format-lg format-blue format-invert border border-cyan-700/25">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center justify-between mb-8 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-white">
                        <img class="mr-4 w-16 h-16 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $blog->user->name }}">
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

                    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                        class="md:mr-3 inline-flex items-center p-2 text-sm font-medium text-center rounded-lg focus:ring-2 focus:outline-none text-white bg-gray-800 hover:bg-gray-700 focus:ring-gray-600"
                        type="button">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 16 3">
                            <path
                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownDotsHorizontal"
                        class="z-10 hidden divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                        <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <a href="/dashboard/blogs/{{ $blog->slug }}/edit"
                                    class="flex items-center px-4 py-2 hover:bg-gray-600 hover:text-white">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z" />
                                    </svg> Edit
                                </a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="flex items-center w-full px-3 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg> Delete
                                </button>
                            </form>

                        </div>
                    </div>
                </address>
                <div class="mb-4 lg:mb-6 ">
                    <h1 class="text-3xl font-extrabold leading-tight lg:text-4xl text-white">
                        {{ $blog->title }}
                    </h1>
                    <p class="my-0 py-0 text-gray-500">
                        @if ($blog->category)
                            Category : <span class="text-gray-300">{{ $blog->category->name }}</span>
                        @else
                            Category: <span class="text-red-500">Category has been deleted</span>
                        @endif
                    </p>
                </div>
            </header>

            <figure class="mb-4 w-full">
                @if ($blog->image)
                    <img class="mx-auto rounded-lg" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    <figcaption class="text-gray-500 text-center text-sm">By: {{ $blog->user->name }}</figcaption>
                @else
                    <div class="hidden">
                        <img src="http://source.unsplash.com/1200x400?{{ $blog->title }}" alt="{{ $blog->title }}"
                            class="mx-auto rounded-lg">
                        <figcaption class="text-gray-500 text-center text-sm">By: {{ $blog->user->name }}</figcaption>
                    </div>
                @endif
            </figure>


            {{-- BODY --}}
            <div class="text-gray-300 prose lg:prose-xl">
                {!! $blog->body !!}
            </div>
        </article>
    </div>
@endsection()
