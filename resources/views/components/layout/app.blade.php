@props(['title' => '', "actions" => ''])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$title}} </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col gap-3 p-8">
            {{-- Page Header --}}
            <header class="navbar mb-2 p-2 shadow-sm bg-base-100 text-base-content flex justify-between">
                <div class="flex gap-3 items-center">
                    <label for="my-drawer-2" class="btn btn-primary btn-sm drawer-button lg:hidden">
                        <i class="fa-solid fa-bars"></i>
                    </label>
                    <h1 class="text-2xl font-bold">{{ $title }}</h1>
                </div>
                <div>
                  {{$actions}}
                </div>

            </header>

            {{-- Alerts --}}
            <x-layout.alerts />

            {{-- Page Content --}}
            <!-- Page content here -->
            {{ $slot }}
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <x-layout.sidebar />
            </ul>
        </div>
    </div>
</body>

</html>
