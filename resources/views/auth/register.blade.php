@extends('layouts.app')

<div class="header">
    <a class="logo"></a>
</div>

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Clinic | Register</title>
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

        .btn-register {
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
            width: 200px;
        }

        .right {
            float: right;
            width: 150px;
        }


    </style>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                         <h2 class="text-center mb-4">{{ __('') }}</h2>

                        <div class="auto-form-wrapper">

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">

                                    <h3 class="text-center mb-4">Register an account</h3>
                                    <hr>
                                    <h5 class="text-center">Join Us!</h5><br>

                                    <div class="input-group">

                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Name">
                                        <div class="input-group-append">

                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email"><br>
                                        <div class="input-group-append">

                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Password">
                                        <div class="input-group-append">

                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Confirm Password">
                                        <div class="input-group-append">

                                        </div>
                                    </div>
                                </div><br>

                                <div class="form-group form-group d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary submit-btn btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Already a member ?</span>
                                    <a href="{{ route('login') }}" class="text-black text-small">{{ __('Login') }}</a>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@endsection
`
