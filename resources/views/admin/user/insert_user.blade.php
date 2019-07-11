@extends('layouts_users.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Insert User</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="wilayah"></i>User</a></li>
                    <li class="active">Insert User</li>
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
                  <div>
                      <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active_tab1" style="border:1px solid #ccc" href="{{asset('/admin/insert_user')}}">Insert User CRM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="border:1px solid #ccc" href="{{asset('/admin/insert_customer')}}">Insert Customer</a>
                        </li>
                      </ul>
                    </div>
                  <br>

                <form action="{{route('store.user')}}" method="post">
                    {{ csrf_field() }} 
                    <div class="form-group">
                      <label>Username :</label>
                      <div><input type="text" class="form-control"  name="username" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nama Depan :</label>
                      <div><input type="text" class="form-control"  name="nama_depan" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nama Belakang :</label>
                      <div><input type="text" class="form-control"  name="nama_belakang" required></div>
                    </div>
                    <div class="form-group">
                      <label>Email :</label>
                      <div><input type="text" class="form-control"  name="email" required></div>
                    </div>
                    <div class="form-group">
                      <label>Password :</label>
                      <div><input type="password" class="form-control"  name="password" required></div>
                    </div>
                    <div class="form-group">
                      <label>Nomor HP :</label>
                      <div><input type="text" class="form-control"  name="no_hp" required></div>
                    </div>
                    <div class="form-group">
                        <label>Nama Area :</label>
                        <div>
                            <select class="form-control" name="nama_area">
                            @foreach($areas as $area)
                                <option value="{{ $area->nama_area }}">{{ $area->nama_area }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Wilayah :</label>
                        <div>
                            <select class="form-control" name="wilayah_id">
                            @foreach($wilayahs as $wilayah)
                                <option value="{{ $wilayah->wilayah_id }}">{{ $wilayah->nama_wilayah }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Wilayah Supervisi :</label>
                        <div>
                            <select class="form-control" name="nama_wilayah">
                            @foreach($wilayahs as $wilayah)
                                <option value="{{ $wilayah->nama_wilayah }}">{{ $wilayah->nama_wilayah }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Rule :</label>
                        <div>
                            <select class="form-control" name="rule">
                                <option value="admin">Admin</option>
                                <option value="Officer_crm">Officer CRM</option>
                                <option value="manager_crm">Manager Officer</option>
                                <option value="manager_non_crm">Manager Non CRM</option>
                                <option value="direktur">Direktur</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="user" class="btn btn-secondary"> Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection
