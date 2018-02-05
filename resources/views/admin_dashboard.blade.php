@extends('layouts.app')

@section('content')
<div class="scoop-content"> 
    <div class="scoop-inner-content">        
        <div class="row clearfix">
            <div class="col-md-6 col-sm-6">
                <div class="content-title">
                    <h1 class="main-title">Admin DashBoard</h1>
                    <div class="breadcrumb-container">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>                                                    
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="spark-chart"> 
                    <div class="row"> 
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <span class="tsa">&nbsp;</span>
                                <div class="spark-chart-title"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="sparkline-chart">
                                <span class="isa">&nbsp;</span>
                                <div class="spark-chart-title"> </div> 
                            </div>
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="info-widget">
                    <div class="panel panel-default earnings-panel-theme">											 
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">$1,500</p>
                                <span class="info-box-title">Sales earnings this month</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="info-widget">
                    <div class="panel panel-default balance-panel-theme">											 
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">$3,000</p>
                                <span class="info-box-title">Your balance</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="fa fa-database" aria-hidden="true"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="info-widget">
                    <div class="panel panel-default total-earnings-panel-theme">											 
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">$18,597</p>
                                <span class="info-box-title">Total value of your sales</span>
                            </div>
                            <div class="info-box-icon">
                                <i class="fa fa-folder-o" aria-hidden="true"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="info-widget">
                    <div class="panel panel-default item-sales-panel-theme">											 
                        <div class="panel-body">
                            <div class="info-box-stats">
                                <p class="counter">150</p>
                                <span class="info-box-title">Item Sales Count</span>
                            </div>
                            <div class="info-box-icon"> 
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </div>
                            <div class="info-box-progress">
                                <div class="progress progress-xs progress-squared bs-n">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    </div>
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
