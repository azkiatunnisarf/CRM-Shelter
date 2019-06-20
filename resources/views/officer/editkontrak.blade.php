@extends('layouts_users.app_officer')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Edit Kontrak</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="area"></i>Kontrak</a></li>
                    <li class="active">Edit Kontrak</li>
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
                  @include('admin.shared.components.alert')
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      </div>
                  @endif

                  <br>

                <form action="{{route('store.kontrak')}}" method="post">
                    {{ csrf_field() }}
                    

                    <div class="form-group">
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Kode Customer</label>
                	        <input type="text" class="form-control" name="kode_customer" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Nama Perusahaan</label>
                	        <input type="text" class="form-control" name="nama_perusahaan" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Periode Kontrak</label>
                	        <input type="date" class="form-control" name="periode_kontrak" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Akhir Periode</label>
                	        <input type="date" class="form-control" name="akhir_periode" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Surat Pemberitahuan</label>
                	        <input type="text" class="form-control" name="srt_pemberitahuan" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Tanggal Surat Pemberitahuan</label>
                	        <input type="date" class="form-control" name="tgl_srt_pemberitahuan" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Surat Penawaran</label>
                	        <input type="text" class="form-control" name="srt_penawaran" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Tanggal Surat Penawaran</label>
                	        <input type="date" class="form-control" name="tgl_srt_penawaran" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Dealing</label>
                	        <input type="text" class="form-control" name="dealing" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Tanggal Dealing</label>
                	        <input type="date" class="form-control" name="tgl_dealing" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Posisi Pks</label>
                	        <input type="text" class="form-control" name="posisi_pks" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Closing</label>
                	        <input type="text" class="form-control" name="closing" required>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lg btn-info btn-block ">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection