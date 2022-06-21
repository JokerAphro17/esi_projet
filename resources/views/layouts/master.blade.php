<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ESI | UNB </title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app1.css')}}" />
    @livewireStyles
</head>

<b class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-logout"></i>
                    </a>
                </li>
            </ul>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-arrow-right-from-bracket " style="
                        width:50%;
                        "></i></button>
            </form>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/" class="brand-link">
                <img src="{{asset('logo.jpeg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-5"
                    style="opacity: 1" />
                <span class="brand-text font-weight-light">ESI/UNB</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->name}}</a>
                    </div>
                </div>


                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    MENU
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/" @if($secretary) class="nav-link" @else class="nav-link active" @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>GESTION DES ETUDIANT</p>
                                    </a>
                                </li>

                                @if(auth()->user()->role_id)
                                <li class="nav-item">
                                    <a href="{{route('secretaire')}}" @if($secretary) class="nav-link active" @else
                                        class="nav-link" @endif>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>AJOUT D'UN SECRETAIRE</p>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <b>Version</b> 1.0
            </div>

            <strong>Copyright &copy; 2022
                UNIVERSITE NAZI BONI</strong>
            All rights reserved.
        </footer>
    </div>

    <script src="{{asset('js/app1.js')}}"></script>

    @livewireScripts

    </body>
    @include('flash-message')

</html>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script defer>
    $(document).ready( function () {
    $('#myTable').DataTable();
    $('#myTable1').DataTable();
} );
</script>