@extends('layouts.main')

@section('container')
    <section class="bg-transparent">
        <div class="py-8 px-0 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-24 mb-24">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-100">
                    About
                </h2>
                <p class="font-light text-gray-400 sm:text-xl">
                    Hello, I am Riandalis Purnama Deva, a civilian who also happens to be a Web Developer. Currently busy
                    enjoying life by living it. I usually celebrate my birthday on May 29th.
                </p>
            </div>

            <div class="">
                <div class="max-w-screen-xl md:ms-8 ps-2 md:ps-8 relative">
                    <div class="max-w-3xl text-center mt-16 mb-8">
                        <h1
                            class="mb-4 text-2xl lg:text-3xl tracking-tight font-extrabold text-gray-100 hover:text-cyan-500 duration-100 text-left">
                            Education
                        </h1>
                    </div>

                    <div class="flow-root max-w-3xl mt-6 sm:mt-8 lg:mt-10">
                        <div class="-my-4 divide-y divide-gray-700 md:me-6">
                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal sm:text-right text-gray-400 shrink-0">
                                    Elementary school
                                </p>
                                <h3 class="text-lg font-semibold text-white hover:text-cyan-500 duration-300">
                                    SDN 1 Sukoharjo
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal sm:text-right text-gray-400 shrink-0">
                                    Junior High School
                                </p>
                                <h3 class="text-lg font-semibold text-white hover:text-cyan-500 duration-300">
                                    SMP N 5 Pati
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal sm:text-right text-gray-400 shrink-0">
                                    Senior Highschool
                                </p>
                                <h3 class="text-lg font-semibold text-white hover:text-cyan-500 duration-300">
                                    SMA N 3 PATI
                                </h3>
                            </div>

                            <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                                <p class="w-32 text-lg font-normal sm:text-right text-gray-400 shrink-0">
                                    University
                                </p>
                                <h3 class="text-lg font-semibold text-white hover:text-cyan-500 duration-300">
                                    Universitas Dian Nuswantoro
                                </h3>
                            </div>
                        </div>
                    </div>

                    <h2
                        class="mt-16 mb-8 text-2xl lg:text-3xl tracking-tight font-extrabold text-gray-100 hover:text-cyan-500 duration-100 text-left">
                        Experience
                    </h2>

                    <div class="flow-root max-w-3xl">
                        <div class="pb-8 ps-4 md:ps-8 relative text-gray-100 border-l border-gray-700">
                            <div class="absolute font-extrabold top-0 -left-[3px]">-</div>
                            <h2 class="font-extrabold text-2xl mb-4">Lorem</h2>
                            <h3 class="font-normal text-xl mb-2">Lorem, ipsum dolor.</h3>
                            <ul class="max-w-md space-y-1 list-disc list-inside text-gray-400">
                                <li>
                                    At least 10 characters (and up to 100 characters)
                                </li>
                                <li>
                                    At least one lowercase character
                                </li>
                            </ul>
                        </div>
                        <div class="pb-8 ps-4 md:ps-8 relative text-gray-100 border-l border-gray-700">
                            <div class="absolute font-extrabold top-0 -left-[3px]">-</div>
                            <h2 class="font-extrabold text-2xl mb-4">Lorem</h2>
                            <h3 class="font-normal text-xl mb-2">Lorem, ipsum dolor.</h3>
                            <ul class="max-w-md space-y-1 list-disc list-inside text-gray-400">
                                <li>
                                    At least 10 characters (and up to 100 characters)
                                </li>
                                <li>
                                    At least one lowercase character
                                </li>
                            </ul>
                        </div>
                        <div class="pb-8 ps-4 md:ps-8 relative text-gray-100 border-l border-gray-700">
                            <div class="absolute font-extrabold top-0 -left-[3px]">-</div>
                            <h2 class="font-extrabold text-2xl mb-4">Lorem</h2>
                            <h3 class="font-normal text-xl mb-2">Lorem, ipsum dolor.</h3>
                            <ul class="max-w-md space-y-1 list-disc list-inside text-gray-400">
                                <li>
                                    At least 10 characters (and up to 100 characters)
                                </li>
                                <li>
                                    At least one lowercase character
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2
                        class="mt-16 mb-8 text-2xl lg:text-3xl tracking-tight font-extrabold text-gray-100 hover:text-cyan-500 duration-100 text-left">
                        Skill & Tolls
                    </h2>

                    <div class="flow-root max-w-3xl">
                        <div class="pb-8 ps-4 md:ps-8 relative text-gray-100 border-l border-gray-700">
                            <div class="absolute font-extrabold top-0 -left-[3px]">-</div>
                            <h2 class="font-extrabold text-2xl mb-4">Programming Languages</h2>
                            <div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    HTML
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-5/6"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    CSS/SCSS
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/5"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Javascript
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/6"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    PHP
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-5/6"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    SQL
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-8 ps-4 md:ps-8 relative text-gray-100 border-l border-gray-700">
                            <div class="absolute font-extrabold top-0 -left-[3px]">-</div>
                            <h2 class="font-extrabold text-2xl mb-4">Technologies</h2>
                            <div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Tailwind CSS
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-5/6"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Bootstrap
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/5"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Flowbite
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/6"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Webpack
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-5/6"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Express
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-8 ps-4 md:ps-8 relative text-gray-100 border-l border-gray-700">
                            <div class="absolute font-extrabold top-0 -left-[3px]">-</div>
                            <h2 class="font-extrabold text-2xl mb-4">Softwares and Tools
                            </h2>
                            <div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    VS Code
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-5/6"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Node.js
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/5"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Git
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/6"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Figma
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-5/6"></div>
                                    </div>
                                </div>
                                <div
                                    class="inline-block relative text-xs px-4 py-2 bg-cyan-950/50 rounded-lg border border-cyan-900 overflow-hidden">
                                    Photoshop
                                    <div class="w-full absolute bottom-[1px] left-0 rounded-full h-[2px] bg-gray-700">
                                        <div class="bg-green-600 h-[2px] rounded-full w-4/5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
