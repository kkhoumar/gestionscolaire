@extends('admin.layouts.layout')

@section("contenu")

<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> ajouter une nouvelle Specialite</h1>
    </div>

    <div class="card-body">
        <form action="{{url('store.specialite')}}" method="post" name="f" class="mt-2">
            {{ csrf_field() }}

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">désignation Specialte</label>
                <input type="text" name="designation_specialite" class="form-control" @error('designation_specialite') is-invalid  @enderror>
                @error('designation_specialite')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="Enregistrer la specialite" class="form-control btn btn-success btn-lg">
            </div>
        </form>

    </div>

</div>
@endsection
