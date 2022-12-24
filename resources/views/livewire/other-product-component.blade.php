@if (count($otherproducts)>0)
<div>
    <section class="best-sellers-area pt-85 pb-70">
        <div class="container">
            <div class="row align-items-end mb-40">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Produit Similaire </span>
                        <h2 class="title">Nos Collections </h2>
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

                    @foreach ($otherproducts as $value )


                    <div class="col-3">
                        <div class="sp-product-item mb-20">
                            <div class="sp-product-thumb">
                                <span class="batch">{{$value->category->name}}</span>
                                <a href="{{route('product.detail', $value->id)}}"><img src="{{asset('cover/'.$value->img_one)}}" alt=""></a>
                            </div>
                            <div class="sp-product-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h6 class="title"><a href="{{route('product.detail', $value->id)}}">{{ Str::limit($value->name, 27)}}</a></h6>
                                @if($value->statut=="disponible")
                                <span class="product-status">IN Stock</span>
                                @elseif($value->statut=="stock vide")
                                <span class="product-status">Stock vide</span>
                                @endif
                                <div class="sp-cart-wrap">
                                    <form action="#">
                                        <div class="cart" style="margin-left:-30px;">
                                        <a wire:click="add({{{$value->id}}})" class="btn">ajouter au panier</a>
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
        </div>
    </section>
</div>

@else
<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
    <div class="col">

    </div>
</div>
@endif
