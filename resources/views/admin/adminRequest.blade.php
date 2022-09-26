@extends('layouts.adminApp')
  
@section('content')
        <div class="row d-flex justify-content-center">
            <div class="row dt-content mt-5">
                <div class="col-md-12 text-right mb-5 d-flex justify-content-between">
                    <h1 class="mt-0 fredoka">Person Request Management</h1>
                    <div>
                        <a class="btn btn-primary mt-3" href="adminRequest" id="user_approve"><i class="fa fa-users" aria-hidden="true"></i> Person</a>
                        <a class="btn btn-success mt-3" href="adminComRequest" id="createNewProduct"><i class="fa fa-building" aria-hidden="true"></i> Company</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name<th>
                                <th>Phone Number</th>
                                <th>Pickup</th>
                                <th>Destination</th>
                                <th>Price</th>
                                <th>Van Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
                ajax: "{{ route('adminRequest.index') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'contact_name', name: 'contact_name'},
                    {data: 'user_email', name: 'user_email'},
                    {data: 'contact_phone', name: 'contact_phone'},
                    {data: 'sender_city', name: 'sender_city'},
                    {data: 'receiver_city', name: 'receiver_city'},
                    {data: 'price', name: 'price'},
                    {data: 'van_type', name: 'van_type'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            
            $('#createNewProduct').click(function () {
                $('#saveBtn').val("create-product");
                $('#repair_id').val('');
                $('#productForm').trigger("reset");
                $('#modelHeading').html("Create New Product");
                $('#ajaxModel').modal('show');
            });
            
            $('body').on('click', '.editProduct', function () {
                var repair_id = $(this).data('id');
                $.get("{{ route('adminRequest.index') }}" +'/' + repair_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Product");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#repair_id').val(data.id);
                    $('#reg_number').val(data.reg_number);
                    $('#email').val(data.email);
                })
            });
            
            $('#saveBtn').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
            
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('adminRequest.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#productForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });

            $('body').on('click', '.deleteProduct', function (){
                var repair_id = $(this).data("id");
                var result = confirm("Are You sure want to delete !");
                if(result){
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('adminRequest.store') }}"+'/'+repair_id,
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