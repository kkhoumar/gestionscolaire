@extends('admin.layouts.layout')


@section('contenu')

<div class="btn btn-success col-2">Ajouter une specialite</div>
<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> liste des etudiants</h1>
    </div>

                         <div class="card-body col-12">
                            <table class="table table-hover ">
                                <thead class="">
                                    <tr>
                                        <th>IDENTIFIER</th>
                                        <th>numero</th>
                                        <th>modifier</th>
                                        <th>supprimer</th>
                                    </tr>
                                </thead>
                                @foreach ($specialite as $specialites )
                                <tbody>
                                    <tr>
                                            <td>{{$specialites->id_sp}}</td>
                                            <td>{{$specialites->designation_specialite	}}</td>
                                            <td ><a href="{{url('edit.specialite/'.$specialites->id_sp)}}" class="btn btn-danger" role="button">modifier</a></td>
                                            <td ><a href="{{url('delete.specialite/'.$specialites->id_sp)}}" class="btn btn-danger">supprimer</a></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>

                    </div>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
@endsection
