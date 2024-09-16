@extends('layouts.app')

@section('content')
<div class="container m-auto pt-5">

    <div class="row pt-5">
        <div class="col-lg-6 col-md-9 col-sm-12 m-auto">

            <div class="tab-content" id="tab-content-5">
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="form-group">
                            <label for="singin-email">Username or email address *</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <!-- End .form-group -->

                        <div class="form-group">
                            <label for="singin-password">Password *</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End .form-group -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-outline-primary-2 mr-5">
                                <span>LOG IN</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                            </div>
                            <!-- End .custom-checkbox -->

                            @if (Route::has('password.request'))

                            <a href="{{ route('password.request') }}" class="forgot-link">Forgot Your Password?</a>
                        @endif
                        </div>
                        <!-- End .form-footer -->
                    </form>
                    <div class="form-choice">
                        <p class="text-center">or sign in with</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-login btn-g">
                                    <i class="icon-google"></i> Login With Google
                                </a>
                            </div>
                            <!-- End .col-6 -->
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-login btn-f">
                                    <i class="icon-facebook-f"></i> Login With Facebook
                                </a>
                            </div>
                            <!-- End .col-6 -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .form-choice -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
