<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Productos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
{{-- <h1>Welcome</h1>
<h1>  {{ auth()->user()->name }}<h1>
<p><a href="{{ route('user.logout') }}">Logout</a></p> --}}
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
    cursor: pointer;
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
.invalid-add,.invalid-edit,.invalid-delete, .invalid-feedback{
    /* text-align: left; */
    font-size: 14px;
    /* margin-left: 40px; */
    color:red
}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
});
</script>
</head>
<body>




    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cuenta 
                </a>
                <div class="dropdown-menu" style="right:0;" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('productos.index') }}">Productos</a>
                    <a class="dropdown-item" href="{{ route('update.login') }}">Actualizar Datos</a>
                  <a class="dropdown-item" href="{{ route('user.logout') }}">Cerrar Sesión</a>
                </div>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Bienvenido {{ auth()->user()->name }}</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>




<div class="container">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Total de <b>Productos</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Foto</th>
						<th>Precio</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($productos as $producto)
                        <tr >
                            <td>{{$producto->name}}</td>
                            <td ><img src="{!! asset($producto->img) !!}" alt="{{$producto->img}}" width="100"></td>
                            <td >{{$producto->price}}</td>
                            <td>
                                <a class="edit" item="{{$producto->id}}" ><i class="material-icons"  data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" item="{{$producto->id}}" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
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
			<form name="frm_add" id="frm_add" method="POST"  class="needs-validation" enctype="multipart/form-data" validate>
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Agregar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" name="name" id="name" required>
                        <div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input type="file" accept="image/jpeg,image/png" class="form-control" name="img" id="img">
                        <div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="number" class="form-control" name="price" id="price" required>
                        <div class="invalid-feedback"></div>
                        <div class="invalid-add"></div>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="button" class="btn btn-success" id="add_producto" value="Agregar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal ">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="frm_ver_edit" id="frm_ver_edit" method="POST"  class="needs-validation" enctype="multipart/form-data" validate>
                @csrf
                <input type="hidden" name="item_edit" id="item_edit">
            </form>
			<form name="frm_edit" id="frm_edit" method="POST"  class="needs-validation" enctype="multipart/form-data" validate>
                @csrf
                <input type="hidden" name="item_id" id="item_id">
				<div class="modal-header">						
					<h4 class="modal-title">Editar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="cerrar_modal_Edit()">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" name="name_edit" id="name_edit" >
                        <div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Foto</label>
                        <input accept="image/jpeg,image/png" class="form-control" multiple type="file" name="img_edit">
                        <div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label>Precio</label>
						<input type="number" class="form-control" name="price_edit" id="price_edit" >
                        <div class="invalid-feedback"></div>
                        <div class="invalid-edit"></div>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" id="edit_cancel" class="btn btn-default" onclick="cerrar_modal_Edit()" data-dismiss="modal" value="Cancelar">
					<input type="button" id="edit_producto" class="btn btn-info" value="Actualizar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="frm_delete" id="frm_delete" method="POST"  class="needs-validation" enctype="multipart/form-data" validate>
            @csrf
            <input type="hidden" name="item_delete" id="item_delete">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Producto</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Estas seguro de eliminar este producto?</p>
                    <div class="invalid-delete"></div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="button" class="btn btn-danger" id="delete_product" value="Eliminar">
				</div>
			</form>
		</div>
	</div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
    
    <script>
        $(".delete").click(function() {
            $('#item_delete').val($(this).attr('item'));
        });
        $(".edit").click(function() {
            $('#item_edit').val($(this).attr('item'));
            var myformData = new FormData(document.getElementById("frm_ver_edit"));
            $.ajax({
                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: myformData,
                enctype: 'multipart/form-data',
                url: '{{route('edit.product')}}',
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response){
                    // console.log(response);

                     $('#name_edit').val(response['name']);
                     $('#img_edit').val('');
                     $('#price_edit').val(response['price']);
                     $('#item_id').val(response['id']);
                     $('#editEmployeeModal').modal('show');
                },
                error: function(response){
                    console.log("error");
                    console.log(response);
                  
                }
            });
        });
        function cerrar_modal_Edit(){
            $('#editEmployeeModal').modal('hide');
        };
        $("#add_producto").click(function(event) {
            event.preventDefault();
            let validacion = true;
            if($('#name').val() == ""){
                $('#name').addClass("is-invalid");
                validacion = false;
            } else{
                $('#name').removeClass("is-invalid").addClass("was-validated");
            }
            if($('#img').val() == ""){
                $('#img').addClass("is-invalid");
                validacion = false;
            } else{
                $('#img').removeClass("is-invalid").addClass("was-validated");
            }
            
            if($('#price').val() == ""){
                $('#price').addClass("is-invalid");
                validacion = false;
            } else{
                $('#price').removeClass("is-invalid").addClass("was-validated");
            }
            var myformData = new FormData(document.getElementById("frm_add"));
            
            if(validacion !== false){

            $.ajax({

                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: myformData,
                enctype: 'multipart/form-data',
                url: '{{route('save.product')}}',
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response){
                    console.log(response);
                    if(response['state'] == true){
                        Swal.fire({
                        title: '!Producto Guardado exitosamente!',
                        text: '',
                        icon: 'success',
                        showConfirmButton: false
                        });
                        setTimeout(refresh, 2000); 
                    } else if(response['state'] == false){
                        $('.invalid-add').html('*'+ response['message']);
                    }
                    
                },
                error: function(response){
                    console.log("error");
                    console.log(response);
                  
                }
            });
            }
        });
        $("#edit_producto").click(function(event) {
            event.preventDefault();
            let validacion = true;
            // if($('#name_edit').val() == ""){
            //     $('#name_edit').addClass("is-invalid");
            //     validacion = false;
            // } else{
            //     $('#name_edit').removeClass("is-invalid").addClass("was-validated");
            // }
            // if($('#img_edit').val() == ""){
            //     $('#img_edit').addClass("is-invalid");
            //     validacion = false;
            // } else{
            //     $('#img_edit').removeClass("is-invalid").addClass("was-validated");
            // }
            
            // if($('#price_edit').val() == ""){
            //     $('#price_edit').addClass("is-invalid");
            //     validacion = false;
            // } else{
            //     $('#price_edit').removeClass("is-invalid").addClass("was-validated");
            // }
            var myformData = new FormData(document.getElementById("frm_edit"));
            if(validacion !== false){

            $.ajax({
                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: myformData,
                enctype: 'multipart/form-data',
                url: '{{route('saveEdit.product')}}',
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response){
                    console.log(response);
                    if(response['state'] == true){
                        Swal.fire({
                        title: '!Producto Actualizado exitosamente!',
                        text: '',
                        icon: 'success',
                        showConfirmButton: false
                        });
                        setTimeout(refresh, 2000); 
                    } else if(response['state'] == false){
                        $('.invalid-edit').html('*'+ response['message']);
                    }
                    
                },
                error: function(response){
                    console.log("error");
                    console.log(response);
                  
                }
            });
            }
        });
        function refresh(){
            //Actualiza la página
            location.reload();
        }
        $("#delete_product").click(function(event) {
            event.preventDefault();
            let validacion = true;
            var myformData = new FormData(document.getElementById("frm_delete"));
            if(validacion !== false){

            $.ajax({
                method: 'post',
                processData: false,
                contentType: false,
                cache: false,
                data: myformData,
                enctype: 'multipart/form-data',
                url: '{{route('delete.product')}}',
		        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response){
                    console.log(response);
                    if(response['state'] == true){
                        Swal.fire({
                        title: '!Producto Eliminado exitosamente!',
                        text: '',
                        icon: 'success',
                        showConfirmButton: false
                        });
                        setTimeout(refresh, 2000); 
                    } else if(response['state'] == false){
                        $('.invalid-delete').html('*'+ response['message']);
                    }
                    
                },
                error: function(response){
                    console.log("error");
                    console.log(response);
                  
                }
            });
            }
        });
    
    </script>
    </body>
</html>
