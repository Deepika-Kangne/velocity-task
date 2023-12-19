<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link href=
'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
          <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
    </script>
      
    <script src=
"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
    </script>


</head>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>
<script>
$(document).ready(function(){
    let base_exp_url = "{{ env('APP_URL') }}";
    let _token = $('meta[name="csrf-token"]').attr('content');
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

    // $('#submitButton').on('click', function (e) {
        $(function() {
                $( "#receiptForm #my_date_picker" ).datepicker();
            });
        
            $(function() {
                $( "#editEmployeeModal #my_date_picker" ).datepicker();
            });
            
    
    $('#empolyetable tbody').on('click', 'tr td a.delete-emp-btn',function () {
        var row_id = $(this).closest('tr').attr('emp_id');
        $.ajax({
			url: base_exp_url+"/api/delete-employees/"+row_id,
			method: "DELETE",
			success: function(result){
                
                $("#empolyetable #deleteMsg").removeClass('d-none');
                location.reload();    
			}
		});
    });
    
    $('#empolyetable tbody').on('click', 'tr td a.edit-emp-btn',function () {
	var row_id = $(this).closest('tr').attr('emp_id');
    $("#editEmployeeForm").attr('emp-id',row_id);
    $("#editEmployeeForm #editEmployeeSubmit").attr('emp-id',row_id);
    var data = {
			_token: _token
    }
    $.ajax({
			url: base_exp_url+"/api/get-employee/"+row_id,
			method: "GET",
			data:data,
			success: function(result){
                $("#editEmployeeForm #name").val('');
               $("#editEmployeeForm #age").val('');
               $("#editEmployeeForm #dob").val('');
               $("#editEmployeeForm #email").val('');
               $("#editEmployeeForm #address").val('');
               console.log(result);
               $("#editEmployeeForm #name").val(result.name);
               $("#editEmployeeForm #age").val(result.age);
               $("#editEmployeeForm #dob").val(result.dob);
               $("#editEmployeeForm #email").val(result.email);
               $("#editEmployeeForm #address").val(result.address);
               $('#editEmployeeForm #my_date_picker').datepicker("setDate", new Date(result.dob) );
               if(result.photo){
            //    $("#editEmployeeForm #photo").val(result.photo);
               }
               if(result.address){
                $("#editEmployeeForm #address").val(result.address);
               }
               $("#editEmployeeModal").modal('show');
			}
		});
    });
});


$(document).on("submit", "#receiptForm", function(e) {
        e.preventDefault(); 
        var base_exp_url = "{{ env('APP_URL') }}";
        var lblError = $("#addEmployeeModal #lblError");
        var $form = $(this).val();
        $.ajax({
				url: base_exp_url+"/api/create-employees",
				type: 'POST',
				contentType: false,
				processData: false,
				async: false,
				data: new FormData(this),
				success: function(result) {
                    location.reload();           
				},
                error: function ( xhr, status, error) {
						// $form.data('submitted', false);
						console.log( " xhr.responseText: " + xhr.responseText + " //status: " + status + " //Error: "+error );
						lblError.removeClass('d-none');
						if(xhr.responseText)
						{
							errortoshow = '';
							$.each(JSON.parse(xhr.responseText).errors, function (i) {
								$.each(JSON.parse(xhr.responseText).errors[i], function (key, val) {
									errortoshow += val+'<br>';
								});
							});
                            // swal("Error", "Unable to bring up the dialog.", "error");
							lblError.html(errortoshow);
						}
					}
			});
});

$(document).on("submit", "#editEmployeeForm", function(e) {
        e.preventDefault(); 
        var base_exp_url = "{{ env('APP_URL') }}";
        var lblError = $("#editEmployeeForm #lblError");
        var $form = $(this).attr('emp-id');
        $.ajax({
				url: base_exp_url+"/api/update-employees/"+$form,
				type: 'POST',
				contentType: false,
				processData: false,
				async: false,
                data: new FormData(this),
				success: function(result) {
                    location.reload();           
				},
                error: function ( xhr, status, error) {
						// $form.data('submitted', false);
						console.log( " xhr.responseText: " + xhr.responseText + " //status: " + status + " //Error: "+error );
						lblError.removeClass('d-none');
						if(xhr.responseText)
						{
							errortoshow = '';
							$.each(JSON.parse(xhr.responseText).errors, function (i) {
								$.each(JSON.parse(xhr.responseText).errors[i], function (key, val) {
									errortoshow += val+'<br>';
								});
							});
                            // swal("Error", "Unable to bring up the dialog.", "error");
							lblError.html(errortoshow);
						}
					}
			});
});
</script>
</head>
<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Product</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>					
                        </div>
                    </div>
                </div>
                <table id="empolyetable" class="table table-striped table-hover">
                <div id="deleteMsg" class="font-medium text-red-600 alert alert-success d-none"></div>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($employeeData as $emp)
                        <tr emp_id = <?php echo $emp['id'];?> >
                            <td>{{$emp['name']}}</td>
                            <td>{{$emp['age']}}</td>
                            <td>{{$emp['email']}}</td>
                            <td>{{$emp['dob']}}</td>
                            <td>{{$emp['address']}}</td>
                            <td><?php if(isset($emp['photo'])){ echo 'Uploaded'; }else {
                                echo '';
                            }        ?></td>
                            <td>
                                <a emp_id = <?php echo $emp['id'];?> class="edit-emp-btn" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a emp_id = <?php echo $emp['id'];?> class="delete-emp-btn" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="receiptForm" enctype="multipart/form-data">
                    <div class="modal-header">						
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div id="lblError" class="font-medium text-red-600 alert alert-danger d-none"></div>					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" id="age" name="age" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <div class="form-control date-wrapper">
                            <input type="text"  id="my_date_picker" name="date_of_birth">
                                                </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" >
                        </div>	
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" id="photo" name="photo" class="form-control" />
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" id="submitButton" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editEmployeeForm" emp-id="">
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                    <div id="lblError" class="font-medium text-red-600 alert alert-danger d-none"></div>					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="name" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" id="age" name="age" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <div class="form-control date-wrapper">
                            <input type="text"  id="my_date_picker" name="date_of_birth">
                                                </div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" >
                        </div>	
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" id="photo" name="photo" class="form-control" />
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" id="editEmployeeSubmit" emp-id="" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- TILL -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
   
</script>
</html>