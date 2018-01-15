<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>




    <body>
        @include('partials._nav')

        <div class="container">

            @include('partials._messages')

            @yield('body')

            @include('partials._footer')

        </div> <!-- en of .container-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>