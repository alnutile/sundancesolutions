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

<body class="antialiased bg-gray-800">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-gray-800">
        <!-- Header -->
        <div class="relative pb-32 bg-gray-800">
            <div class="absolute inset-0">
                {{-- <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100"
                    alt=""> --}}
                <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Sundance Solutions,
                    LLC</h1>
                <p class="mt-6 max-w-3xl text-xl text-gray-300">
                    Your internal applications or Saas Products built right and built with Laravel.
                    info@sundancesolutions.io
                </p>
            </div>
            <div>
                @include('shared.logo')
            </div>
        </div>
    </div>

</body>

</html>
