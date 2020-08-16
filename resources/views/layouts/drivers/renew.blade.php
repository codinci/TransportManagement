@extends('layouts.drivers.driverdashboard')

@section('title', 'License Renewal')
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
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

            <!-- Accordion card -->
            <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo1">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
                aria-expanded="false" aria-controls="collapseTwo1">
                <h5 class="mb-0">
                    One Year Renewal <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
                </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                data-parent="#accordionEx1">
                <div class="card-body">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam exercitationem aliquam dicta consequatur praesentium animi eaque atque, velit quod, quibusdam temporibus doloribus nam veniam fugit aliquid voluptatibus voluptatum non pariatur?
                </div>
            </div>

            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                aria-expanded="false" aria-controls="collapseTwo21">
                <h5 class="mb-0">
                Three Years Renewal <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
            </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
            data-parent="#accordionEx1">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                wolf
            </div>
            </div>

            </div>
            <!-- Accordion card -->

                </div>
            <!-- Accordion wrapper -->
        </div>
    </div>
               
@endsection  
        