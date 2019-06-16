@extends('layouts_users.app_admin')

@section('content_header')
<div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Form Edit User</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="{{asset('user')}}"></i> User</a></li>
                    <li class="active">Edit User</li>
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form action="{{route('update.user', $user->email)}}" method="post">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Username :</label>
                        <div>
                          <input type="text" class="form-control" name="username" value="{{ $user->username}}"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Nama Depan :</label>
                        <div>
                          <input type="text" class="form-control" name="nama_depan" value="{{ $user->nama_depan}}"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Nama Belakang :</label>
                        <div>
                          <input type="text" class="form-control" name="nama_belakang" value="{{ $user->nama_belakang}}"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Email :</label>
                        <div>
                          <input type="text" class="form-control" name="email" value="{{ $user->email}}"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Password :</label>
                        <div>
                          <input type="text" class="form-control" name="password" value="{{ $user->password}}"required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>No HP :</label>
                        <div>
                          <input type="text" class="form-control" name="no_hp" value="{{ $user->no_hp}}"required>
                        </div>
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

                      <button type="submit" class="btn btn-primary ">Update</button>
                      <a href="/user" class="btn btn-secondary"> Cancel</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection
