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
                                    <li class="breadcrumb-item"><a href="index.html">Accueil </a></li>
                                    <li class="breadcrumb-item"><a href="#">Boutique </a></li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <section class="shop--area pt-90 pb-90">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12">
                        <div class="shop-discount-area">
                            <div class="discount-content shop-discount-content">
                                <span>Espace publiciaire </span>
                                <h4 class="title"><a href="#">DU SITE ECOMMERCE</a></h4>
                                <p>BOUTIQUE OFFICIELLE</p>
                                <a href="" class="btn rounded-btn">NOS COLLECTIONS DE POULET</a>
                            </div>
                        </div>
                        <div class="shop-top-meta mb-30">
                            <div class="row">
                                <div class="col-md-6 col-sm-7">
                                    <div class="shop-top-left">
                                        <ul>
                                            <li><a ><i class="fas fa-bars"></i> NOS POULETS</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="shop-top-right">
                                        <form action="#">
                                            <select name="select">
                                                <option value="">Filtrer par </option>
                                                <option>Prix décroissant </option>
                                                <option>Petit prix </option>
                                                <option>Prix moyens </option>
                                                <option>Par Quantité</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop-products-wrap">
                            <div class="row justify-content-center">

                                @foreach ( $product as $value )
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="sp-product-item">
                                        <div class="sp-product-thumb">
                                            <span class="batch">{{$value->category->name}}</span>
                                            <a href="{{route('product.detail', $value->id)}}">

                                                <img src="{{asset('cover/'.$value->img_one)}}" alt="" style="height:200px; width:250px;">
                                            </a>
                                        </div>
                                        <div class="sp-product-content">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="title"><a href="{{route('product.detail', $value->id)}}">

                                                {{ Str::limit($value->name, 26)}}</a>

                                            </h6>
                                            @if($value->statut == "disponible")
                                            <span class="product-status">Disponible</span>
                                            @elseif($value->statut == "indisponible")
                                            <span class="product-status">Stock vide</span>
                                             @endif
                                            <div class="sp-cart-wrap">
                                                <form>
                                                    <div class="cart" style="margin-left:-30px;">
                                                    <a wire:click="add({{$value->id}})" class="btn">ajouter au panier</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <p>{{$value->price}} FCFA</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach






                            </div>
                        </div>
                        <div class="pagination-wrap">
                            <ul>
                                {{$product->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->

    </main>



</div>
