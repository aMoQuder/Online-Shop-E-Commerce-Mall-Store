@extends('layouts.app')

@section('content')
    <div class="container m-auto pt-5">

        <div class="row pt-5">
            <div class="col-lg-6 col-md-9 col-sm-12 m-auto">
                <!-- .End .tab-pane -->
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="register-email">User Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="register-email">Your email address *</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End .form-group -->

                        <div class="form-group">
                            <label for="register-password">Password *</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- End .form-group -->
                        <!-- End .form-group -->

                        <div class="form-group">
                            <label for="register-password">Conferm Password </label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                        <!-- End .form-group -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-outline-primary-2 mr-5">
                                <span>SIGN UP</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                <label class="custom-control-label" for="register-policy">I agree to the <a
                                        href="#">privacy policy</a> *</label>
                            </div>
                            <!-- End .custom-checkbox -->
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
                                <a href="#" class="btn btn-login  btn-f">
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
    <!-- .End .tab-pane -->
@endsection
