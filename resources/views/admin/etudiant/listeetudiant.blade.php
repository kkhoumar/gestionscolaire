@extends('admin.layouts.layout')


@section('contenu')
<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> liste des etudiants</h1>
    </div>
                         <div class="card-body col-12">
                            <table class="table">
                                <thead class="">
                                    <tr>
                                        <th>photo</th>
                                        <th>Nom</th>
                                        <th>prenom</th>
                                        <th>email</th>
                                        <th>date_n</th>
                                        <th>lieu_n</th>
                                        <th>numero</th>
                                        <th>details</th>
                                        <th>modifier</th>
                                        <th>supprimer</th>
                                    </tr>
                                </thead>
                                @foreach ($etudiant as $etudiants )
                                <tbody>
                                    <tr>
                                            <td ><img src="storage/Etudiant/{{$etudiants->photo}}" alt="rien" class="rounded-circle" width=30% height="auto"></td>
                                            <td>{{$etudiants->nom_etud}}</td>
                                            <td>{{$etudiants->prenom_etud}}</td>
                                            <td>{{$etudiants->email_etud}}</td>
                                            <td>{{$etudiants->date_n_etud}}</td>
                                            <td>{{$etudiants->lieu_n_etud}}</td>
                                            <td>{{$etudiants->numero}}</td>
                                            <td><a href="{{url('details.etudiant/'.$etudiants->id_etud)}}" class="btn btn-danger">details</a></td>
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
