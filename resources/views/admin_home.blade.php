<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/admin_home_style.css')}}">
    <script src="{{ asset('bootstrap/js/jquery.min.js' )}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js' )}}"></script>   
</head>
<body>
		<!-- NavBar -->
		<nav class="navbar navbar-expand navbar-light bg-light">
			<h1 class="navbar-brand">Blood Bank</h1>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class ="nav-link" href="#"><h5>Home</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="#"><h5>ND</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="#"><h5>Manage Donors</h5></a>
				</li>
				<li class="nav-item ">
					<a class ="nav-link" href="#"><h5>Blood Quantity</h5></a>
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
			<a class="nav-link" href="#"><h5>Logout</h5></a>
		</nav>
		<!-- ------------------------------------------------------------- -->
		<span><h5>Admin Panel</h5></span>
		<div class="container-fluid col-9">
			<div class="row">
				<div class="card col-4">
				  <div class="card-body">
				    <h5 class="card-title">ND</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">ND</a>
				  </div>
				</div>
				<div class="card col-4">
				  <div class="card-body">
				    <h5 class="card-title">Manage Donors</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Update</a>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="card col-4">
				  <div class="card-body">
				    <h5 class="card-title">View Blood Quantity</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">View Quantity</a>
				  </div>
				</div>
				<div class="card col-4">
				  <div class="card-body">
				    <h5 class="card-title">View All Donors</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">View Donors</a>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="card col-4">
				  <div class="card-body">
				    <h5 class="card-title">View All Donations</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">View Donations</a>
				  </div>
				</div>
				<div class="card col-4">
				  <div class="card-body">
				    <h5 class="card-title">Add Hospital Transactions</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Add Transaction</a>
				  </div>
				</div>
			</div>
		</div>
</body>
</html>