
@if(session()->get('cart') >0 )
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
                                    <li class="breadcrumb-item"><a >Panier</a></li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
        <!-- cart-area -->
        <div class="cart-area pt-90 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cart-wrapper">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">PRODUIT</th>
                                            <th class="product-price">PRIX</th>
                                            <th class="product-quantity">QUANTITE</th>
                                            <th class="product-subtotal">SOUS-TOTAL</th>
                                            <th class="product-delete"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( (array)session('cart') as $id => $details)
                                        <tr>
                                            @php $total = 0 @endphp
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <td class="product-thumbnail"><a href="{{route('product.detail', $details['product_id'])}}">
                                                <img src="{{asset('cover/'.$details['img_one'])}}" alt="aucune image">
                                            </a>
                                        </td>

                                            <td class="product-name">
                                                <h4>
                                                    <a href="{{route('product.detail', $details['product_id'])}}">{{ Str::limit($details['name'], 30) }}</a>
                                                </h4>
                                            </td>

                                            <td class="product-price">{{ $details['price']  }} FCFA</td>
                                            <td class="product-quantity">
                                                <div class="cart--plus--minus">
                                                    <form action="#" class="num-block">
                                                        <input type="text" class="in-num" value="{{ $details['quantity']}}" readonly="">
                                                        <div class="qtybutton-box">
                                                            <span class="plus"   wire:click="increment({{$details['product_id']}})"     ><i class="fas fa-angle-up"></i></span>
                                                            <span class="minus dis"  wire:click="decrement({{$details['product_id']}})"><i class="fas fa-angle-down"></i></span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span>{{ $details['price'] * $details['quantity'] }} €</span></td>
                                            <td class="product-delete">
                                                <a   wire:click="delete({{$details['product_id']}})" style="cursor: pointer;" ><i class="far fa-trash-alt"></i></a>

                                            </td>
                                        </tr>

                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="shop-cart-bottom">
                            <div class="cart-coupon">

                            </div>
                            <div class="continue-shopping">
                                <a href="{{route('oders')}}" class="btn">Commander le  produit </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- cart-area-end -->

    </main>
</div>

@else


@endif
