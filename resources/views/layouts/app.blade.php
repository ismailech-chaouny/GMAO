<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('styles')
    @yield('links')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/pages/auth.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/pages/timeline.css') }}" />
    <link rel="stylesheet"href="{{asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/pages/simple-datatables.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/choices.js/public/assets/styles/choices.css') }}" />
    
    <title>@yield('title')</title>
</head>

<body>
    @yield('content')
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/choices.js/choices.min.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/initTheme.js') }}"></script>
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/parsley.js') }}"></script>
    <script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>
    @yield('scripts')
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
