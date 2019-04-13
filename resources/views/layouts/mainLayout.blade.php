<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body class="bkg">
    <div class="bkg2">
        <div class="container">
            <header>
                    <div class="row row-center">
                        <div class="logoView">
                            <a href="{{url('/')}}">
                                <div>Kenneth Lepping</div>
                                <div>Video Game Music</div>
                            </a>
                        </div>
                        <nav class="topNav">
                            <ul class="flex-container">
                                <li><a href="{{url('/music')}}"><span>Music</span></a></li>
                                <li><a href="{{url('/projects')}}"><span>Projects</span></a></li>
                                <li><a href="{{url('/about')}}"><span>About</span></a></li>
                                <li><a href="{{url('/articles')}}"><span>Articles</span></a></li>
                                <li><a href="{{url('/assets')}}"><span>Assets</span></a></li>
                                <li><a href="{{url('/contact')}}"><span>Contact</span></a></li>
                            </ul>
                        </nav>
                    </div>
            </header>
            <main>@yield('mainContent')</main>
            <footer></footer>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>