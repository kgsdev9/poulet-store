
<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="stylesheet" href="{{asset('assets/pages/fonts/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/fonts/fontawesome/fontawesome.min.css')}}">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/venobox/venobox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/slickslider/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/niceselect/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/pages/vendor/bootstrap/bootstrap.min.css')}}">
        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{asset('assets/pages/css/user-auth.css')}}">
    </head>
    <body>

        <section class="user-form-part">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                        <div class="user-form-logo">
                            <a href="index.html"><img src="{{asset('assets/imagesvtp/vtp-logo.png')}}" alt="logo" height="100px; width:100px;"></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Se Connecter</h2>

                            </div>
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus  placeholder="Entrer votre adresse E-mail"  >
                                    @error('email')
                                    <small class="text-danger">{{$message}}  </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="password" autofocus placeholder="Entrer votre mot de passe">
                                    @error('password')
                                    <small class="text-danger">{{$message}}  </small>
                                    @enderror
                                </div>
                                <p>mot de passe oublié ? <a href="{{route('password.request')}}" class="text-dark">Cliquez-ici !</a></p>
                                <div class="form-button">
                                    <button type="submit">Se Connecter</button>
                                </div>
                            </form>
                        </div>
                        <div class="user-form-remind">
                            <p>vous n'avez pas de compte <a href="{{route('register')}}">Inscrivez-vous !</a></p>

                        </div>
                        <div class="user-form-footer">
                            <p><a href="{{url('/')}}">Retourner à l'accueil</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    USER FORM PART END
        =======================================-->


        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="{{asset('assets/pages/vendor/bootstrap/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/countdown/countdown.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/niceselect/nice-select.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/slickslider/slick.min.js')}}"></script>
        <script src="{{asset('assets/pages/vendor/venobox/venobox.min.js')}}"></script>

        <!-- CUSTOM -->
        <script src="{{asset('assets/pages/js/nice-select.js')}}"></script>
        <script src="{{asset('assets/pages/js/countdown.js')}}"></script>
        <script src="{{asset('assets/pages/js/accordion.js')}}"></script>
        <script src="{{asset('assets/pages/js/venobox.js')}}"></script>
        <script src="{{asset('assets/pages/js/slick.js')}}"></script>
        <script src="{{asset('assets/pages/js/main.js')}}"></script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>
