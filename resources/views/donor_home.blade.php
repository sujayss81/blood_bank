<!DOCTYPE html>
<html>
<head>
	<title>Donor Home</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/donor_home_style.css')}}">
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
			<h5>Hello  Donor</h5>
			<hr>
			<ul class="nav flex-column">
			<!-- 	<li class="nav-item">
					<a class="nav-link active">Home</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="#">View All My Donations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View My Monthly Donations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Total Quantity Donated</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Badge Progress</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">View Blood Information</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Update Profile</a>
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
							<h5 class="card-title">View All My Donations</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Donations</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View My Monthly Donations</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Donations</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Total Quantity Donated</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Quantity</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Badge Progress</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Progress</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View Blood Information</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">View Info</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Update My Profile</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">Update</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>