{{-- Navbar --}}
<header x-data="{ openSidebar: false }" class="fixed inset-x-0 top-0 z-50 bg-gray-950/80 shadow-lg shadow-gray-900/25">
    <nav class="flex items-center justify-between p-6 lg:px-8 mx-auto max-w-screen-xl" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5 text-gray-50 duration-100 hover:scale-110 md:text-lg">
                Rian<span class="text-cyan-500 font-bold">KZL</span>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" @click="openSidebar = true"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-300">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/"
                class="text-sm font-semibold leading-6 text-gray-100 hover:text-cyan-500 hover:scale-105 duration-300">
                Home
            </a>
            <a href="/blogs"
                class="text-sm font-semibold leading-6 text-gray-100 hover:text-cyan-500 hover:scale-105 duration-300">
                Blogs
            </a>
            <a href="/about"
                class="text-sm font-semibold leading-6 text-gray-100 hover:text-cyan-500 hover:scale-105 duration-300">
                About
            </a>
            <a href="/contact"
                class="text-sm font-semibold leading-6 text-gray-100 hover:text-cyan-500 hover:scale-105 duration-300">
                Contact
            </a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white font-medium rounded-lg text-sm text-center inline-flex items-center"
                    type="button">Welcome back, {{ auth()->user()->username }} <svg class="w-2.5 h-2.5 ms-3"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-gray-700">
                    <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 hover:bg-gray-600 hover:text-white">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="/login"
                    class="text-sm font-semibold leading-6 text-gray-100 hover:text-cyan-500 hover:scale-105 duration-300">
                    Log in
                    <span aria-hidden="true">&rarr;</span>
                </a>
            @endauth
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="openSidebar" class="lg:hidden"
        role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5 text-gray-50 duration-100 hover:scale-110 md:text-lg">
                    <span class="sr-only">Your Company</span>
                    Rian<span class="text-cyan-500 font-bold">KZL</span>
                </a>
                <button @click="openSidebar = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-300">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900">Home</a>
                        <a href="/blogs"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900">Blogs</a>
                        <a href="/about"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900">About</a>
                        <a href="/contact"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900">Contact</a>
                    </div>
                    <div class="py-6">
                        @auth
                            <a href="/dashboard"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900">
                                Dashboard
                            </a>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900 w-full text-left">
                                    Logout
                                </button>
                            </form>
                        @else
                            <a href="/login"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-100 hover:bg-gray-900">
                                Log
                                in
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
