@extends('layouts_users.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1> Dashboard Admin</h1>
                <ol class="breadcrumb">
                    <li><i class="fa fa-dashboard"></i> Home</li>
                    
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <a href="customer">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Customer</span>
                <span class="info-box-number">1,410</span>
            </div>
            </div>
        </div>
    </a>
    <a href="user">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number">{{$users}}</span>
            </div>
            </div>
        </div>
    </a>
    <a href="wilayah">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-map-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Wilayah</span>
                <span class="info-box-number">{{$wilayah}}</span>
            </div>
            </div>
        </div>
    </a>
    <a href="customer">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-envelope-o"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Apa enak nya ini</span>
                <span class="info-box-number">9999999?</span>
            </div>
            </div>
        </div>
    </a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div> --}} 
                <h2>Customer</h2>
                {{----------- box -----------}}
                <div class="col-md-6">
                        <!-- LINE CHART -->
                        <div class="box box-info">
                          <div class="box-header with-border">
                            <h3 class="box-title">Line Chart</h3>
              
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                            <div class="chart">
                              <canvas id="lineChart" style="height:250px"></canvas>
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
              
                        <!-- BAR CHART -->
                        <div class="box box-success">
                          <div class="box-header with-border">
                            <h3 class="box-title">Bar Chart</h3>
              
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                            <div class="chart">
                              <canvas id="barChart" style="height:230px"></canvas>
                            </div>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
              
                      </div>
                
                {{----------- end box -----------}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection