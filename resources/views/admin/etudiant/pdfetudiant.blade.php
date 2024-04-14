@extends('layoutspdf.layoutspdf')
<h1 class="text-center bg-info"> bienvenue sur la liste des etudiants</h1>

<div class="card-body col-12">
    <table class="table table-hover table-bordered ">
        <thead class="bg-info"  >
            <tr>
                <th>Nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>date_n</th>
                <th>lieu_n</th>
                <th>numero</th>

            </tr>
        </thead>
        @foreach ($etudiant as $etudiants )
        <tbody >
            <tr>
                    <td>{{$etudiants->nom_etud}}</td>
                    <td>{{$etudiants->prenom_etud}}</td>
                    <td>{{$etudiants->email_etud}}</td>
                    <td>{{$etudiants->date_n_etud}}</td>
                    <td>{{$etudiants->lieu_n_etud}}</td>
                    <td>{{$etudiants->numero}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>


