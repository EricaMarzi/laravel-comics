<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME', 'DC' )}} | {{$title}}</title>
    <link rel="icon" href="{{asset('images/dc-logo.png')}}">

    @vite('resources/js/app.js')
</head>

<body>
    <!--Header-->
    @include('includes.header')
    <main>

    </main>
    <footer>

    </footer>


</body>

</html>