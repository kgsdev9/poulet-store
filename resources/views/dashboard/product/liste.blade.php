@extends('dashboard.master.master')

@section('master')

<div class="page-content">
    <div class="container-fluid">



        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="orderList">
                    <div class="card-header  border-0">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Liste des produits</h5>
                            <div class="flex-shrink-0">
                                <div class="d-flex gap-1 flex-wrap">
                                    <a href="{{route('create.newproduct')}}" class="btn btn-primary add-btn" > <i class="ri-add-line align-bottom me-1"></i>Nouveau produit</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0" style="margin-top:30px;">
                        <div>

                            <div class="table-responsive table-card mb-1">
                                <table class="table table-nowrap align-middle" id="orderTable">
                                    <thead class="text-muted table-light">
                                        <tr class="text-uppercase">
                                            <th scope="col" style="width: 25px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                            </th>
                                            <th class="sort" data-sort="id">Produit </th>
                                            <th class="sort" data-sort="customer_name">Prix</th>
                                            <th class="sort" data-sort="product_name">Quantite</th>
                                            <th class="sort" data-sort="date">Categorie</th>
                                            <th class="sort" data-sort="amount">Image</th>
                                            <th class="sort" data-sort="status">Statut</th>
                                            <th class="sort" data-sort="city">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($productliste as $ressource )
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                </div>
                                            </th>
                                            <td class="id"><a href="" class="fw-medium link-primary">{{$ressource->name}}</a></td>
                                            <td class="customer_name">{{$ressource->price}} FCFA</td>
                                            <td class="product_name">{{$ressource->quantity}}  </td>
                                            <td class="date"> {{$ressource->category->name}} </td>
                                            <td class="amount">
                                                <img src="{{asset('cover/'.$ressource->img_one)}}" alt="" style="height: 60px; width:60px;">
                                            </td>

                                            <td class="status">
                                                @if($ressource->statut =="stock vide")
                                                <span class="badge badge-soft-warning text-uppercase">Stock vide</span>
                                                    @elseif($ressource->statut =="disponible")
                                                    <span class="badge badge-soft-success text-uppercase">Disponible</span>
                                                    @endif
                                            </td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Detail" data-bs-original-title="Detail">
                                                        <a href="{{route('product.dashboard.detail', $ressource->id)}}" class="text-primary d-inline-block">
                                                            <i class="ri-eye-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" >
                                                        <a href="{{route('product.dashboard.edit', $ressource->id)}}"   class="text-primary d-inline-block edit-item-btn">
                                                            <i class="ri-pencil-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="text-danger d-inline-block remove-item-btn"   href="{{route('product.dashboard.remove', $ressource->id)}}" onclick="return confirm('Etes vous surs ?')">
                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>


                        <!--end modal -->
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div>

@endsection
