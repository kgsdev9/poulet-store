<div>

    <main>
        <!-- slider-area -->
        <section class="slider-area" data-background="{{asset('assets/img/bg/slider_area_bg.jpg')}}">

            <div class="container custom-container">
                <div class="row">
                    <div class="col-7">
                        <div class="slider-active">

                            <div class="single-slider slider-bg" data-background="{{asset('assets/img/slider/slider__bg01.jpg')}}">
                                <div class="slider-content">
                                    <h5 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Espace Publicitaire !</h5>
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".4s">Espace publiciaire</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Nos Poulets Sont Cales  </p>
                                    <a href="#" class="btn rounded-btn" data-animation="fadeInUp" data-delay=".8s">Consulter</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-3">
                        <div class="slider-banner-img mb-20">
                            <a href="#"><img src="{{asset('assets/img/slider/slider_banner01.jpg')}}" alt=""></a>
                        </div>
                        <div class="slider-banner-img">
                            <a href="#"><img src="{{asset('assets/img/slider/slider_banner02.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="slider-banner-img">
                            <a href="#"><img src="{{asset('assets/img/slider/slider_banner03.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- category-area -->
            <div class="container custom-container">
                <div class="slider-category-wrap">
                    <div class="row category-active">

                        @foreach ( $category as $value )
                        <div class="col-lg-2">
                            <div class="category-item">
                                <a href="{{route('category.product', $value->id)}}" class="category-link"></a>
                                <div class="category-thumb">
                                    <img src="{{asset('categorie/images/'.$value->image)}}" alt="" style="height:100px; width:100px;">
                                </div>
                                <div class="category-content">
                                    <h6 class="title">{{$value->name}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>
                </div>
            </div>
            <!-- category-area-end -->

        </section>
        <!-- slider-area-end -->


    <!-- discount-area -->
    <section class="discount-area pt-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="discount-item mb-20">
                        <div class="discount-thumb">
                            <img src="{{asset('assets/img/product/discount_img01.jpg')}}" alt="">

                        </div>
                        <div class="discount-content">
                            <span>NOS COLLECTIONS</span>
                            <h4 class="title"><a href="#">PUBLICITAIRE</a></h4>
                            <a href="#" class="btn">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="discount-item mb-20">
                        <div class="discount-thumb">
                            <img src="{{asset('assets/img/product/discount_img02.jpg')}}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>NOS COLLECTIONS</span>
                            <h4 class="title"><a href="#">PUBLICITAIRE</a></h4>
                            <a href="€" class="btn">Consulter</a>
                        </div>
                    </div>
                </div>




                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="discount-item style-two mb-20">
                        <div class="discount-thumb">
                            <img src="{{asset('assets/img/product/discount_img03.jpg')}}" alt="">
                        </div>
                        <div class="discount-content">
                            <span>Nos Collections</span>
                            <h4 class="title"><a href="#">PUBLICITAIRE</a></h4>
                            <a href="#" class="btn">Consulter</a>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </section>
    <!-- discount-area-end -->

    <!-- best-deal-area -->
    <section class="best-deal-area pt-60 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="best-deal-top-wrap">
                        <div class="bd-section-title">
                            <h3 class="title">Poulet Africain <span>Pour Vous!</span></h3>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row best-deal-active">
                @foreach ($product as $value )
                <div class="col-xl-3">
                    <div class="best-deal-item">
                        <div class="best-deal-thumb">
                            <a href="{{route('product.detail', $value->id)}}">
                                <img src="{{asset('cover/'.$value->img_one)}}" alt="" style="height:200px; width:250px;">

                            </a>
                        </div>
                        <div class="best-deal-content">
                            <div class="main-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="title"><a href="{{route('product.detail', $value->id)}}">{{$value->name}}</a></h4>
                                <p>{{$value->price}} FCFA</p>
                            </div>
                            <div class="icon" wire:key="foo">
                                <a  href="#colors" wire:click.prevent="add({{$value->id}})">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </section>
    <!-- best-deal-area-end -->

    <!-- special-products-area -->
    <section class="special-products-area gray-bg pt-75 pb-60">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Tendance du moment</span>
                        <h2 class="title">Nos Specialités</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="section-btn text-left text-md-right">
                        <a href="{{route('sotre.index')}}" class="btn">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="special-products-wrap">
                <div class="row">
                    <div class="col-3 d-none d-lg-block">
                        <div class="special-products-add">
                            <div class="sp-add-thumb">
                                <img src="{{asset('assets/img/product/special_products_add.jpg')}}" alt="">
                            </div>
                            <div class="sp-add-content">
                                <span class="sub-title">Offre speciale</span>
                                <h4 class="title">Plante Aleo verra  <b> Produit </b></h4>
                                <p>Obtenez le </p>
                                <a href="#" class="btn rounded-btn">Consulter</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-9">
                        <div class="row justify-content-center">
                                @foreach ($product as  $key)
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="sp-product-item mb-20">
                                        <div class="sp-product-thumb">
                                            <span class="batch">{{$key->category->name}}</span>
                                            <a href="{{route('product.detail', $key->id)}}">
                                                <img src="{{asset('cover/'.$key->img_one)}}" alt="" style="height:200px; width:250px;">

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
                                            <h6 class="title"><a href="{{route('product.detail', $key->id)}}">

                                              {{Str::limit($key->name, 27)}}

                                            </a>

                                            </h6>
                                            @if($key->statut=="disponible")
                                            <span class="product-status">disponible</span>
                                            @elseif($key->statut=="indisponible")
                                            <span class="product-status">Stock vide </span>
                                            @endif
                                            <div class="sp-cart-wrap">
                                                <form action="#">
                                                    <div class="cart" style="margin-left:-30px;">
                                                    <a  wire:click="add({{$key->id}})" class="btn">ajouter au panier</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <p>{{$key->price}}FCFA </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- special-products-area-end -->


    <!-- best-sellers-area -->
    <section class="best-sellers-area pt-75">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Meilleures ventes </span>
                        <h2 class="title">De la semaine </h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3">
                    <div class="section-btn text-left text-md-right">
                        <a href="{{route('sotre.index')}}" class="btn">Consulter</a>
                    </div>
                </div>
            </div>

            <div class="best-sellers-products">
                <div class="row justify-content-center">
                    @foreach ( $product as $true)
                    <div class="col-3">
                        <div class="sp-product-item mb-20">
                            <div class="sp-product-thumb">
                                <span class="batch">{{$true->category->name}}</span>
                                <a href="{{route('product.detail', $true->id)}}">
                                    <img src="{{asset('cover/'.$true->img_one)}}" alt="" style="height:200px; width:250px;">

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
                                <h6 class="title"><a href="{{route('product.detail', $true->id)}}"> {{Str::limit($true->name, 27)}}</a></h6>
                                @if($true->statut="disponible")
                                <span class="product-status">En stock </span>
                                @elseif($true->statut="stock vide")
                                <span class="product-status">stock vide </span>
                                @endif
                                <div class="sp-cart-wrap">
                                    <form action="#">
                                        <div class="cart" style="margin-left:-30px;">
                                            <a  wire:click="add({{$true->id}})" class="btn">ajouter au panier</a>
                                            </div>
                                    </form>
                                </div>
                                <p>{{$true->quantity}} kg</p>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>
    </section>
    <!-- best-sellers-area-end -->

  
</main>
<!-- main-area-end -->
</div>
