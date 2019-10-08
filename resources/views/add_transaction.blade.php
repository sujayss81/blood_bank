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
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/add_transaction_style.css')}}">
    <script src="{{ asset('bootstrap/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js' )}}"></script>   
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
					<a class ="nav-link" href="/manage_donor"><h5>Manage Donors</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_donation"><h5>View Donations</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_blood"><h5>View Blood</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link active" href="/add_transaction"><h5>Add H.Transaction</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_transaction"><h5>View H.Transactions</h5></a>
				</li>
			</ul>
			<a class="nav-link logout" onclick="confirmlogout()"><h5>Logout</h5></a>
		</nav>
		<!-- ------------------------------------------------------------- -->
		<span><h5>Admin Panel</h5></span>
		<div class="container-fluid col-2">
			<form method="POST" action="/transaction">
				@csrf
				<div class="row">
				<label>Hospital Name</label>
				<input type="text" name="hospitalname" placeholder="Name of the hospital" class="form-control">
			</div>
				<div class="row">
				<label for="bloodgroup">Blood Group</label>
			</div>
				<div class="row">
				<select class="form-control" name="bloodgroup">
					<option>A+</option>
					<option>A-</option>
					<option>B+</option>
					<option>B-</option>
					<option>AB+</option>
					<option>AB-</option>
					<option>O+</option>
					<option>O-</option>
				</select>
			</div>
			<div class="row"> 
				<label>Quantity</label>
				<input type="number" name="quantity" placeholder="Quantity in ml" class="form-control">
			</div>
			<div class="row">
				<label>Transaction Date</label>
				<input type="date" name="date" class="form-control">
			</div>
			<div class="row">
				<input type="submit" name="submit" value="Add" class="form-control btn btn-success">
			</div>
			</form>
			@if(session('status'))
			<div class="alert alert-danger">
				{{session('status')}}
			</div>
			@endif
		</div>
		<script type="text/javascript">
			function confirmlogout(){
				var res = confirm("You are about to logout!!");
				if(res)
				{
					window.location = '/admin_logout';
				}

			}
		</script>
</body>
</html>