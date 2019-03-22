{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Contact</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

    {{--<!-- Styles -->--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
          {{--integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    {{--<style>--}}

    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div class="container">--}}
        {{--<h1>Contact Me</h1>--}}
        {{--<div class="summary">If you’d like to discuss a project, get a demo track or for anything else,--}}
            {{--please contact me using the form below, or you can email--}}
            {{--<a href="mailto: kennylepping@gmail.com" class="">kennylepping@gmail.com</a>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<form action="">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm">--}}
                        {{--<input type="text" name="name" placeholder="Name"--}}
                               {{--class="form-control" aria-describedby="name"--}}
                        {{-->--}}
                    {{--</div>--}}
                    {{--<div class="col-sm">--}}
                        {{--<input type="email" name="email" placeholder="Email"--}}
                               {{--class="form-control" aria-describedby="email"--}}
                        {{-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm">--}}
                        {{--<input type="text" name="email" placeholder="Subject"--}}
                               {{--class="form-control" aria-describedby="email"--}}
                        {{-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row mt-5">--}}
                    {{--<div class="col-sm">--}}
                        {{--<input type="text" name="email" placeholder="Subject"--}}
                               {{--class="form-control" aria-describedby="email"--}}
                        {{-->--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />

    <title>Contact</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() { // Clear form when send is pressed
            $(".btn").click(function(){
                $(".input input, .msg textarea").val("");
            });
        });
    </script>

</head>
<body>

<div class="wrapper">
    <h1>Contact Me</h1>

    <div class="address">
        <div class="inner-address">
            <i class="fas fa-envelope"></i>
            <p>kennylepping@gmail.com</p>
        </div>
    </div>
        @if (Session::has('flash_message'))
            <div class="message-success">{{ Session::get('flash_message') }}</div>
        @endif
        <form class="form" method="post" action="{{ route('contact.store') }}">
            {{ csrf_field() }}
            <div class="form-title">
                Leave me your message.
            </div>

            <div class="input-form">
                <div class="input">
                    @if ($errors->has('name'))
                        <small class="invalid-feedback">{{ $errors->first('name') }}</small>
                    @endif
                    <input type="text" placeholder="Name" name="name">
                </div>
                <div class="input">
                    @if ($errors->has('email'))
                        <small class="invalid-feedback">{{ $errors->first('email') }}</small>
                    @endif
                    <input type="text" placeholder="Email" name="email">
                </div>
            </div>

            <div class="inner-msg">
                <div class="msg">
                    @if ($errors->has('message'))
                        <small class="invalid-feedback">{{ $errors->first('message') }}</small>
                    @endif
                    <textarea placeholder="Message" name="message"></textarea>
                </div>
            </div>

            <input type="submit" value="Submit">
        </form>
    
    <div class="social-media">
        <div class="inner-social">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
        </div>
        <div class="inner-social">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
    </div>

</div>

</body>
</html>