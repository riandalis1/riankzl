<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full border-r md:translate-x-0 bg-gray-900 border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-gray-900">
        <ul class="space-y-2">
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-gray-800 group">
                    <svg aria-hidden="true" class="w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Overview</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/blogs"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-gray-800 group">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V8c0-.6-.4-1-1-1H6a1 1 0 0 0-1 1v3c0 .6.4 1 1 1h3c.6 0 1-.4 1-1Zm0 0v2a4 4 0 0 1-4 4H5m14-6V8c0-.6-.4-1-1-1h-3a1 1 0 0 0-1 1v3c0 .6.4 1 1 1h3c.6 0 1-.4 1-1Zm0 0v2a4 4 0 0 1-4 4h-1" />
                    </svg>
                    <span class="ml-3">Blogs</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/categories"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-white hover:bg-gray-800 group">
                    <svg class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4.9 3C3.9 3 3 3.8 3 4.9V9c0 1 .8 1.9 1.9 1.9H9c1 0 1.9-.8 1.9-1.9V5c0-1-.8-1.9-1.9-1.9H5Zm10 0c-1 0-1.9.8-1.9 1.9V9c0 1 .8 1.9 1.9 1.9H19c1 0 1.9-.8 1.9-1.9V5c0-1-.8-1.9-1.9-1.9h-4Zm-10 10c-1 0-1.9.8-1.9 1.9V19c0 1 .8 1.9 1.9 1.9H9c1 0 1.9-.8 1.9-1.9v-4c0-1-.8-1.9-1.9-1.9H5Zm10 0c-1 0-1.9.8-1.9 1.9V19c0 1 .8 1.9 1.9 1.9H19c1 0 1.9-.8 1.9-1.9v-4c0-1-.8-1.9-1.9-1.9h-4Z"
                            clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3">Category</span>
                </a>
            </li>
            {{-- <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium rounded-lg transition duration-75 group text-white hover:bg-gray-800"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group text-white hover:bg-gray-800">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group text-white hover:bg-gray-800">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group text-white hover:bg-gray-800">
                            Settings
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-700">
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"
                        class="flex w-full  items-center p-2 text-base font-medium rounded-lg transition duration-75 hover:bg-gray-800 text-white group">
                        <svg class="flex-shrink-0 w-6 h-6 transition duration-75 text-gray-400 group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                        </svg>
                        <span class="ml-3">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
