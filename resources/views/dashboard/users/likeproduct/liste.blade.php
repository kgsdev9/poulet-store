@extends('dashboard.master.master')


@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">

        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Ma Liste d'envie </h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">


                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>

                                            <th class="sort asc" data-sort="customer_name">Nom du produit </th>
                                            <th class="sort" data-sort="email">Prix </th>

                                            <th class="sort" data-sort="date">Quantite</th>
                                            <th class="sort" data-sort="date">Image</th>
                                            <th class="sort" data-sort="status">Statut </th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                            @foreach ($coeur as $ressource )
                                            <tr>
                                                <td class="customer_name">{{$ressource->product->name}}</td>
                                                <td class="email">{{$ressource->product->price}} FCFA</td>

                                                <td class="date">{{$ressource->product->quantity}}</td>
                                                <td class="date">
                                                    <img src="{{asset('cover/'.$ressource->product->img_one)}}" alt="" style="height: 50px; width:50px;">
                                                </td>
                                                <td class="status">
                                                        @if($ressource->product->statut =="disponible")
                                                    <span class="badge badge-soft-success text-uppercase">En stock </span>
                                                    @elseif($ressource->product->statut =="stock vide")
                                                    <span class="badge badge-soft-danger text-uppercase">Stock vide </span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="d-flex gap-2">

                                                        <div class="remove">
                                                            <a href="{{route('users.destroy', $ressource->id)}}" class="btn btn-sm btn-danger remove-item-btn" onclick="return confirm('Voulez-vous vraiment accomplir cette action ?')">  Suppression</a>
                                                            <a href="{{route('product.detail', $ressource->product->id)}}" class="btn btn-sm btn-info" target="about_blank">  Consulter le produit </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach


                                    </tbody>
                                </table>
                                {{$coeur->links()}}

                            </div>


                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>








    </div>
    <!-- container-fluid -->
</div>

@endsection
