@extends('dashboard.master.master')


@section('master')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">NOMBRE D'UTILISATEUR  </h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Liste des utilisateurs </h4>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div id="customerList">
                            <div class="row g-4 mb-3">
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Nouvel Utilisateur</button>

                                    </div>
                                </div>
                              
                            </div>

                            <div class="table-responsive table-card mt-3 mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>

                                            <th class="sort asc" data-sort="customer_name">Nom d'utilisateur</th>
                                            <th class="sort" data-sort="email">Email</th>

                                            <th class="sort" data-sort="date">Date de creation</th>
                                            <th class="sort" data-sort="date">Role</th>
                                            <th class="sort" data-sort="status">Status du compte </th>
                                            <th class="sort" data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                            @foreach ($ressourcesUsers as $ressource )
                                            <tr>
                                                <td class="customer_name">{{$ressource->name}}</td>
                                                <td class="email">{{$ressource->email}}</td>

                                                <td class="date">{{$ressource->created_at->diffForHumans()}}</td>
                                                <td class="date">{{$ressource->role->name}}</td>
                                                <td class="status">
                                                        @if($ressource->confirmated_account ==0)
                                                    <span class="badge badge-soft-danger text-uppercase">Inactif</span>
                                                    @elseif($ressource->confirmated_account ==1)
                                                    <span class="badge badge-soft-success text-uppercase">Active</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="{{route('users.edit', $ressource->id)}}" class="btn btn-sm btn-primary edit-item-btn"> Editer</a>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="{{route('users.destroy', $ressource->id)}}" class="btn btn-sm btn-danger remove-item-btn" onclick="return confirm('Voulez-vous vraiment accomplir cette action ?')">  Suppression</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach


                                    </tbody>
                                </table>
                                {{$ressourcesUsers->links()}}

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
            <form  method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="modal-body">
                    <h5>Nouvel enregistrement </h5>

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Nom d'utilisateur @error('name')
                                <small class="text-danger">{{$message}}</small>

                        @enderror</label>
                        <input type="text" id="customername-field" class="form-control" placeholder=" Nom " required="" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="email-field" class="form-label">Email   @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror</label>
                        <input type="email" id="email-field" class="form-control" placeholder= "Email" required="" name="email">
                    </div>



                    <div class="mb-3">
                        <label for="date-field" class="form-label">Role </label>
                            <select name="role_id" id="" class="form-control">
                                {{-- @foreach ($roles as $value )
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                <option value=""></option> --}}
                            </select>
                    </div>


                    <div class="mb-3">
                        <label for="phone-field" class="form-label">Mot de passe  @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror</label>
                        <input type="password" id="phone-field" class="form-control" placeholder="Entrer le mot de passe" required="" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="phone-field" class="form-label">Confirmer le mot de passe </label>
                        <input type="password" id="phone-field" class="form-control" placeholder="confirmer le mot de passe" required="" name="password_confirmation">
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Ajouter l'utilisateur</button>

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
