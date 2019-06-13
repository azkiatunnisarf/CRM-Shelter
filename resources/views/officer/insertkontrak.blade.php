@extends('layouts_users.app_officer')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Insert Kontrak</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="area"></i>Area</a></li>
                    <li class="active">Insert Area</li>
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

                <form>
                    {{ csrf_field() }}
                    

                    <div class="form-group">
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Kode Customer</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Nama Perusahaan</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Periode Kontrak</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Akhir Periode</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Surat Pemberitahuan</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Tanggal Surat Pemberitahuan</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Surat Penawaran</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Tanggal Surat Penawaran</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Dealing</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Tanggal Dealing</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Posisi Pks</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
                        </div>
                        <div class="form-group col-md-6">
                	        <label class="font-weight-bold">Closing</label>
                	        <input type="text" class="form-control" name="nama_kuis" required>
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
