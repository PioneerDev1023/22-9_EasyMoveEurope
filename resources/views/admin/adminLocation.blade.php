@extends('layouts.adminApp')
  
@section('content')
        <div class="row d-flex justify-content-center">
            <div class="row dt-content mt-5">
                <div class="col-md-12 text-right mb-5 d-flex justify-content-between">
                    <h1 class="mt-0 fredoka">Location & Garage Management</h1>
                    <a class="btn btn-success mt-3" href="javascript:void(0)" id="createNewProduct"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Location</th>
                                <th>Garage</th>
                                <th>Email</th>
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
                        <div class="alert alert-danger print-error-msg">
                            <ul></ul>
                        </div>
                        <input type="hidden" name="location_id" id="location_id">
                        <div class="form-group">
                            <label for="location" class="col-sm-2 control-label">Location</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Enter a location" value="" maxlength="50" required>
                                <!-- <select class="form-control rep-in form-select" id="location" name="location" aria-label="Location" placeholder="Enter a location">
                                    <option class="rep-option d-none" selected disabled>Location *</option>
                                    <option class="rep-option" value="Dublin">Dublin</option>
                                    <option class="rep-option" value="Galway">Galway</option>
                                    <option class="rep-option" value="Waterford">Waterford</option>
                                    <option class="rep-option" value="Limerick">Limerick</option>
                                    <option class="rep-option" value="Kilkenny">Kilkenny</option>
                                    <option class="rep-option" value="Westport">Westport</option>
                                </select> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Garage</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a garage" value="" maxlength="50" required>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-5 control-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="col-sm-5 control-label">Confirm Password</label>
                            <div class="col-sm-12">
                                <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" class="form-control" required>
                            </div>
                        </div>
        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
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
                ajax: "{{ route('adminLocation.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'location', name: 'location'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            
            $('#createNewProduct').click(function () {
                $('#saveBtn').val("create-product");
                $('#location_id').val('');
                $('#productForm').trigger("reset");
                $('#modelHeading').html("Create New Garage");
                $('#ajaxModel').modal('show');
            });
            
            $('body').on('click', '.editProduct', function () {
                var location_id = $(this).data('id');
                $.get("{{ route('adminLocation.index') }}" +'/' + location_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Garage");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#location_id').val(data.id);
                    $('#location').val(data.location);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                })
            });
            
            $('#saveBtn').click(function (e) {
                e.preventDefault();
            
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('adminLocation.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        if(data.status == '0') {
                            printErrorMsg(data.error);
                            return false;
                        }
                        $('#productForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $data_text = data.statusText;
                        Command: toastr["success"]($data_text, "Success");
                        table.draw();
                    },
                    error: function (data) {
                        Command: toastr["error"]("Please input all the fields exactly!");
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
                function printErrorMsg (msg) {
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display','block');
                    $.each( msg, function( key, value ) {
                        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                        $( ".print-error-msg" ).focus();
                    });
                }
            });

            $('body').on('click', '.deleteProduct', function (){
                var location_id = $(this).data("id");
                var result = confirm("Are You sure want to delete !");
                if(result){
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('adminLocation.store') }}"+'/'+location_id,
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