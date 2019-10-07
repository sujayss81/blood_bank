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
    <style type="text/css">
    	div.container-flex.col-4{
    		margin: 10% 0 0 30%;
    	}
    	input.btn{
    		margin-top: 4%;
    	}
    	input{
    		margin-bottom: 3%;
    	}
    </style>
</head>
<body>
		<!-- NAVBAR -->
		<div class="container-flex col-12 float-right">
   			<nav class="navbar navbar-expand navbar-light bg-light">
   				<a class="navbar-brand" href="/donor_home">Blood Bank</a>
   				<ul class="navbar-nav mr-auto">
   					<li class="nav-item">
   						<a class="nav-link" href="/donor_home">Home</a>
   					</li>
   					<li class="nav-item">	
   						<a class="nav-link" href="#">Profile</a>
   					</li>	
   				</ul>
   				<a onclick="confirmLogout()">LOGOUT</a>
   			</nav>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<!-- SideNav -->
		<div class="container-flex col-2 float-left">
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
					<a class="nav-link" href="#">Rules</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/donor_donation">View Donations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/donor_update">Update Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/c_pass" style="color: black;">Change Password</a>
				</li>
			</ul>
			<button class="btn btn-danger" onclick="confirmLogout()">Logout</button>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container-flex col-10 float-right">
		<div class="container-flex col-4">
			@if( session('status'))
				<div class="alert alert-danger">
					{{session('status')}}
				</div>
			@endif
			<form method="post" action="/changePassword">
				@csrf
				<label>Current Password</label>
				<input type="password" name="cpass" class="form-control" placeholder="Enter Current Password">
				<hr>
				<label>New Password</label>
				<input type="password" name="npass" class="form-control" placeholder="Enter New Password">
				<label>Confirm Password</label>
				<input type="password" name="conpass" class="form-control" placeholder="Enter Password again">
				<div class="text-center">
				<input type="submit" name="change" value="Change Password" class="btn btn-warning">
				</div>
			</form>
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