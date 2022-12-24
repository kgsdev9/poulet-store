@extends('dashboard.master.master')

@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Modifier la categorie</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">


                    <div class="card-body">
                        <form action="{{route('category.update', $edit->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="mt-4">

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label for="cleave-ccard" class="form-label">Nom d'utiliateur  @error('name')
                                                <small class="text-danger">{{$message}}</small>

                                            @enderror</label>
                                            <input type="text" class="form-control" id="cleave-ccard" placeholder="Electronique" name="name" value="{{$edit->name}}">
                                        </div>

                                    </div><!-- end col -->


                                </div><!-- end row -->



                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 mb-xl-0">
                                            <label for="cleave-phone" class="form-label">Image  @error('image')
                                                <small class="text-danger">{{$message}}</small>

                                            @enderror</label>
                                            <input type="file" class="form-control" id="cleave-phone" placeholder="dcmarket@gmail.com" name="image" value="{{$edit->image}}">
                                        </div>
                                    </div><!-- end col -->


                                </div><!-- end row -->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 mb-xl-0">
                                            <label for="cleave-phone" class="form-label">Description  @error('description')
                                                    <span class="text-danger">{{$message}}</span>
                                            @enderror</label>
                                          <textarea name="description" id="" cols="30" rows="10" class="form-control">  {{$edit->description}}</textarea>
                                        </div>
                                    </div><!-- end col -->


                                </div><!-- end row -->
                                <br>
                                <div class="col-sm-12">
                                    <button class="btn btn-dark">Enregistrer les mdofiications</button>

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
