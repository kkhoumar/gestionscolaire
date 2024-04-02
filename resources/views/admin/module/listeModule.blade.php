@extends('admin.layouts.layout')


@section('contenu')
<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> liste des etudiants</h1>
    </div>
                         <div class="card-body col-12">
                            <table class="table table-dark table-hover ">
                                <thead class="">
                                    <tr>
                                        <th>description_module</th>
                                        <th>coefficient_module</th>
                                        <th>details</th>
                                        <th>modifier</th>
                                        <th>supprimer</th>
                                    </tr>
                                </thead>
                                @foreach ($module as $modules )
                                <tbody>
                                    <tr>

                                            <td>{{$modules->description_module}}</td>
                                            <td>{{$modules->coefficient_module}}</td>

                                            <td><a href="{{url('details.etudiant/'.$modules->id_m)}}" class="btn btn-danger">details</a></td>
                                            <td ><a href="#" class="btn btn-danger" role="button" data-bs-toggle="button">modifier</a></td>
                                            <td ><a href="#" class="btn btn-danger" role="button" data-bs-toggle="button">supprimer</a></td>
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
