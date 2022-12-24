@extends('dashboard.master.master')

@section('master')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">NOMBRE T0TAL CATEGORIE  </h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Liste des categorie </h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1">
                                            </i> Nouvelle categorie</button>

                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sort asc" data-sort="customer_name">Nom </th>
                                            <th class="sort" data-sort="email">Image</th>
                                            <th class="sort" data-sort="date">Description</th>
                                            <th class="sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                            @foreach ($category as $ressource )
                                            <tr>
                                                <td class="customer_name">{{$ressource->name}}</td>
                                                <td class="email">
                                                    <img src="{{asset('categorie/images/'.$ressource->image)}}" alt="" style="height: 60px; width:60px;">
                                                </td>

                                                <td class="date">{{$ressource->description}}</td>


                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="{{route('category.edit', $ressource->id)}}" class="btn btn-sm btn-primary edit-item-btn"> Editer</a>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="{{route('category.destroy', $ressource->id)}}" class="btn btn-sm btn-danger remove-item-btn" onclick="return confirm('Voulez-vous vraiment accomplir cette action ?')">  Suppression</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach


                                    </tbody>
                                </table>
                               {{$category->links()}}

                            </div>


                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>



    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form  method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <h5>Nouvelle categorie</h5>

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Nom d'utilisateur @error('name')
                                <small class="text-danger">{{$message}}</small>

                        @enderror</label>
                        <input type="text" id="customername-field" class="form-control" placeholder=" Nom " required="" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="email-field" class="form-label">Image  @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror</label>
                        <input type="file" id="email-field" class="form-control" placeholder= "Email" required="" name="image">
                    </div>






                    <div class="mb-3">
                        <label for="phone-field" class="form-label">Description  @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror</label>
                     <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                    </div>




                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Enregistrer la categorie</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




    </div>
    <!-- container-fluid -->
</div>

@endsection
