

    @if($litedata == true )

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">NOMBRE T0TAL DE PRODUIT  </h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Liste des produits </h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button  wire:click="createdata"  class="btn btn-primary add-btn" >
                                            </i> Nouveau produit </button>

                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sort asc" data-sort="customer_name">Nom </th>
                                            <th class="sort" data-sort="email">Image</th>
                                            <th class="sort" data-sort="date">Statut </th>
                                            <th class="sort">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                            @foreach ($product_all as $value )
                                            <tr>
                                                <td class="customer_name">{{$value->name}}</td>
                                                <td class="email">
                                                    <img src="{{Storage::url($value->img_premiere_plan)}}" alt="" style="height: 60px; width:60px;">
                                                </td>

                                                <td class="date">
                                                    @if($value->statut=="disponible")
                                                    <span class="badge bg-success">Disponible</span>
                                                    @elseif($value->statut=="stock vide")
                                                </td>

                                                @endif
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="ssssss" class="btn btn-sm btn-primary edit-item-btn"> Editer</a>
                                                        </div>
                                                        <div class="remove">
                                                            <a   wire:click="destroyProduct({{$value->id}})" class="btn btn-sm btn-danger remove-item-btn" onclick="return confirm('Voulez-vous vraiment accomplir cette action ?')">  Suppression</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach




                                    </tbody>
                                </table>
                                        {{$product_all->links()}}

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
            <form  method="POST" action="" enctype="multipart/form-data">
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

    @endif


    @if($createdata == true )

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Création d'un nouveau produit </h4>


                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Renseignez les informations</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <form  wire:submit.prevent="save">
                                @csrf
                                <div class="mt-4">
                                    <h5 class="fs-14 mb-3 text-muted">Tous les champs sont requis</h5>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="cleave-ccard" class="form-label">Nom d'utiliateur  @error('name')
                                                    <small class="text-danger">{{$message}}</small>

                                                @enderror</label>
                                                <input type="text"  wire:model="name" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name">
                                            </div>



                                        </div><!-- end col -->

                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="cleave-ccard" class="form-label">Statut du produit   @error('statut')
                                                    <small class="text-danger">{{$message}}</small>

                                                @enderror</label>
                                                <input type="text"  wire:model="statut" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name">
                                            </div>

                                        </div><!-- end col -->


                                    </div><!-- end row -->



                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 mb-xl-0">
                                                <label for="cleave-phone" class="form-label">Image de couverture  @error('image_couverture')
                                                    <small class="text-danger">{{$message}}
                                                @enderror</label>
                                                <input type="file"   wire:model="image_couverture" class="form-control" id="cleave-phone" placeholder="dcmarket@gmail.com" name="image">
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-xl-6">
                                            <div class="mb-3 mb-xl-0">
                                                <label for="cleave-phone" class="form-label">Selectionner vos images  @error('multiple_image')
                                                    <small class="text-danger">{{$message}}
                                                @enderror</label>
                                                <input type="file" wire:model="multiple_image" multiple class="form-control">
                                                        
                                            </div>
                                        </div><!-- end col -->




                                    </div><!-- end row -->

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 mb-xl-0">
                                                <label for="cleave-phone" class="form-label">Prix du produit   @error('price')
                                                        <span class="text-danger">{{$message}}</span>
                                                @enderror</label>
                                            <input type="number" class="form-control" wire:model="price">
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-xl-6">
                                            <div class="mb-3 mb-xl-0">
                                                <label for="cleave-phone" class="form-label">Quantite du produit   @error('quantity')
                                                        <span class="text-danger">{{$message}}</span>
                                                @enderror</label>
                                                <input type="number" class="form-control" wire:model="quantity">
                                            </div>
                                        </div><!-- end col -->


                                    </div><!-- end row -->



                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 mb-xl-0">
                                                <label for="cleave-phone" class="form-label">Categorie du produit    @error('categorie')
                                                        <span class="text-danger">{{$message}}</span>
                                                @enderror</label>
                                                    <select  wire:model="categorie"  id="" class="form-control">
                                                        <option value="">-------------</option>
                                                        @foreach ($category as $cate )
                                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                        @endforeach

                                                    </select>
                                            </div>
                                        </div><!-- end col -->



                                    </div><!-- end row -->


                                    <br>
                                    <div class="col-sm-12">
                                        <button class="btn btn-dark">Ajouter la categorie</button>

                                    </div>

                                </div>
                            </form><!-- end form -->
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>



        @endif

