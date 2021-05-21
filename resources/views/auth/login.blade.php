@extends('layouts.app')

@section('content')
<div class="page-contain login-page">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">

            <div class="row">

                <!--Form Sign In-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="signin-container">
                        <form action="{{ route('login.proses') }}" name="frm-login" method="post">
                            @csrf
                            <p class="form-row">
                                <label for="fid-name">{{ __('NIK') }}:<span class="requite">*</span></label>
                                <input id="user" type="number" class="txt-input @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus>

                                @error('user')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-pass">{{ __('Password') }}:<span class="requite">*</span></label>

                                <input id="password" type="password" class="txt-input @error('password') is-invalid @enderror" name="pass" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                            <p class="form-row wrap-btn">
                                <button type="submit" class="btn btn-submit btn-bold">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="link-to-help" href="#">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </p>
                        </form>
                    </div>
                </div>

                <!--Go to Register form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="register-in-container">
                        <div class="intro">
                            <h4 class="box-title">New Customer?</h4>
                            <p class="sub-title">Create an account with us and you’ll be able to:</p>
                            <ul class="lis">
                                <li>Check out faster</li>
                                <li>Save multiple shipping anddesses</li>
                                <li>Access your order history</li>
                                <li>Track new orders</li>
                                <li>Save items to your Wishlist</li>
                            </ul>
                            <a href="#" class="btn btn-bold">Create an account</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection