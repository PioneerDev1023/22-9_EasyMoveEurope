@extends('layouts.adminApp')
  
@section('content')
        <div class="row d-flex justify-content-center">
            <div class="row dt-content mt-5">
                <div class="col-md-12 text-right mb-5 d-flex justify-content-between">
                    <h1 class="mt-0 fredoka">Users Management</h1>
                    <div>
                        <a class="btn btn-primary mt-3" href="adminNewUser" id="user_approve"><i class="fa fa-unlock-alt" aria-hidden="true"></i></a>
                        <a class="btn btn-success mt-3" href="javascript:void(0)" id="createNewProduct"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered data-table" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name<th>
                                <!-- <th>Email</th> -->
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal">
                        <input type="hidden" name="user_id" id="user_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">User name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter User name" value="" maxlength="50" required="">
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="email" class="col-sm-6 control-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" required="">
                            </div>
                        </div>

                        <div class="form-group" id="pwd">
                            <label for="password" class="col-sm-6 control-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" id="password" name="password" placeholder="Enter password" class="form-control" required="">
                            </div>
                        </div>

                        <div class="form-group" id="con_pwd">
                            <label for="password" class="col-sm-6 control-label">Confirm Password</label>
                            <div class="col-sm-12">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter password" class="form-control" required="">
                            </div>
                        </div>
        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        
    <script type="text/javascript">
        $(function () {
        
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('adminUser.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            
            $('#createNewProduct').click(function () {

                $('#saveBtn').val("create-product");
                $('#user_id').val('');
                $('#productForm').trigger("reset");
                $('#modelHeading').html("Create New User");
                $('#ajaxModel').modal('show');
            });
            
            $('body').on('click', '.editProduct', function () {
                var user_id = $(this).data('id');
                $.get("{{ route('adminUser.index') }}" +'/' + user_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit User");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#user_id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#pwd').hide();
                    $('#con_pwd').hide();
                })
            });
            
            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
            
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('adminUser.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#productForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $data_text = data.statusText;
                        Command: toastr["success"]($data_text, "Success");
                        table.draw();
                    },
                    error: function (data) {
                        $error_text = data.statusText;
                        // Command: toastr["error"]($error_text, "Error");
                        Command: toastr["error"]("Please input all the fields exactly!");
                        console.log('Error:', data.statusText);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            $('body').on('click', '.deleteProduct', function (){
                var user_id = $(this).data("id");
                var result = confirm("Are You sure want to delete !");
                if(result){
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('adminUser.store') }}"+'/'+user_id,
                        success: function (data) {
                            table.draw();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }else{
                    return false;
                }
            });
        });
    </script>
@endsection