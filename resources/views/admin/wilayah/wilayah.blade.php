@extends('layouts_users.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Daftar Wilayah</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Wilayah</li>
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

                            <table id="mydatatables" class="table table-collapse table-hover table-light table-striped">
                                <thead>
                                    <th style="width:10%">No</th>
                                    <th style="width:40%">Area</th>
                                    <th style="width:40%">wilayah</th>
                                    <th style="width:10%">aksi</th>
                                </thead>
                                <tbody>
                                    @foreach($wilayahs as $wilayah)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $wilayah->area->nama_area }}</td>
                                        <td>{{ $wilayah->nama_wilayah }}</td>
                                        <td>
                                            <a href="{{route('edit.wilayah',$wilayah->wilayah_id)}}" class="btn btn-info btn-sm">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{route('delete.wilayah',$wilayah->wilayah_id)}}" class="btn btn-danger btn-sm">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection