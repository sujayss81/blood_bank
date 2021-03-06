<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/admin_home_style.css')}}">
    <script src="{{ asset('bootstrap/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js' )}}"></script>   
    <style type="text/css">
    	td a{
    		color: blue !important;
    	}
    	td a:hover{
    		cursor: pointer;
    	}
    </style>
</head>
<body>
		<!-- NavBar -->
		<nav class="navbar navbar-expand navbar-light bg-light">
			<!-- <h1 class="navbar-brand">Blood Bank</h1> -->
			<a class="navbar-brand" href="/admin_home">Blood Bank</a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class ="nav-link" href="/admin_home"><h5>Home</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/add_donation"><h5>Add Donation</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link active" href="/manage_donor"><h5>Manage Donors</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_donation"><h5>View Donations</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_blood"><h5>View Blood</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/add_transaction"><h5>Add H.Transaction</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_transaction"><h5>View H.Transactions</h5></a>
				</li>
			</ul>
			<a class="nav-link logout" onclick="confirmlogout()"><h5>Logout</h5></a>
		</nav>
		<!-- ------------------------------------------------------------- -->
		<span><h5>Admin Panel</h5></span>
		<div class="container-fluid col-9">
			@if(session('status'))
				<div class="alert alert-danger text-center">
					 {{session('status')}}
				</div>
			@endif
			<table class="table table-striped table-hover text-center table-bordered">
				<thead>
					<tr>
						<th>Donor id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Contact</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($res as $value)
					<tr>
						<td>{{$value->id}}</td>
						<td>{{$value->fname}}</td>
						<td>{{$value->lname}}</td>
						<td>{{$value->gender}}</td>
						<td>{{$value->address}}</td>
						<td>{{$value->contact}}</td>
						<td><a onclick="confirmDelete();">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<script type="text/javascript">
			function confirmlogout(){
				var res = confirm("You are about to logout!!");
				if(res)
				{
					window.location = '/admin_logout';
				}

			}
			function confirmDelete(){
				var res = confirm("Are you Sure!!");
				if(res)
				{
					window.location = '/delete_donor/{{$value->id}}';
				}
			}
		</script>
</body>
</html>