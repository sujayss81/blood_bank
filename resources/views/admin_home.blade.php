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
    <script src="{{ asset('bootstrap/js/admin_home.js' )}}"></script>   
</head>
<body>
		<!-- NAVBAR -->
		<div class="container-flex col-12 float-right">
   			<nav class="navbar navbar-expand navbar-light bg-light">
   				<a class="navbar-brand" href="admin_home">Blood Bank</a>
   				<ul class="navbar-nav mr-auto">
   					<li class="nav-item active">
   						<a class="nav-link">Home</a>
   					</li>
   					<li class="nav-item">	
   						<a class="nav-link" href="#">Profile</a>
   					</li>	
   				</ul>
   				<a class="" href="#">LOGOUT</a>
   			</nav>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<!-- SideNav -->
		<div class="container-flex col-2 float-left">
			<img src="https://www.sgbt.lu/uploads/tx_bisgbio/default-profile_01.png">
			<h5>Hello  Admin</h5>
			<hr>
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link active">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Add Donors</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Add Hospital Details</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Summary</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Blood Quantity</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Monthly Transactions</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Monthly Donor Details</a>
				</li>
			</ul>
			<button class="btn btn-danger">Logout</button>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container-flex col-10 float-right">
			<div class="row top-row">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Add Donors</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">Add Donor</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Add Hospital Details</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">Add Hospital</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Summary</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Summary</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Blood Quantity</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Blood Quantity</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Monthly Transactions</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Transactions</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Monthly Donor Details</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Monthly Donors</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>