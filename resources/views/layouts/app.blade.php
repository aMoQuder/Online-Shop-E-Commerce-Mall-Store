<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Molla - Bootstrap eCommerce Template</title>
        <meta name="keywords" content="HTML5 Template">
        <meta name="description" content="Molla - Bootstrap eCommerce Template">
        <meta name="author" content="p-themes">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
        <link rel="manifest" href="assets/images/icons/site.html">
        <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
        <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
        <meta name="apple-mobile-web-app-title" content="Molla">
        <meta name="application-name" content="Molla">
        <meta name="msapplication-TileColor" content="#cc9966">
        <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
        <!-- Main CSS File -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">
        <link rel="stylesheet" href="assets/css/demos/demo-13.css">
    </head>


<body>

    <!-- welcome devolper -->
    <!-- ======================  -->
    <!-- ------------------------------------------------------------------------------------------------------------  -->
    <!-- start project -->

        <div id="app">
            <div class="page-wrapper">
            {{-- @include('temp.navbarApp') --}}

            <div id="google_translate_element" style="display: none;"></div> <!-- إخفاء أداة الترجمة الأصلية -->
            <main class="">
                @yield('content')
            </main>
            {{-- @include("temp.footer") --}}
        </div>
    </div>

    <!-- end project -->
    <!-- ------------------------------------------------------------------------------------------------------------- -->

   <!-- End .page-wrapper --><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>



            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="{{route("welcome")}}">Home</a>

                            </li>
                            <li>
                                <a href="{{route("shop")}}">Shop</a>

                            </li>

                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="{{route("about")}}">About</a>


                                    </li>
                                    <li>
                                        <a href="{{route("about")}}">Contact</a>


                                    </li>
                                    <li><a href="{{route("login")}}">Login</a></li>
                                    <li><a href="{{route("register")}}">register</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('event') }}">Blog</a>

                                <ul>
                                    <li><a href="{{ route('event') }}">Classic</a></li>

                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <!-- End .mobile-nav -->
                </div>

            </div>
            <!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div>
            <!-- End .social-icons -->
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
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
                                            <button type="submit" class="btn btn-outline-primary-2">
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
                                <!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="register-email">User Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                        <!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                        </div>
                                        <!-- End .form-group -->
                                        <!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Conferm Password </label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
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
                                <!-- .End .tab-pane -->
                            </div>
                            <!-- End .tab-content -->
                        </div>
                        <!-- End .form-tab -->
                    </div>
                    <!-- End .form-box -->
                </div>
                <!-- End .modal-body -->
            </div>
            <!-- End .modal-content -->
        </div>
        <!-- End .modal-dialog -->
    </div>
    <!-- End .modal -->


    <div id="google_translate_element" style="display: none;"></div> <!-- إخفاء أداة الترجمة الأصلية -->

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',  // لغة الموقع الأصلية
            includedLanguages: 'en,ar,ru,fr',  // اللغات المتاحة
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

    function translatePage(lang) {
        var googleTranslateFrame = document.querySelector('iframe.goog-te-menu-frame');
        if (googleTranslateFrame) {
            var translateDoc = googleTranslateFrame.contentDocument || googleTranslateFrame.contentWindow.document;
            var langElements = translateDoc.querySelectorAll('.goog-te-menu2-item span.text');

            langElements.forEach(function (element) {
                if (element.innerText === lang.toUpperCase()) {
                    element.click();
                }
            });
        } else {
            alert("Google Translate is still loading.");
        }
    }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-13.js"></script>
</body>

</html>
