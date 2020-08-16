@extends('layouts.drivers.driverdashboard')

@section('title', 'Incured Fines')
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
            <section class="card">
                <div class="card-header">
                <h3 class="card-title">
                Incuured Fines
                </h3>
                </div>            
                <div class="card-body">
                    <div class="adv-table">
                        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th class="th-sm">
                                   Date
                                </th>
                                <th class="th-sm">
                                    Offense
                                </th>
                                <th class="th-sm">
                                    Amount
                                </th>                                
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date
                                    </th>
                                    <th>Offense
                                    </th>
                                    <th>Amount
                                    </th>
                                </tr>
                            </tfoot>
                        </table>   
                    </div>
                </div>
            </section>
        </div>
    </div>
               
@endsection  
        