<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="author" content="David Grzyb" />
    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- form tailwind dashboard --}}
    <style>
        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }

    </style>
    <!-- Styles -->

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-gray-100 font-family-karla flex">
    @include('includes.backend.sidebar')
    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        @include('includes.backend.header')

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-2xl text-black pb-6">@yield('title')</h1>
                <!-- Content goes here!  -->
                @yield('content')
            </main>

            <footer class="w-full bg-white text-center p-4">
                &copy COPYRIGHT 2021
            </footer>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="{{ mix('/js/app.js') }} "></script>

    @stack('addon-script')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    </script>
    <x-livewire-alert::scripts />
</body>

</html>
