@extends('layouts_users.app_officer')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Laporan Call</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Daftar Laporan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="panel block">
                <div class="panel-body">
                            <hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">
                            @include('admin.shared.components.alert')
                            <div style="overflow-x:auto;">
                            <table id="mydatatables" class="table table-collapse table-hover table-light table-striped">
                                <thead>
                                    <th style="width:10%">ID Call</th>
                                    <th style="width:75%">Nama Customer</th>
                                    <th style="width:15%">SPV_PIC</th>
                                    <th style="width:10%">Tanggal</th>
                                    <th style="width:75%">Waktu Call</th>
                                    <th style="width:10%">Pembicaraan</th>
                                    <th style="width:75%">PIC Call</th>
                                    <th style="width:15%">Hal Menonjol</th>
                                    <th style="width:15%">Aksi</th>
                                </thead>
                                <tbody>


                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
