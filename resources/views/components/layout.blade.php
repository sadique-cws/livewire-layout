<html>
    <head>
        <title>{{ $title ?? 'Form Manager' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>

        </script>
    </head>
    <body>
        <h1>My Form</h1>
        <hr/>
        {{ $slot }}

        {{$footer}}


        @yield('credit')
    </body>
</html>
