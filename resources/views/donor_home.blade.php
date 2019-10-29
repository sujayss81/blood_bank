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
		<div class="container-fluid">
   			<nav class="navbar navbar-expand navbar-light bg-light">
   				<a class="navbar-brand" href="/donor_home">Blood Bank</a>
   				<ul class="navbar-nav mr-auto">
   					<li class="nav-item active">
   						<a class="nav-link" href="/donor_home">Home</a>
   					</li>
   					<li class="nav-item">	
   						<a class="nav-link" href="/profile">Profile</a>
   					</li>	
   				</ul>
   				<a onclick="confirmLogout()" class="logout">LOGOUT</a>
   			</nav>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<!-- SideNav -->
		<div class="container-fluid col-2 float-left">
			<img src="{{asset('avatar.png')}}">
			@foreach($res as $value)
			<h5>Hello  {{$value->fname}}</h5>
			@endforeach
			<hr>
			<ul class="nav flex-column">
			<!-- 	<li class="nav-item">
					<a class="nav-link active">Home</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="/rules">Donation Rules</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/donor_donation">View Donations</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="/donor_update">Update Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/c_pass">Change Password</a>
				</li>
			</ul>
			<button class="btn btn-danger" onclick="confirmLogout()">Logout</button>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container-fluid col-10 float-right">
			@if(session('updateStatus'))
					<div class="alert alert-danger">
						 {{session('updateStatus')}}
					</div>
			@endif
			<div class="row top-row">
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Donation Rules</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="/rules" class="btn btn-primary">View Rules</a>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">View All Donations</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="/donor_donation" class="btn btn-primary">View Donations</a>
						</div>
					</div>
				</div>
				<!-- <div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">--</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">--</a>
						</div>
					</div>
				</div> -->
			</div>
			<div class="row">
				<!-- <div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">--</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="#" class="btn btn-primary">--</a>
						</div>
					</div>
				</div> -->
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Update Profile</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="/donor_update" class="btn btn-primary">Update</a>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Change Password</h5>
							<p class="card-text">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
							<a href="/c_pass" class="btn btn-primary">Change Password</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function confirmLogout(){
				var res = confirm("You are about to logout!!");
				if(res)
				{
					window.location = '/donor_logout';
				}

			}
		</script>
</body>
</html>