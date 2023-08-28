<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Data tables-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">

    {{-- Bishaw custom css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/frontend/custom.css')}}">



    <script>
        let BASE_URL = {!! json_encode(url('/')) !!} + "/";
    </script>

    <!-- Page Style -->
    @if (isset($headstyle))
        {{ $headstyle }}
    @endif

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="font-exo antialiased print:justify-center">


    @include('layouts.gnavigation')

    <div class="min-h-screen bg-uorange/20 print:w-full">
        <!-- Page Content -->
        <main class="relative print:w-full">
            <x-auth-session-status :status="Session::get('message')" class="mt-20" id="flashpop"></x-auth-session-status>
            {{ $slot }}
        </main>



    </div>


    @include('layouts.gfooter')


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js"
        integrity="sha512-lYMiwcB608+RcqJmP93CMe7b4i9G9QK1RbixsNu4PzMRJMsqr/bUrkXUuFzCNsRUo3IXNUr5hz98lINURv5CNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Datatables --}}
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
    <script src="{{asset('js/frontend/coustom.js')}}"></script>

    <!-- Page Script -->
    @if (isset($script))
        {{ $script }}
    @endif
</body>

</html>
