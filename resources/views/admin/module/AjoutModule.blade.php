@extends('admin.layouts.layout')

@section("contenu")

<div class="card mx-3">
    <div class="card-header bg-primary">
        <h1 style="color: white" class="text-uppercase"> ajouter un nouveau module</h1>
    </div>

    <div class="card-body">
        <form action="{{url('store.module')}}" method="post" name="f" class="mt-2">
            {{ csrf_field() }}

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">nom du module</label>
                <input type="text" name="name" class="form-control" @error('module') is-invalid  @enderror>
                @error('module')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">coefficient du module</label>
                <input type="text" name="name" class="form-control" @error('coefficient') is-invalid  @enderror>
                @error('coefficient')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="enregistrer l'utilisateur" class="form-control btn btn-primary btn-lg">
            </div>
        </form>

    </div>

</div>
@endsection
