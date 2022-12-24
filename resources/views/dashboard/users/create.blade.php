@extends('dashboard.master.master')

@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Création d'un nouvel utilisateur</h4>


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
                        <form action="{{route('users.store')}}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <h5 class="fs-14 mb-3 text-muted">Tous les champs sont requis</h5>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-ccard" class="form-label">Nom d'utiliateur  @error('name')
                                                <small class="text-danger">{{$message}}</small>

                                            @enderror</label>
                                            <input type="text" class="form-control" id="cleave-ccard" placeholder="Stephane" name="name">
                                        </div>

                                    </div><!-- end col -->

                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-delimiter" class="form-label">Role
                                                @error('role_id')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </label>
                                            <select name="role_id" id="" class="form-control">
                                                <option value="">--------------</option>
                                                @foreach ($roles as $value )
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach

                                            </select>

                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->



                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="mb-3 mb-xl-0">
                                            <label for="cleave-phone" class="form-label">Email  @error('email')
                                                <small class="text-danger">{{$message}}</small>

                                            @enderror</label>
                                            <input type="email" class="form-control" id="cleave-phone" placeholder="dcmarket@gmail.com" name="email">
                                        </div>
                                    </div><!-- end col -->


                                </div><!-- end row -->

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 mb-xl-0">
                                            <label for="cleave-phone" class="form-label">Mot de passe  @error('password')
                                                    <span class="text-danger">{{$message}}</span>
                                            @enderror</label>
                                            <input type="password" class="form-control" id="cleave-phone" placeholder="Entrer le mot de passe" name="password">
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-xl-6">
                                        <div class="mb-0">
                                            <label for="cleave-numeral" class="form-label">Confirmer le mot de passe</label>
                                            <input type="password" class="form-control" placeholder="Confirmer le mot de passe" id="cleave-numeral" name="password_confirmation">
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                                <br>
                                <div class="col-sm-12">
                                    <button class="btn btn-dark">Enregistrer  l'utilisateur</button>

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
