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
            <a href="javascript:void(0)" class="btn btn-success mb-2" id="input-call">Input Call</a>
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
                                <tbody id="call_crud">
                                @foreach($calls as $c)
                                <tr id="call_id_{{ $c->call_id }}">
                                    <td>{{ $c->call_id  }}</td>
                                    <td>{{ $c->nama_customer }}</td>
                                    <td>{{ $c->spv_pic }}</td>
                                    <td>{{ $c->tanggal_call }}</td>
                                    <td>{{ $c->jam_call }}</td>
                                    <td>{{ $c->pembicaraan }}</td>
                                    <td>{{ $c->pic_called }}</td>
                                    <td>{{ $c->hal_menonjol }}</td>
                                    <td><a href="javascript:void(0)" id="edit-call" data-id="{{ $c->call_id }}" class="btn btn-info">Ubah</a></td>
                                    <td>
                                    <a href="javascript:void(0)" id="delete-call" data-id="{{ $c->call_id }}" class="btn btn-danger delete-user">Hapus</a></td>
                                </tr>
                                @endforeach

                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- modal -->
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="callCrudModal"></h4>
        </div>
        <div class="modal-body">
            <form id="callForm" name="callForm" class="form-horizontal">
               <input type="hidden" name="call_id" id="call_id">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nama Customer</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="" maxlength="50" required="">
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-sm-2 control-label">SPV PIC</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="spv_pic" name="spv_pic" value="" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="tanggal_call" name="tanggal_call" value="" maxlength="50" required="">
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-sm-2 control-label">Waktu Call</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="jam_call" name="jam_call" value="" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Pembicaraan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="pembicaraan" name="pembicaraan" value="" maxlength="50" required="">
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-sm-2 control-label">PIC Call</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="pic_called" name="pic_called" value="" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Hal Menonjol</label>
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="hal_menonjol" name="hal_menonjol" value="" required="">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="create-call">Save changes
            </button>
        </div>
    </div>
  </div>
</div>

@endsection

@section('js')

<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /*  When user click add user button */
    $('#input-call').click(function () {
        $('#btn-save').val("create-call");
        $('#callForm').trigger("reset");
        $('#callCrudModal').html("Add New call");
        $('#ajax-crud-modal').modal('show');
    });
 
   /* When click edit call */
    $('body').on('click', '#edit-call', function () {
      var call_id = $(this).data('id');
      $.get('ajax-crud/' + call_id +'/edit', function (data) {
         $('#callCrudModal').html("Edit call");
          $('#btn-save').val("edit-call");
          $('#ajax-crud-modal').modal('show');
          $('#call_id').val(data.id);
          $('#name').val(data.name);
          $('#email').val(data.email);
      })
   });
   //delete call login
    $('body').on('click', '.delete-call', function () {
        var call_id = $(this).data("id");
        confirm("Are You sure want to delete !");
 
        $.ajax({
            type: "DELETE",
            url: "{{ url('ajax-crud')}}"+'/'+call_id,
            success: function (data) {
                $("#call_id_" + call_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });   
  });
 
 if ($("#callForm").length > 0) {
      $("#callForm").validate({
 
     submitHandler: function(form) {
 
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');
      
      $.ajax({
          data: $('#callForm').serialize(),
          url: "https://www.tutsmake.com/laravel-example/ajax-crud/store",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              var call = '<tr id="call_id_' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.email + '</td>';
              call += '<td><a href="javascript:void(0)" id="edit-call" data-id="' + data.id + '" class="btn btn-info">Edit</a></td>';
              call += '<td><a href="javascript:void(0)" id="delete-call" data-id="' + data.id + '" class="btn btn-danger delete-call">Delete</a></td></tr>';
               
              
              if (actionType == "create-call") {
                  $('#call-crud').prepend(call);
              } else {
                  $("#call_id_" + data.id).replaceWith(call);
              }
 
              $('#callForm').trigger("reset");
              $('#ajax-crud-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
    }
  })
}
</script>
@endsection