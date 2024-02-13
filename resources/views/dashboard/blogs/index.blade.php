@extends('dashboard.layouts.main')

@section('container')
    <h1 class="text-white text-center text-md md:text-xl lg:text-2xl mb-8 font-semibold">
        All<span class="text-cyan-500"> blogs</span>
    </h1>

    <!-- Start coding here -->
    <div class="bg-gray-800/30 relative shadow-md sm:rounded-lg overflow-hidden border border-cyan-700/25">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="border text-sm rounded-lg block w-full pl-10 p-2 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Search" required="">
                    </div>
                </form>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <a href="/dashboard/blogs/create"
                    class="flex items-center justify-center text-white focus:ring-4 font-medium rounded-lg text-sm px-4 py-2 bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Add new blog
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Title</th>
                        <th scope="col" class="px-4 py-3">Category</th>
                        <th scope="col" class="px-4 py-3">Created at</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                @if ($blogs->count())
                    @foreach ($blogs as $blog)
                        <tbody>
                            <tr class="border-b border-gray-700">
                                <th scope="row" class="px-4 py-3 font-medium whitespace-nowrap text-white">
                                    {{ $blog->title }}
                                </th>
                                <td class="px-4 py-3">
                                    @if ($blog->category)
                                        {{ $blog->category->name }}
                                    @else
                                        <span class="text-red-500">Category has been deleted</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    {{ $blog->created_at->diffForHumans() }}
                                </td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button id="apple-{{ $blog->slug }}-button"
                                        data-dropdown-toggle="apple-{{ $blog->slug }}"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center rounded-lg focus:outline-none text-gray-400 hover:text-gray-100"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                    <div id="apple-{{ $blog->slug }}"
                                        class="hidden z-10 w-44 rounded divide-y shadow bg-gray-700 divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-200"
                                            aria-labelledby="apple-{{ $blog->slug }}-button">
                                            <li>
                                                <a href="/dashboard/blogs/{{ $blog->slug }}"
                                                    class="block py-2 px-4 hover:bg-gray-600 hover:text-white">
                                                    Show
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/blogs/{{ $blog->slug }}/edit"
                                                    class="block py-2 px-4 hover:bg-gray-600 hover:text-white">
                                                    Edit
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="/dashboard/blogs/{{ $blog->slug }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('Are you sure?')"
                                                    class="block w-full text-left py-2 px-4 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                @else
                    <div class="px-5 py-3 bg-red-500/25 lg:w-1/3 mx-auto text-center text-red-50">
                        No post found
                    </div>
                @endif
            </table>
        </div>
        <div class="p-4">
            {{-- Pagination --}}
            {{ $blogs->links() }}
        </div>
    </div>
@endsection()
