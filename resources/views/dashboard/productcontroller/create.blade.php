@extends('dashboard.master.master')
@section('master')
<div class="page-content">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">NOUVEAU PRODUIT</h3>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <form method="POST" action="{{route('create_product')}}"   enctype="multipart/form-data">
                @csrf
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Nom produit
                                        @error('name')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                      <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{old('name')}}">
                                </div>
                            </div>
                            <!--col-->

                            <!--col-->




                            <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Prix de vente en €
                                        @error('price')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                        <input type="number" name="price" class="form-control" placeholder="valeur en Euro"  value="{{old('price')}}">

                                </div>
                            </div>


                            <div class="col-md-6 col-lg-6 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Statut
                                        @error('statut')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                    <select name="statut" id="" class="form-control">
                                        <option value="">-------------------</option>

                                        <option value="disponible">disponible</option>
                                        <option value="stock vide">indisponible</option>
                                      </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Catégorie
                                        @error('category_id')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                      <select class="form-control custom-select" name="category_id">
                                        <option value="">Sélectionner la catégorie</option>
                                              @foreach ($category as  $category)
                                              <option value="{{$category->id}}">{{$category->name}}</option>
                                              @endforeach
                                      </select>
                                </div>
                            </div>




                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="sku" value="{{Auth::user()->id}}">

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Quantite Du Produit
                                        @error('quantity')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                      <input type="number"  name="quantity" class="form-control" placeholder="Entrer La Quantite Du Produit">
                                </div>
                            </div>
                            <!--col-->

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                               <label class="form-label">Image 1
                                     @error('first_image')
                                      <small style="color: red" >{{$message}}</small>
                                        @enderror
                                     </label>
                                     <input type="file" name="img_one" class="form-control"   value="{{old('img_one')}}">
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Image 2
                                        @error('images')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                      <input type="file" name="img_two"    class="form-control"  value="{{old('img_two')}}">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-xxl-3">
                                <div class="form-group">
                                    <label class="form-label">Image 3
                                        @error('tag')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label>
                                      <input type="file" name="img_three"  class="form-control" value="{{old('img_three')}}">
                                </div>
                            </div>



                            <!--col-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="basic-form-textarea">Description
                                        @error('description')

                                    <small class="text-danger">{{$message}}</small>

                                  @enderror</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" id="basic-form-textarea" rows="5" placeholder="Description" name="description" value="{{old('description')}}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enregistrer le produit</button>
                                </div>
                            </div>
                            <!--col-->
                        </div>
                        <!--row-->
                    </div><!-- .card-inner-group -->
                </div>
            </form>
            <!-- .card -->
        </div><!-- .nk-block -->
    </div>
</div>


@endsection
