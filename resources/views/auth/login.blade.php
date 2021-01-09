@extends('layouts.app')

@section('content')
<div class="shortcut loginbxfrm">
    <div class="top_bar"><span>{{ __('Login') }}</span></div>
    
    @if ($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors->first('error') }}
        </div>
    @endif
    <form method="POST" class="login_form" action="{{ route('login') }}">
    @csrf
    
    <div class="form_group">
        <label for="username" class="form_label">{{ __('User Id') }}
            <!--<img id="meta-type-data" class="tooltip-tipsy" title="Try out the typing extension!" src="/public/keyboard/css/images/keyboard.svg">-->
        </label>
        <div class="form_input">
            <input name="username" id="username" placeholder="{{ __('Username') }}" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" autocomplete="off" value="{{ old('username') }}" type="text" required autofocus>
            @if ($errors->has('username'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form_group">
        <label for="password" class="form_label">{{ __('Password') }}</label>

        <div class="form_input">
            <input name="password" id="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" autocomplete="off" value="" type="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>
    </div>

    <div class="form_group">
        <div class="form_input">
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
        </label>
        </div>
    </div>
    
    <div class="form_group">
        <div class="form_input">
            <input value="{{ __('Login') }}" class="btn btn-default" id="submitbutton" name="submit" type="submit">

        </div>
    </div>

    <div class="form_group" style="">
        <div class="log_link">
            <ul>
                <li><a href="{{ route('password.request') }}">{{ __('Forgot Password ?') }}</a>&nbsp;|&nbsp;</li>
                <li><a href="#">Need Help ?</a></li>
            </ul>
        </div>
    </div>
    <div class="form_group" style="">
        <div class="log_link_btm">
            <ul>
                <li><a class="sgp" href="{{ route('register') }}">{{ __('Register') }} </a>&nbsp;|&nbsp;</li>
                <li><a href="#">How to register ?</a></li>
            </ul>
        </div>
    </div>
</form>
</div>

<div class="login">
    <h3 id="small-text">
        <a data-anchorjs-icon="" aria-label="Anchor link for: small text" href="#small-text" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute;
           margin-left: -1em; padding-right: 0.5em;"></a> Safety Tips for Login</h3>

    <div>
        <ul>
            <li>Do not access the login page via web site links provided in emails. Open a new web browser &amp; enter the URL
                address of the NBL portal ( https://iccd.nblbd.com) directly into your web browser.
            </li>
            <li>Do not disclose your User ID or Password to anyone.</li>
        </ul>
    </div>


    <h3 id="small-text">
        <a data-anchorjs-icon="" aria-label="Anchor link for: small text" href="#small-text" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute;
                           margin-left: -1em; padding-right: 0.5em;"></a> Passwords</h3>

    <div>
        <ul>
            <li>Make them complex,change them frequently.</li>
            <li>You should memorize this password &amp; never write it down anywhere or reveal it to anyone.</li>
            <li>Disable Auto-complete/Password storage in-browser.</li>
        </ul>
    </div>


    <h3 id="small-text"><a data-anchorjs-icon="" aria-label="Anchor link for: small text" href="#small-text" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute;
                           margin-left: -1em; padding-right: 0.5em;"></a> Sign in/Sign Off</h3>
    <div>
        <ul>
            <li> Remember to sign off. You may not always be at your own computer when you bank online. Therefore,it's
                important to
                sign off when you're finished banking.
            </li>
        </ul>
    </div>
    <!--<p>Read More to know about iBanking Security.</p>

    <p>For any iBanking support, Email to support@nblbd.com .</p>-->
</div>


@endsection
