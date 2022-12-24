<div class="app-menu navbar-menu border-end">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">

        @can('admin-functionnalite')
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu Principale</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('dashboard')}}" >
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tableau de bord</span>
                    </a>

                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{url('/')}}" target="about_blank">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Accueil</span>
                    </a>

                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Menu contextuel</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Gestion De Categorie</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('category.create')}}" class="nav-link" >
                               nouvelle categorie
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('category.liste')}}" class="nav-link" >
                                   Liste des categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Gestion de produit</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('create.newproduct')}}" class="nav-link" data-key="t-starter"> Créer un nouveau produit </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('product.liste')}}" class="nav-link" data-key="t-starter"> Liste des produits </a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Commandes</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Gestion De Commande </span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('oders.liste')}}" class="nav-link" data-key="t-alerts">Liste des commandes</a>
                                    </li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Gestion d'articles</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('blog.create')}}" class="nav-link" data-key="t-sweet-alerts">Nouveau article</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blog.liste')}}" class="nav-link" data-key="t-nestable-list">Liste des articles</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Gestion d'utilisateur</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('users.create')}}" class="nav-link" data-key="t-basic-elements">
                                Nouvel utilisateur
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('users.liste')}}" class="nav-link" data-key="t-form-select"> Liste des utilisateurs </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
            @elsecan('user-functionnalite')
            <div class="container-fluid">


                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="menu-title"><span data-key="t-menu">Menu Principale</span></li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{route('dashboard')}}" >
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tableau de bord</span>
                        </a>

                    </li> <!-- end Dashboard Menu -->


                    <li class="nav-item">
                        <a class="nav-link menu-link" href="{{url('/')}}" target="about_blank">
                            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Accueil</span>
                        </a>

                    </li> <!-- end Dashboard Menu -->









                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Commandes</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                            <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Gestion De Commande </span>
                        </a>
                        <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                            <div class="row">
                                <div class="col-lg-4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('orders.users.liste')}}" class="nav-link" data-key="t-alerts">Liste des commandes</a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                            <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Mes Envies</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarForms">
                            <ul class="nav nav-sm flex-column">

                                <li class="nav-item">
                                    <a href="{{route('like.index')}}" class="nav-link" data-key="t-form-select"> Ma liste d'envie</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>


        @endcan

        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
