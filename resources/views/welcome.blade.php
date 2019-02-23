<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}">

        <title>MeTube - App</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>

        <div class="container-fluid" id="app">

            <div class="row">

                <div class="col-md">

                    <metube-dashboard></metube-dashboard>

                </div>

            </div>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
