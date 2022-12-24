@extends('dashboard.master.master')

@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Création d'un nouveau article</h4>


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
                        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-4">
                                <h5 class="fs-14 mb-3 text-muted">Tous les champs sont requis</h5>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label for="cleave-ccard" class="form-label">Titre de l'article  @error('name')
                                                <small class="text-danger">{{$message}}</small>

                                            @enderror</label>
                                            <input type="text" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name">
                                        </div>

                                    </div><!-- end col -->


                                </div><!-- end row -->



                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 mb-xl-0">
                                            <label for="cleave-phone" class="form-label">Image  @error('image')
                                                <small class="text-danger">{{$message}}</small>

                                            @enderror</label>
                                            <input type="file" class="form-control" id="cleave-phone" placeholder="dcmarket@gmail.com" name="image">
                                        </div>
                                    </div><!-- end col -->


                                </div><!-- end row -->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 mb-xl-0">
                                            <label for="cleave-phone" class="form-label">Description @error('description')
                                                    <span class="text-danger">{{$message}}</span>
                                            @enderror</label>
                                          <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div><!-- end col -->


                                </div><!-- end row -->
                                <br>
                                <div class="col-sm-12">
                                    <button class="btn btn-dark">Enregistrer  l'article</button>

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
@endsection
