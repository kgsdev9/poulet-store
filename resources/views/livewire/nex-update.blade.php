<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
                                <h2>Rénitialiser le mot de passe</h2>

                            </div>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ request()->token }}">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  autocomplete="email" autofocus placeholder="Entrer l'adresse E-mail du compte  VTP">
                                </div>


                                <div class="form-group">
                                    <input id="password"  placeholder="Nouveau mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <input id="password-confirm"  placeholder="confirmer le nouveau mot de passe" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                                <div class="form-button">
                                    <button type="submit">Rénitialiser</button>
                                </div>
                            </form>
                        </div>
                        <div class="user-form-remind">
                            <p>vous avez deja un compte <a href="{{route('login')}}">Connectez-vous !</a></p>
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
