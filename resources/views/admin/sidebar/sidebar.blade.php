<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Administrateur
                </a>
                <div class="sb-sidenav-menu-heading">getion scolaire</div>
                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon "><i class="fas fa-columns"></i></div>
                  espace etudiant
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('create.users')}}">ajout etudiant</a>
                        <a class="nav-link" href="{{route('show.etudiant')}}">liste etudiant </a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier  etudiant</a>
                    </nav>
                </div>
                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     espace enseignant
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">ajout</a>
                        <a class="nav-link" href="layout-sidenav-light.html">liste utlisateur</a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier utlisateur</a>
                    </nav>
                </div>
                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePage" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     espace module
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePage" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('create.module')}}">ajout module</a>
                        <a class="nav-link" href="{{route('show.module')}}">liste des modules</a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier un module</a>
                    </nav>
                </div>

                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagess" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     espace specialité
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePagess" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('create.specialite')}}">ajout specialite</a>
                        <a class="nav-link" href="{{route('show.specialite')}}">liste specailite</a>
                    </nav>
                </div>

                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesSection" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     espace section
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePagesSection" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">ajout</a>
                        <a class="nav-link" href="layout-sidenav-light.html">liste section</a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier section</a>
                    </nav>
                </div>

                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesEmplois" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     espace emplois du temps
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePagesEmplois" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">ajout</a>
                        <a class="nav-link" href="layout-sidenav-light.html">liste utlisateur</a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier utlisateur</a>
                    </nav>
                </div>

                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseaffectation" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     espace affectation des enseignants
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseaffectation" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">ajout</a>
                        <a class="nav-link" href="layout-sidenav-light.html">liste utlisateur</a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier utlisateur</a>
                    </nav>
                </div>

                <a class="nav-link collapsed text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseaffectation" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                     Edition des plannings des examens
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseaffectation" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">ajout</a>
                        <a class="nav-link" href="layout-sidenav-light.html">liste utlisateur</a>
                        <a class="nav-link" href="layout-sidenav-light.html">modifier utlisateur</a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>
