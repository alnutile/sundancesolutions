<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sundance Solutoins, LLC</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiase">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <!-- Header -->
        <div class="relative pb-32 bg-gray-800">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="/images/logo.png" alt="">
                <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Sundance
                    Solutions,
                    LLC</h1>
                <p class="mt-6 max-w-3xl text-xl text-gray-300">
                    Your internal applications or Saas Products built right and built with Laravel.
                    info@sundancesolutions.io
                </p>
            </div>
        </div>

        <!-- Overlapping cards -->
        <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8"
            aria-labelledby="contact-heading">
            <h2 class="sr-only" id="contact-heading">Contact us</h2>
            <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div
                            class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                            <!-- Heroicon name: outline/phone -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Custom Applications</h3>
                        <p class="mt-4 text-base text-gray-500">
                            From servers to software Sundance Solutions can build your application.
                            With a history of <a class="underline"
                                href="https://www.devops-research.com/quickcheck.html" target="_blank">Elite
                                Performance</a>
                            and strategies like <a class="underline"
                                href="https://www.mindtools.com/pages/article/build-measure-learn.htm"
                                target="_blank">"Build Measure Learn"</a>
                            you know you will get the right application at the right speed.
                        </p>
                    </div>
                    {{-- <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span
                                aria-hidden="true"> &rarr;</span></a>
                    </div> --}}
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div
                            class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                            <!-- Heroicon name: outline/support -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Training</h3>
                        <p class="mt-4 text-base text-gray-500">Have a team already but need help training and setting
                            up the
                            needed Continuous Integration and Continous Delivery pipelines so your team can
                            be enabled to work at <a class="underline"
                                href="https://www.devops-research.com/quickcheck.html" target="_blank">"Elite"</a> speed
                            and stability? </p>
                    </div>
                    {{-- <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span
                                aria-hidden="true"> &rarr;</span></a>
                    </div> --}}
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div
                            class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                            <!-- Heroicon name: outline/newspaper -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Existing Projects</h3>
                        <p class="mt-4 text-base text-gray-500">Have an existing project and need help stabilizing it?

                        </p>
                    </div>
                    {{-- <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span
                                aria-hidden="true"> &rarr;</span></a>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>

</body>

</html>
