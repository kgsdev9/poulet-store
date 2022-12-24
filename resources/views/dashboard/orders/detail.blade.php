@extends('dashboard.master.master')

@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Detail de la commande</h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-xxl-9">
                <div class="card" id="demo">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header border-bottom-dashed p-4">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <img src="{{asset('assets/img/logo/logo.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                        <img src="{{asset('assets/img/logo/logo.png')}}" class="card-logo card-logo-light" alt="logo light" height="17">
                                        <div class="mt-sm-5 mt-4">
                                            <h6 class="text-muted text-uppercase fw-semibold">Informations Du Client </h6>
                                            <p class="text-muted mb-1" id="address-details"> Lieu de livraison : {{$orders->adresse_delivry	}}</p>
                                            <p class="text-muted mb-0" id="zip-code"><span>Telephone : </span>{{$orders->phone	}}</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 mt-sm-0 mt-3">
                                        <h6><span class="text-muted fw-normal">INFORMATONS DSTORE :</span><span id="legal-register-no"></span></h6>
                                        <h6><span class="text-muted fw-normal">Email:</span><span id="email">ecommerce@gmail.com</span></h6>
                                        <h6><span class="text-muted fw-normal">Website:</span> <a href="" class="link-primary" target="_blank" id="website">dstore@gmail.com</a></h6>
                                        <h6 class="mb-0"><span class="text-muted fw-normal">Telephone: </span><span id="contact-no"> +225 234 6789</span></h6>
                                    </div>
                                </div>
                            </div>
                            <!--end card-header-->
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="card-body p-4">
                                <div class="row g-3">
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted mb-2 text-uppercase fw-semibold">Numero de la commande</p>
                                        <h5 class="fs-14 mb-0"><span id="invoice-no"> {{$orders->code}}</span></h5>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                        <h5 class="fs-14 mb-0"><span id="invoice-date">{{$orders->created_at}}</span></h5>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted mb-2 text-uppercase fw-semibold">Statut de la commande</p>
                                        <span class="badge badge-soft-success fs-11" id="payment-status">Payé</span>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-6">
                                        <p class="text-muted mb-2 text-uppercase fw-semibold">Quantite du produit </p>
                                        <h5 class="fs-14 mb-0"><span id="total-amount">{{$orders->quantity}}</span></h5>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div><!--end col-->

                        <div class="col-lg-12">
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="table-active">
                                                <th scope="col" style="width: 50px;">#</th>
                                                <th scope="col">Produit</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col">Quantite </th>
                                                <th scope="col" class="text-end">Sous-total</th>
                                            </tr>
                                        </thead>
                                        <tbody id="products-list">

                                            @foreach($orders->products as $s)
                                            <tr>
                                                <th scope="row">{{$s->id}}</th>
                                                <td class="text-start">
                                                    <span class="fw-medium">{{Str::limit($s->name, 30)}}</span>

                                                </td>
                                                <td>{{$s->price}}  FCFA</td>
                                                <td>{{$s->pivot->quantity}}</td>
                                                <td class="text-end">{{$s->price *  $s->pivot->quantity }}FCFA</td>
                                            </tr>


                                                @endforeach

                                        </tbody>
                                    </table><!--end table-->
                                </div>
                                <div class="border-top border-top-dashed mt-2">
                                    <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                        <tbody>

                                            <tr class="border-top border-top-dashed fs-15">
                                                <th scope="row">TOTAL </th>
                                                <th class="text-end"></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <div class="mt-3">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">METHODE DE PAIEMENT </h6>
                                    <p class="text-muted mb-1">Mobile Money </p>


                                </div>
                                <div class="mt-4">
                                    <div class="alert alert-primary">
                                        <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                            <span id="note">Une Fois la commande validée vous ne pouvez pas modifier la commande , nous la traiterons dans un delai maximun de 30 minutes.
                                                Merci pour la confiance DSTORE POULET
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                    <a href="javascript:window.print()" class="btn btn-soft-primary"><i class="ri-printer-line align-bottom me-1"></i> IMPRIMER LE RECU </a>

                                </div>
                            </div>
                            <!--end card-body-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div>

@endsection
