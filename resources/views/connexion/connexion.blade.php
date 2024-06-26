<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body{
                background-image:url('image/oip.jpeg');
            }
        </style>
    </head>
    <style></style>
    <body class="bg-emerald-500">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <h1 class="text-center mt-2 text-bg-danger text-uppercase"> Bienvenue sur l'application de gestion scolaire </h1>
                        <div class="row justify-content-center ">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5 h-16">

                                    <div class="card-header text-bg-danger"><h3 class="text-center my-4">Login</h3></div>
                                    <div class="card-body">
                                        @if (Session::get('message'))
                                        <div class="alert alert-danger">{{Session::get('message')}}</div>
                                       @endif

                                        <form action="{{URL('store')}}" method="post"  name="f" autocomplete="off">
                                            {{ csrf_field() }}
                                            @method('POST')
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('email') is-invalid  @enderror" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                                <label for="inputEmail">Email address</label>
                                               @error('email')
                                                   {{$message}}
                                               @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control @error('password') is-invalid  @enderror" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                <label for="inputPassword">Password</label>
                                               @error('password')
                                                   {{$message}}
                                               @enderror
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" value="enregistrement" class="btn btn-danger form-control">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
