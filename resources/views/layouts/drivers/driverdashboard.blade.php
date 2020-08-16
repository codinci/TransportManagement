@extends('layouts.app')

@section('body-class', 'bg-white')
@section('parent-content')
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <a class="sidebar-toggle mr-3" href="#"><i class="fas fa-bars"></i></a>
        <a class="navbar-brand" >{{ config('app.name') }}</a>
        <div class="sidebar-toggle-box">
        </div>    

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" id="userDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="far fa-user-circle"></i> <span class="d-none d-md-inline"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a href="#" class="dropdown-item">Update Profile</a>                       
                        <form method="POST" action="#">
                     
                            @csrf
                            <a href="#" id="logout_link" class="dropdown-item">Logout</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper d-flex">
        <div class="sidebar sidebar-dark bg-dark">
            <ul class="list-unstyled list-admin mb-0">
            <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="index.html">
                    <i class="fas fa-book"></i>
                        <span>Apply for License</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="index.html">
                    <i class="fas fa-id-card"></i>
                        <span>Renew License</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="index.html">
                    <i class="fas fa-coins"></i>
                        <span>Fines</span>
                    </a>
                </li>
            </ul>         
           
        </div>
        

        <div class="content p-3 p-md-5">
            <section class="content">
                @yield('child-content')
            </section>
        </div>
    </div>
@endsection
