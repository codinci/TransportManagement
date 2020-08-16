@extends('layouts.drivers.driverdashboard')

@section('title', 'Profile')
@section('child-content')
<h2>@yield('title')</h2>
<div class="container">
<div class="row">
   
    <div class="col-md-6">
        <div class="card">
            <div class="card-heading">
                <h4>Personal Info</h4>
            </div>
            <div class="card-body">
                <div class="form">

                <form class="cmxform form-horizontal " id="signupForm" method="get" action="" novalidate="novalidate">
                    <div class="form-group ">
                        <div class="row">
                        <label for="ID No" class="control-label col-md-4">ID No</label>
                            <div class="col-md-8">
                                <input class="form-control error" id="firstname" name="firstname" type="text"><label for="firstname" class="error">Please enter your firstname</label>
                            </div>
                        </div>
                        <div class="row">
                        <label for="Name" class="control-label col-md-4">Name</label>
                            <div class="col-md-8">
                                <input class="form-control error" id="firstname" name="firstname" type="text"><label for="firstname" class="error">Please enter your firstname</label>
                            </div>
                        </div>
                        <div class ="row">                                     
                        <label for="Phone No" class="control-label col-md-4">Phone No</label>
                            <div class="col-md-5">
                                <input class="form-control error" id="firstname" name="firstname" type="text"><label for="firstname" class="error">Please enter your firstname</label>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-primary">Update</button>                            </div>
                            </div>
                        </div>
                        <div class ="row">                                     
                        <label for="email" class="control-label col-md-4">Email Address</label>
                            <div class="col-md-5">
                                <input class="form-control error" id="email" name="email" type="text"><label for="email" class="error">Please enter your firstname</label>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-primary">Update</button>                            </div>
                            </div>
                        </div>                                                
                       
                    </div>
                </form>

            </div>
                            
        </div>           

    <div class="col-md-6">
        <div class="card">
            <div class="card-heading">
                <h4>Change Password</h4>
            </div>
            <div class="form">

<form class="cmxform form-horizontal " id="signupForm" method="get" action="" novalidate="novalidate">
    <div class="form-group ">
        <div class="row">
        <label for="ID No" class="control-label col-md-4">ID No</label>
            <div class="col-md-8">
                <input class="form-control error" id="firstname" name="firstname" type="text"><label for="firstname" class="error">Please enter your firstname</label>
            </div>
        </div>
        <div class="row">
        <label for="Name" class="control-label col-md-4">Name</label>
            <div class="col-md-8">
                <input class="form-control error" id="firstname" name="firstname" type="text"><label for="firstname" class="error">Please enter your firstname</label>
            </div>
        </div>
      <div class="row justify-content-center">
      <button type="button" class="btn btn-primary">Change Password</button>
      </div>
    </div>
</form>

</div>
        </div>
    </div>

</div>
</div>
@endsection
                