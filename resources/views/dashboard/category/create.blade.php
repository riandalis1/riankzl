@extends('dashboard.layouts.main')

@section('container')
    <h1 class="text-white text-center text-md md:text-xl lg:text-2xl mb-4 font-semibold">
        Add <span class="text-cyan-500">new category</span>
    </h1>

    <!-- Start coding here -->
    <div
        class="relative rounded-lg flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 ">
        <div
            class="bg-gray-800/25 rounded-lg overflow-hidden px-2 py-4 md:px-4 md:py-6 mx-auto w-full max-w-3xl format format-sm sm:format-base lg:format-lg format-blue format-invert border border-cyan-700/25">
            <form class="mx-auto" method="post" action="/dashboard/categories">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2 mb-3">
                        <label for="title" class="block mb-2 text-sm font-medium text-white">Category Name</label>
                        <input type="text" name="name" id="title"
                            class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 @error('name') border-red-500 @enderror placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Category name" value="{{ old('name') }}">

                        @error('title')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="slug" class="block mb-2 text-sm font-medium text-white">Slug</label>
                        <input type="text" name="slug" id="slug"
                            class="border text-sm rounded-lg block w-full p-2.5 bg-gray-700 @error('slug') border-red-500 @enderror placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Slug category must be unique" value="{{ old('slug') }}">

                        @error('slug')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-white">Description</label>
                        <textarea id="description" rows="5"
                            class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror"
                            placeholder="Write your thoughts here..." name="description">{{ old('description') }}</textarea>

                        @error('description')
                            <p id="filled_error_help" class="mt-2 text-xs text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="flex items-center mx-auto px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-900 hover:bg-primary-800">
                    Add new category
                </button>
            </form>
        </div>
    </div>
@endsection()
