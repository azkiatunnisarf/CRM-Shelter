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
                            
                            
                            <form action="{{ route('monthFilter.call') }}" method="GET" class="form-inline" id="formFilter">
                                    {{ csrf_field() }}
                                    <a href="/call/exportExcel" class="btn btn-success btn-sm" target="_blank">EXPORT EXCEL</a>
                                    <a href="/insertcall" class="btn btn-primary btn-sm">Input Call</a>
                                    <div class="col-md-6" float="right">
                                    Filter berdasarkan : 
                                    <select style="cursor:pointer;" class="form-control" id="tag_select" name="year">
                                    <option value="0" selected disabled> Pilih Tahun</option>
                                        <?php 
                                        $year = date('Y');
                                        $min = $year - 10;
                                        $max = $year;
                                        for( $i=$max; $i>=$min; $i-- ) {
                                        echo '<option value='.$i.'>'.$i.'</option>';
                                        }?>
                                    </select>
                                    <select style="cursor:pointer;margin-top:1.5em;margin-bottom:1.5em;" class="form-control" id="tag_select" name="month">
                                        <option value="0" selected disabled> Pilih Bulan</option>
                                        <option value="01"> Januari</option>
                                        <option value="02"> Februari</option>
                                        <option value="03"> Maret</option>
                                        <option value="04"> April</option>
                                        <option value="05"> Mei</option>
                                        <option value="06"> Juni</option>
                                        <option value="07"> Juli</option>
                                        <option value="08"> Agustus</option>
                                        <option value="09"> September</option>
                                        <option value="10"> Oktober</option>
                                        <option value="11"> November</option>
                                        <option value="12"> Desember</option>
                                    </select>
                                <button class="btn btn-primary" type="submit">Cari Data</button>
                                </div>
                                </form>

                            <table id="mydatatables" class="table table-collapse table-hover table-light table-striped">
                                <thead>
                                    <th>ID Call</th>
                                    <th>Nama Customer</th>
                                    <th>SPV_PIC</th>
                                    <th>Tanggal</th>
                                    <th>Waktu Call</th>
                                    <th>Pembicaraan</th>
                                    <th>PIC Call</th>
                                    <th>Hal Menonjol</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                @foreach($calls as $call)
                                <tr>
                                    <td>{{ $call->call_id  }}</td>
                                    <td>{{ $call->nama_customer }}</td>
                                    <td>{{ $call->spv_pic }}</td>
                                    <td>{{ $call->tanggal_call }}</td>
                                    <td>{{ $call->jam_call }}</td>
                                    <td>{{ $call->pembicaraan }}</td>
                                    <td>{{ $call->pic_called }}</td>
                                    <td>{{ $call->hal_menonjol }}</td>
                                    <td>
                                        <a href="{{route('edit.call',$call->call_id)}}" class="btn btn-info btn-sm">Ubah</a>
                                        <a href="{{route('destroy.call',$call->call_id)}}" class="btn btn-danger btn-sm">Hapus</a>
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