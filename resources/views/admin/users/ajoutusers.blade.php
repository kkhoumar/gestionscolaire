@extends('admin.layouts.layout')

@section("contenu")

<div class="card mx-3">
    <div class="card-header bg-primary">
        <h1 style="color: white" class="text-uppercase"> ajouter un un utilisateur</h1>
    </div>

    <div class="card-body">
        <form action="{{url('store.create')}}" method="post" name="f" class="mt-2">
            {{ csrf_field() }}

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">nom utlisateur</label>
                <input type="text" name="name" class="form-control" @error('name') is-invalid  @enderror>
                @error('name')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">email utlisateur</label>
                <input type="text" name="email" class="form-control" @error('email') is-invalid  @enderror>
              @error('email')
                <div style="color: red">  {{$message}}</div>
            @enderror
            </div>

            <div class="form-group mt-3">
                <select name="role_id" id="" class="form-control">
                    <option selected disabled class="fs-4 fw-bold">choisir un role</option>
                    <option value= 1 class="fs-5 fw-bold">admin</option>
                    <option value= 2 class="fs-5 fw-bold">enseignant</option>
                    <option value= 3 class="fs-5 fw-bold">Etudiant</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">password  utlisateur</label>
                <input type="text" name="password" class="form-control" @error('password') is-invalid  @enderror>
                @error('password')
              <div style="color: red">  {{$message}}</div>
            @enderror
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="enregistrer l'utilisateur" class="form-control btn btn-primary">
            </div>
        </form>

    </div>

</div>
@endsection
