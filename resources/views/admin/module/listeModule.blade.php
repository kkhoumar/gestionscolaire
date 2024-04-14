@extends('admin.layouts.layout')


@section('contenu')
<a href="{{route('create.module')}}"><div class="btn btn-success bg-lg p-3 m-2 col-2 col-sm-2 col-xl-2">Ajouter un module</div></a>

<div class="card mx-3">
    <div class="card-header bg-success">
        <h1 style="color: white" class="text-uppercase"> liste des Modules</h1>
    </div>
                         <div class="card-body col-12">
                            <table class="table  table-hover">
                                <thead class="">
                                    <tr>
                                        <th>description_module</th>
                                        <th>coefficient_module</th>
                                        <th>modifier</th>
                                        <th>supprimer</th>
                                    </tr>
                                </thead>
                                @forelse($module as $modules)
                                <tbody>
                                    <tr>

                                            <td>{{$modules->description_module}}</td>
                                            <td>{{$modules->coefficient_module}}</td>

                                            <td><a href="{{url('edit.module/'.$modules->id_m)}}" class="btn btn-danger">modifier</a></td>
                                            <form action="{{url('delete.module/'.$modules->id_m)}}" method="post">
                                               {{ csrf_field() }}
                                                @method('DELETE')
                                                <td ><button  type="submit" class="btn btn-danger">supprimer</button></td>
                                              </form>
                                    </tr>
                                </tbody>
                                @empty
                                <tbody>
                                    <tr>
                                        <td>no found</td>
                                    </tr>
                                </tbody>
                                @endforelse()
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
