@extends('admin.layouts.layout')

@section("contenu")

<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> ajouter un nouveau module</h1>
    </div>

    <div class="card-body">
        <form action="{{url('update.module/'.$module->id_m)}}" method="post" name="f" class="mt-2">
            {{ csrf_field() }}
            @method("PUT")

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">nom du module</label>
                <input type="text" name="description_module" class="form-control" @error('description_module') is-invalid  @enderror
                value="{{$module->description_module}}">
                @error('description_module')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="" class="text-uppercase fw-bold fs-3">coefficient du module</label>
                <input type="text" name="coefficient_module" class="form-control" @error('coefficient_module') is-invalid  @enderror
                value="{{$module->coefficient_module}}">
                @error('coefficient_module')
                <div style="color: red">  {{$message}}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="enregistrer l'utilisateur" class="form-control btn btn-success btn-lg">
            </div>
        </form>

    </div>

</div>
@endsection
