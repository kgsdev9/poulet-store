<div>
    <main>

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-bg-two">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Commande</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- checkout-area -->
        <div class="checkout-area pt-90 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">

                        <div class="checkout-form-wrap">
                            <form  wire:submit.prevent="saveOrder">
                                <div class="checkout-form-top">
                                    <h5 class="title">Renseignez les informatons </h5>
                                </div>

                                <div class="building-info-wrap">
                                    <h5 class="title"> <i class="fas fa-user"></i>  Juste une derniere Etape {{Auth::user()->name}}</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text"  wire:model="fullname" placeholder="Votre Nom et prenom">
                                        </div>

                                    </div>
                                    <input type="number" placeholder="Telephone"  wire:model="phone" >
                                    <textarea name="message"  wire:model="addresse"  id="message" placeholder="Description de votre lieu de livraison"></textarea>
                                    <button   class="btn">Confirmer</button>
                        
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="col-lg-5">
                        <div class="shop-cart-total order-summary-wrap">
                            <h3 class="title">Votre Commande</h3>
                            @foreach( (array)session('cart') as $id => $details)
                            @php $total = 0 @endphp
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <div class="os-products-item">
                                <div class="thumb">
                                    <a href="{{route('product.detail', $details['product_id'])}}"><img src="{{asset('cover/'.$details['img_one'])}}" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="shop-details.html">{{ Str::limit($details['name'], 30) }}</a></h6>
                                    <span class="price">{{ $details['price']  }} FCFA</span>
                                </div>
                                <div class="remove"></div>
                            </div>

                                @endforeach
                            <div class="shop-cart-widget">
                                <form action="#">
                                    <ul>
                                        <li>
                                            <span>Livraison </span>
                                            <div class="shop-check-wrap">
                                                <div class="">
                                                    <label class="label" >Livraison gratuite</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-total-amount"><span>Total Prix </span> <span class="amount">{{$totalpanier}} FCFA</span></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area-end -->

    </main>
</div>
