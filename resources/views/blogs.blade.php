@extends('layouts.main')

@section('container')
    <section class="bg-transparent">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-100">
                    My Blog
                </h2>
                <p class="font-light text-gray-400 sm:text-xl">
                    This blog contains information about Rian, his writings about
                    anything, as well as my stories.
                </p>

                <div class="mt-4">
                    <form action="/blogs" method="GET">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif

                        <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="default-search" name="search"
                                class="block w-full p-4 ps-10 text-sm border rounded-lg bg-gray-900 border-gray-800 placeholder-gray-400 text-white focus:ring-cyan-700 focus:border-cyan-700"
                                placeholder="Search Blogs" autocomplete="off" value="{{ request('search') }}">
                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 bg-cyan-600 hover:bg-cyan-700 focus:ring-cyan-800">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @if ($blogs->count())
                <div class="grid gap-8 lg:grid-cols-2">
                    @foreach ($blogs as $blog)
                        <article class="p-6 bg-gray-950/50 rounded-lg border border-gray-900 shadow-md">
                            <div class="flex justify-between items-center mb-5 text-gray-500">
                                <span
                                    class="bg-primary-100 text-primary-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200">
                                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                        </path>
                                    </svg>
                                    @if ($blog->category)
                                        {{ $blog->category->name }}
                                    @else
                                        <span class="text-red-700">Category has been deleted</span>
                                    @endif
                                </span>
                                <span class="text-sm">
                                    {{ $blog->created_at->diffForHumans() }}
                                </span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-100">
                                <a href="/blogs/{{ $blog->slug }}">
                                    {{ $blog->title }}
                                </a>
                            </h2>
                            <div class="mb-5 font-light text-gray-500 line-clamp-2">
                                {!! $blog->body !!}
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4 text-gray-300">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Jese Leos avatar" />
                                    <span class="font-medium">
                                        {{ $blog->user->name }}
                                    </span>
                                </div>
                                <a href="/blogs/{{ $blog->slug }}"
                                    class="inline-flex items-center font-medium text-primary-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="my-4">
                    {{ $blogs->links() }}
                </div>
            @else
                <div class="px-5 py-3 bg-red-500/25 lg:w-1/3 mx-auto text-center text-red-50">
                    No post found
                </div>
            @endif
        </div>
    </section>
@endsection()
