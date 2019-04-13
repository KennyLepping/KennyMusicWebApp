@extends('layouts.mainLayout')

@section('title', 'Contact')

@section('mainContent')


<div class="wrapperSmall">
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


@endsection