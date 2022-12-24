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
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Acccueil </a></li>
                                    <li class="breadcrumb-item">{{$colletiondetail->name}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$colletiondetail->category->name}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area -->
        <section class="shop-details-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="shop-details-flex-wrap">
                            <div class="shop-details-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="{{asset('cover/'.$colletiondetail->img_one)}}" alt=""></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two" aria-selected="false"><img src="{{asset('cover/'.$colletiondetail->img_two)}}" alt=""></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab" aria-controls="item-three" aria-selected="false"><img src="{{asset('cover/'.$colletiondetail->img_tree)}}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-details-img-wrap">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                        <div class="shop-details-img">
                                            <img src="{{asset('cover/'.$colletiondetail->img_one)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                        <div class="shop-details-img">
                                            <img src="{{asset('cover/'.$colletiondetail->img_two)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                        <div class="shop-details-img">
                                            <img src="{{asset('cover'.$colletiondetail->img_tree)}}" alt="">
                                            <p>
                                               {{$colletiondetail->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shop-details-content">
                            <h4 class="title">{{$colletiondetail->name}}</h4>
                            <div class="shop-details-meta">
                                <ul>
                                    <li>Quantité Disponible <a> {{$colletiondetail->quantity}}</a></li>
                                </ul>
                            </div>
                            <div class="shop-details-price">
                                <h2 class="price">{{$colletiondetail->price}} FCFA</h2>
                                    @if($colletiondetail->statut=="disponible")
                                <h5 class="stock-status">- En stock</h5>
                                @elseif($colletiondetail->statut=="stock vide")
                                <h5 class="stock-status">Stock vide</h5>
                                @endif
                            </div>
                            <p>{{ Str::limit($colletiondetail->descritpion, 200)}}</p>

                            <div class="shop-perched-info">

                                <a   wire:click="add({{$colletiondetail->id}})"  class="btn">Ajouter au panier</a>
                            </div>
                            <div class="shop-details-bottom">
                                <h5 class="title">
                                    <a  wire:click="addWishlist({{$colletiondetail->id}})" class="btn"><i class="far fa-heart"></i> Ajouter à la liste d'envie</a>

                                </h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-desc-wrap">
                            <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Avis sur le produit </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Description du produit   </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContentTwo">
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="product-desc-content">
                                        <h4 class="title">Detail du produit </h4>
                                        <div class="row">
                                            <div class="col-xl-3 col-md-5">
                                                <div class="product-desc-img">
                                                    <img src="img/product/desc_img.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-md-7">
                                                <h5 class="small-title">Poulet 100 % Naturel</h5>
                                                <p>{{ $colletiondetail->descritpion}}   </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">

                                    <div class="product-desc-content">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="product-details-frame">
                                                    <ul class="review-list">
                                                        @foreach ($comment as $c )
                                                         <li class="review-item">
                                                            <div class="review-media">

                                                                <h5 class="review-meta">

                                                                    <span> {{$c->user->name}}</span>
                                                                </h5>
                                                            </div>
                                                            <ul class="review-rating">
                                                                <li class="icofont-ui-rating"></li>
                                                                <li class="icofont-ui-rating"></li>
                                                                <li class="icofont-ui-rating"></li>
                                                                <li class="icofont-ui-rating"></li>
                                                                <li class="icofont-ui-rate-blank"></li>
                                                            </ul>
                                                            <p class="review-desc">{{$c->content}}</p>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="product-details-frame">
                                                    <h3 class="frame-title">Laisser un commentaire  </h3>
                                                    <form class="review-form" wire:submit.prevent="saveComment">
                                                        <div class="row">
                                                            {{-- <div class="col-lg-12">
                                                                <div class="star-rating">
                                                                    <input type="radio" entaire </hwire:model="rating"  id="star-1"> <label for="star-1"></label>
                                                                    <input type="radio"  wire:model="rating"   id="star-2"><label for="star-2"></label>
                                                                    <input type="radio"  wire:model="rating"  id="star-3"><label for="star-3"></label>
                                                                    <input type="radio"  wire:model="rating" id="star-4"><label for="star-4"></label>
                                                                    <input type="radio"  wire:model="rating"  id="star-5"><label for="star-5"></label>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" placeholder="Message"  wire:model="content" ></textarea>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-12">
                                                                <button class="btn btn-inline">
                                                                    <i class="icofont-water-drop"></i>
                                                                    <span>Commenter le prioduit </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details-area-end -->

        @livewire('other-product-component', [$colletiondetail->id, $colletiondetail->category->id ])
    </main>




</div>
