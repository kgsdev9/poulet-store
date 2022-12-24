<div>


    <section class="best-sellers-area pt-75">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title"></span>
                    </div>
                </div>

            </div>
            <div class="best-sellers-products">
                <div class="row justify-content-center">
                    @foreach ( $productcategory as  $ressource)

                    <div class="col-3">
                        <div class="sp-product-item mb-20">
                            <div class="sp-product-thumb">
                                <span class="batch">New</span>
                                <a href="{{route('product.detail', $ressource->id)}}">
                                    <img src="{{asset('cover/'.$ressource->img_one)}}" alt="" style="height:200px; width:250px;">
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
                                <h6 class="title"><a href="{{route('product.detail', $ressource->id)}}">{{Str::limit($ressource->name, 27)}}</a></h6>
                                    @if($ressource->statut=="disponible")
                                <span class="product-status">En  Stock</span>
                                    @elseif($ressource->statut=="stock vide")
                                    <span class="product-status">Stock vide</span>
                                    @endif
                                <div class="sp-cart-wrap">
                                    <form action="#">
                                        <div class="cart" style="margin-left:-30px;">
                                            <a  class="btn" wire:click="add({{$ressource->id}})">ajouter au panier</a>
                                            </div>
                                    </form>
                                </div>
                                <p>{{$ressource->quantity}} Kg</p>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>
    </section>
</div>
