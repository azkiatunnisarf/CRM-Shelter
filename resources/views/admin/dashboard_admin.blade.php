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
                <a href="bisnis_unit">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-aqua">
                          <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                          <div class="info-box-content">
                            <span class="info-box-text">bisnis_unit</span>
                            <span class="info-box-number">{{$bisnis_unit}}</span>
                          </div>
                        </div>
                    </div>
                </a>
                
                {{----------- end box -----------}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection