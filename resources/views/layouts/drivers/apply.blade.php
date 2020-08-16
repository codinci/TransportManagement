@extends('layouts.drivers.driverdashboard')

@section('title', 'Apply for License')
@section('child-content')
    <h2>@yield('title')</h2>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="fas fa-home"></i><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
        </div>
        <div class="row">    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Application Form </strong></h3>
                </div>
                <div class="card-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last name">
                        </div>
                        <div class="form-group">
                            <label for="idno">ID No</label>
                            <input type="text" class="form-control" id="idno" placeholder="Enter ID number">
                        </div>
                        <div class="form-group">
                        <label for="drivingcertificate">Driving Certificate</label>
                                            <input type="file" id="drivingcertificate">
                        </div>
                    <button type="submit" class="btn btn-md btn-default">Apply</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

            