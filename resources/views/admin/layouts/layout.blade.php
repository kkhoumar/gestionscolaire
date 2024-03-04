@include('admin.navbar.navbar')
<div id="layoutSidenav">
  @include('admin.sidebar.sidebar')
    <div id="layoutSidenav_content" class="mt-4">
        <!--  espace formulaire-->
               @yield('contenu')
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; application de gestion scolaire 2023</div>
                    <div>
                        <script src="//code.jquery.com/jquery.js"></script>
                         @include('flashy::message')
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Realiser par kobenan voir mon blog</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('admin.footer.footer')
