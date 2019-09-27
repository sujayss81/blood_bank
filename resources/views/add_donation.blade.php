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
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/add_donation_style.css')}}">
    <script src="{{ asset('bootstrap/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js' )}}"></script>   
</head>
<body>
		<!-- NavBar -->
		<nav class="navbar navbar-expand navbar-light bg-light">
			<h1 class="navbar-brand">Blood Bank</h1>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item ">
					<a class ="nav-link" href="/admin_home"><h5>Home</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link active" href="/add_donation"><h5>Add Donation</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/manage_donor"><h5>Manage Donors</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="/view_donation"><h5>View Donations</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="#"><h5>View Donors</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="#"><h5>View Donations</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="#"><h5>Hospital Transactions</h5></a>
				</li>
			</ul>
			<a class="nav-link logout" onclick="confirmlogout()"><h5>Logout</h5></a>
		</nav>
		<!-- ------------------------------------------------------------- -->
		<span><h5>Admin Panel</h5></span>
		<div class="container-fluid col-3 ">
			@if(session('status'))
			<div class="alert alert-danger">
					{{session('status')}}
			</div>
			@endif
			<form method="POST" action="/addDonation">
				@csrf
				<div class="form-group">
					<label for="donorid">Donor ID</label>
					<input type="number" name="donorid" placeholder="Donor ID #" class="form-control">
				</div>
				<div class="form-group">
					<label for="quantity">Quantity</label>
					<input type="number" name="quantity" placeholder="Quantity Donated in ml" class="form-control">
				</div>
				<div class="text-center">
						<input type="submit" name="Add Donation" value="Add Donation" class="btn btn-success">
				</div>
			</form>
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