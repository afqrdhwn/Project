@extends('layouts.app')

<!-- Main Code -->
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Clinic | Login</title>
    <style>
        .login {
            min-height: 100vh;
            }

            body {
            background-image: url('/img/background.jpg');
        }


        .login-heading {
            font-weight: 300;
        }



        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 3rem;

        }

        .loginpartition {
            background-color: #86a9f7;
            border-radius: 2rem;
            padding: 30px;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .left {
            float: left;
            width: 170px;

        }

        .right {
            float: right;
            width: 170px;
        }


    </style>




  </head>
  <body>
        <div class="container-fluid ps-md-0">
            <div class="row g-0">
                <div class="d-none d-md-flex align-items-center col-md-3 bg-image"></div>

                <div class="row justify-content-center col-md-8 col-lg-6">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <h1 class="login-heading mb-4" >Login</h1><br>
                                            <!-- Sign In Form -->
                                            <div class="loginpartition">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <!-- Input Email -->
                                                    <div class="form-floating mb-3">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
                                                        <label for="email">Email Address</label>

                                                        @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>

                                                    <!-- Input Password -->
                                                    <div class="form-floating mb-3">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                                        <label for="password">Password</label>

                                                        @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>

                                                    <!-- Remember Me Checkbox -->
                                                    <div class="form-check mb-3">
                                                        <input id="remember" type="checkbox" class="form-check-input" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
                                                    </div>

                                                    <!-- Forgot Password -->
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" > {{ __('Login') }} </button>
                                                        <div class="text-center ">
                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-link text-black text-small" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><br><br>

                                                <div class="left">
                                                    <h4 class="login-heading mb-4" style="font-size: 15px;">Not registered yet?</h4>
                                                </div>

                                                <div class="right">
                                                    <ul class="nav-item">
                                                        <a class="btn btn-link text-black text-small" href="{{ route('register') }}">{{ __('Create an account') }}</a>
                                                    </ul>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
