@extends('layouts_users.app_officer')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Edit Visit</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="area"></i>Visit</a></li>
                    <li class="active">Edit Visit</li>
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

                <form action="{{route('update.visit', $visit->visit_id)}}" method="post">
                    {{ csrf_field() }}
                    

                    <div class="form-group">
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Nama Customer</label>
                	        <input type="text" class="form-control" name="nama_customer" value="{{ $visit->nama_customer }}" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">SPV_PIC</label>
                	        <input type="text" class="form-control" name="spv_pic" value="{{ $visit->nama_customer }}" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Tanggal</label>
                	        <input type="date" class="form-control" name="tanggal_visit" value="{{ $visit->nama_customer }}" equired>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Waktu In</label>
                	        <input type="time" class="form-control" name="waktu_in" value="{{ $visit->nama_customer }}" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Waktu Out</label>
                	        <input type="time" class="form-control" name="waktu_out" value="{{ $visit->nama_customer }}" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">PIC Visit</label>
                	        <input type="text" class="form-control" name="pic_meeted" value="{{ $visit->nama_customer }}" required>
                        </div>
                        <div class="form-group col-md-12">
                	        <label class="font-weight-bold">Kegiatan</label>
                	        <input type="text" class="form-control" name="kegiatan" value="{{ $visit->nama_customer }}" required>
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
