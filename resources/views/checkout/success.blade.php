@extends('layout.app')

@section('content')
<section class="error-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="error-content text-center">
                    <div class="error_txt">WOA</div>
                    <h5>Votre commande a été  enregistrée avec success</h5>
                    <p>Vous allez recevoir une notifications par E-mail pour les details de la commande </p>
                    <div class="search_form">
                        <form method="post">
                            <input name="text" id="text" type="text" placeholder="Merci de faire partie de notre communauté" class="form-control">
                            <button type="submit" class="icon_search"> <i class="flaticon-shop"></i></button>
                        </form>
                    </div>
                    <a href="{{url('/')}}" class="btn rounded-btn">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
