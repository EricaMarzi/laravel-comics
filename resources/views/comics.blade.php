<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME', 'DC' )}} | {{$title}}</title>
    <link rel="icon" href="{{asset('images/dc-logo.png')}}">
</head>

<body>
    <div class="container">
        <div class="logo">
            <!-- <img src="../assets/dc-comics-1/img/dc-logo.png" alt=""> --> <!--devi rimettere le immagini-->
        </div>

        <div>
            <header>
                <ul class="navbar">
                    <li><a href="{{route('char')}}">Characters</a></li>
                    <li><a href="{{route('comics')}}">Comics</a></li>
                    <li><a href="{{route('movie')}}">Movie</a></li>
                    <li><a href="{{route('TV')}}">Tv</a></li>
                    <li><a href="{{route('games')}}">Games</a></li>
                    <li><a href="{{route('collectibles')}}">Collectibles</a></li>
                    <li><a href="{{route('videos')}}">Videos</a></li>
                    <li><a href="{{route('fans')}}">Fans</a></li>
                    <li><a href="{{route('news')}}">News</a></li>
                    <li><a href="{{route('shop')}}">Shop</a></li>
                </ul>
            </header>
            <main>
                comics
            </main>
            <footer>
                footer
            </footer>
        </div>
    </div>
</body>

</html>