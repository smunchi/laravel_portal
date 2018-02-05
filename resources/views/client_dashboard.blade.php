@extends('layouts.app')

@section('content')
<div class="scoop-content"> 
    <div class="scoop-inner-content">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="content-title">
                    <h1 class="main-title">Client DashBoard</h1>
                    <div class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>                                                    
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">  
                <div class="panel panel-default">                    
                    <div class="panel-body">
                        <div id="sales-chart" style="height:320px;width:100%;"></div>
                    </div>
                </div> 
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">  
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Monthly Sales Table Data
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <table class="table table-striped table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>Month</th>
                                        <th>Item Sales Count</th> 
                                        <th>Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">January</a></td>
                                        <td>150<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1300.12<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td> 
                                    </tr>
                                    <tr>
                                        <td><a href="#">February</a></td>
                                        <td>200<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1210.60<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">March</a></td>
                                        <td>210<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1460.70<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">April</a></td>
                                        <td>170<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td>
                                        <td>$1350.56<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">May</a></td>
                                        <td>240<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1121.45<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">June</a></td>
                                        <td>256<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$850.80<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">July</a></td>
                                        <td>180<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td>
                                        <td>$1010.30<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">August</a></td>
                                        <td>310<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1603.50<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">September</a></td>
                                        <td>295<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td>
                                        <td>$1556.60<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">October</a></td>
                                        <td>210<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td>
                                        <td>$1230.13<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">November</a></td>
                                        <td>240<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1260.10<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td> 
                                    </tr> 
                                    <tr>
                                        <td><a href="#">December</a></td>
                                        <td>250<span class="up-arrow"><i class="fa fa-level-up" aria-hidden="true"></i></span></td>
                                        <td>$1380.00<span class="down-arrow"><i class="fa fa-level-down" aria-hidden="true"></i></span></td> 
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td>2711</td>
                                        <td>$15330.00</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div> 

            </div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Sales Table Data
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="pageview-container">
                            <div id="pageview-chart" style="height:270px;width:100%;"></div>
                        </div>
                    </div> 
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="pageview-statistics-panel">
                            <div class="list-group">  
                                <div class="list-group-item">
                                    <h3 class ="pageview-statistics-title">Pageview statistics</h3>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Page View</span>
                                    <span class="value">8050</span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Unique Pageviews</span>
                                    <span class="value">7623</span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Bounce Rate</span>
                                    <span class="value">42%</span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Avg. Time On Page</span>
                                    <span class="value">00:01:57</span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Entrances</span>
                                    <span class="value">4827</span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">% Exits</span>
                                    <span class="value">46.29%</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="traffic-source-panel">
                            <div class="list-group">  
                                <div class="list-group-item">
                                    <h3 class ="traffic-source-title">Top Traffic Source</h3>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="traffic-source-name">Direct</span>
                                    <span class="value">61%<small>121,029</small></span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Referrals</span>
                                    <span class="value">15%<small>54,652</small></span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Search Engines</span>
                                    <span class="value">10%<small>21,012</small></span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Social</span>
                                    <span class="value">8%<small>15,892</small></span>
                                </div>
                                <div class="list-group-item"> 
                                    <span class="statistics-name">Other</span>
                                    <span class="value">6%<small>10,063</small></span>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                                       
    </div>
</div>
@endsection
