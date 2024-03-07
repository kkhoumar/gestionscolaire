@extends('admin.layouts.layout')

@section("contenu")

<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> ajouter un Etudiant</h1>

    </div>

    <div class="card-body">
       <div class="container">

                <form action="{{url('store.create')}}" method="post" name="f" class="row g-3" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="" class="text-uppercase fw-bold fs-3">nom</label>
                            <input type="text" name="nom" class="form-control" @error('nom') is-invalid  @enderror>
                            @error('nom')
                            <div style="color: red">  {{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label for="" class="text-uppercase fw-bold fs-3"> prenom Etudiant</label>
                            <input type="text" name="prenom" class="form-control" @error('prenom') is-invalid  @enderror>
                          @error('prenom')
                            <div style="color: red">  {{$message}}</div>
                        @enderror
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="" class="text-uppercase fw-bold fs-3">Adresse Email</label>
                        <input type="text" name="email" class="form-control" @error('email') is-invalid  @enderror>
                        @error('email')
                        <div style="color: red">  {{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="text-uppercase fw-bold fs-3"> date de Naissance</label>
                        <input type="text" name="naissance" class="form-control" @error('naissance') is-invalid  @enderror>
                      @error('naissance')
                        <div style="color: red">  {{$message}}</div>
                    @enderror
                    </div>
            </div>


            <div class="col-md-6">
                <div class="form-group mt-3">
                    <label for="" class="text-uppercase fw-bold fs-3"> lieu de naissance</label>
                    <input type="text" name="lieu_naissance" class="form-control" @error('lieu_naissance') is-invalid  @enderror>
                    @error('lieu_naissance')
                    <div style="color: red">  {{$message}}</div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="" class="text-uppercase fw-bold fs-3">numero</label>
                    <input type="text" name="numero" class="form-control" @error('numero') is-invalid  @enderror>
                  @error('numero')
                    <div style="color: red">  {{$message}}</div>
                @enderror
                </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">mot de passe</label>
                <input type="mot_passe" name="mot_passe" class="form-control" @error('mot_passe') is-invalid  @enderror>
                @error('mot_passe')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label  class="form-label text-uppercase fw-bold fs-3">State</label>
                <select name="role_id" id="" class="form-select">
                    <option selected disabled class="">choisir un role</option>
                    <option value= 1 class="fs-5 fw-bold">admin</option>
                    <option value= 2 class="fs-5 fw-bold">enseignant</option>
                    <option value= 3 class="fs-5 fw-bold">Etudiant</option>
                </select>
            </div>
       </div>
    <div class="form-group mt-3">
        <label for="" class="text-uppercase fw-bold fs-3"> telecharger photo</label>
        <input type="file" name="photo" class="form-control" @error('photo') is-invalid  @enderror>
      @error('photo')
        <div style="color: red">  {{$message}}</div>
    @enderror
    </div>
    <div class="form-group mt-3">
        <input type="submit" value="enregistrer l'utilisateur" class="form-control btn btn-success btn-lg">
    </div>
              </form>

       </div>

    </div>

</div>
@endsection
