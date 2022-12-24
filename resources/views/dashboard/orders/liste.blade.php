@extends('dashboard.master.master')
@section('master')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="invoiceList">
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Liste des commandes</h5>

                        </div>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap" id="invoiceTable">
                                    <thead class="text-muted">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">

                                                </div>
                                            </th>
                                            <th class="sort text-uppercase" data-sort="invoice_id">Code de paiement</th>
                                            <th class="sort text-uppercase" data-sort="customer_name">Clients </th>
                                            <th class="sort text-uppercase" data-sort="email">TELEPHONE</th>
                                            <th class="sort text-uppercase" data-sort="country">Quantite</th>
                                            <th class="sort text-uppercase" data-sort="date">Date</th>

                                            <th class="sort text-uppercase" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all" id="invoice-list-data">
                                        @foreach ($orders as $ressource )
                                    <tr>
                                        <th scope="row">
                                        <div class="form-check">
                                     <input class="form-check-input"  name="chk_child" value="{{$ressource->code}}">
                                                    </div>
                                                </th>
                                                <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351" class="fw-medium link-primary">{{$ressource->code}}</a></td>
                                                <td class="customer_name">
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{asset('assets/img/blog/post_avatar_img.png')}}" alt="" class="avatar-xs rounded-circle me-2">

                                                       {{$ressource->user->name}}
                                                    </div>
                                                </td>
                                                <td class="email"> {{$ressource->phone}}</td>
                                                <td class="country">{{$ressource->quantity}}</td>
                                                <td class="date">{{$ressource->created_at}}</td>



                                                </td>
                                                <td>
                                                          <div class="dropdown">


                                                                <a href="{{route('orders.details', $ressource->id)}}" class="tn btn-soft-secondary btn-sm dropdown">       <i class="ri-eye-fill align-bottom me-2 text-muted"></i></a>

                                                              
                                                            </div>
                                                        </td>
                                                    </tr>
                                                        @endforeach
                                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#8c68cd,secondary:#4788ff" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ invoices We did not find any invoices for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div class="pagination-wrap hstack gap-2">
                                    {{$orders->links()}}
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div>


@endsection
