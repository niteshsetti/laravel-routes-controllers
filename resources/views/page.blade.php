<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>AngularJS Bootstrap Modal</title>
		<script src="jquery.min.js"></script>
		<script src="jss/jquery.dataTables.min.js"></script>
		<script src="jss/angular-datatables.min.js"></script>
		<script src="jss/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-resource.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/datatables.bootstrap.css">
        <script src="js/app.js"></script>
        <script src="jss/avara.js"></script>

	</head>
	<body ng-app="crudApp" ng-controller="crudController">

		<div class="container" ng-init="fetchData()">
			<br />
				<h3 align="center">Form</h3>
			<br />
			<div class="alert alert-success alert-dismissible" ng-show="success" >
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				[[successMessage]]
			</div>
			<div align="right">
				<button type="button" name="add_button" ng-click="addData()" class="btn btn-success">Add</button>
			</div>
			<br />
			<div class="table-responsive" style="overflow-x: unset;" id="t">
				<table datatable="ng" dt-options="vm.dtOptions" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>phonenumber</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
                        <tr>
							<td>@{{name}}</td>
							<td>Name</td>
							<td>phonenumber</td>
							<td>Edit</td>
							<td>Delete</td>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>

		</div>
	</body>
</html>

<div class="modal fade" tabindex="-1" role="dialog" id="crudmodal">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<form method="post" ng-submit="submitForm()" id="poki" autocomplete="off">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title">@{{modalTitle}}</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="alert alert-danger alert-dismissible" ng-show="error" >
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						@{{errorMessage}}
					</div>
					<div class="form-group">
						<label>Enter  Contact-ID</label>
						<input type="text" name="cid" ng-model="cid" id="cid" class="form-control" ng-disabled="verify"/>
					</div>
					<div class="form-group">
						<label>Enter  Name</label>
						<input type="text" name="name" ng-model="name" id="name" class="form-control" />
					</div>
					<div class="form-group">
						<label>Enter phone Number</label>
						<input type="text" name="phnumber" ng-model="phnumber" id="phnumber" class="form-control" />
					</div>
	      		</div>
	      		<div class="modal-footer">
	      			<input type="hidden" name="hidden_id" value="@{{hidden_id}}" />
	      			<input type="submit" name="submit" id="submit" class="btn btn-info" value="@{{submit_button}}" ng-hide="status" />
					<input type="submit" name="submit" id="submits" class="btn btn-info" value="Update" ng-hide="status1" />
	        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	</div>
	        </form>
    	</div>
  	</div>
</div>
<script>

</script>
