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
    	div.container{
    		max-width: 50%;
    		margin-top: 5%;
    	}
    	input.btn{
    		margin-top: 3%;
    	}
    	input{
    		margin-bottom: 3%;
    	}
    	textarea{
    		margin-bottom: 3%;
    	}
    </style>
</head>
<body>
		<!-- NAVBAR -->
		<div class="container-fluid col-12 float-right">
   			<nav class="navbar navbar-expand navbar-light bg-light">
   				<a class="navbar-brand" href="/donor_home">Blood Bank</a>
   				<ul class="navbar-nav mr-auto">
   					<li class="nav-item ">
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
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/donor_update" style="color: black">Update Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/c_pass">Change Password</a>
				</li>
			</ul>
			<button class="btn btn-danger" onclick="confirmLogout()">Logout</button>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container-flex col-10 float-right">
			<div class="container">
			@foreach($res as $item)
			<form method="POST" action="/update_donor">
				@csrf
					<!-- <div class="row"> -->
						<label>Donor ID</label>
						<input type="text" name="id" disabled="true" value="{{$item->id}}" class="form-control">
					<!-- </div> -->
					<div class="form-row">
						<div class="col">
							<label>First Name</label>
							<input type="text" name="fname" class="form-control" value="{{$item->fname}}">
						</div>
						<div class="col">
							<label>Last Name</label>
							<input type="text" name="lname" class="form-control" value="{{$item->lname}}">
						</div>
					</div>
					<!-- <div class="row"> -->
						<label>Contact</label>
						<input type="number" name="contact" class="form-control" value="{{$item->contact}}">
					<!-- </div> -->
					<!-- <div class="row"> -->
						<label>Blood Group</label>
						<div class="col-2">
						<select class="form-control" disabled="" name="bgroup"> 
							<option>{{$item->bgroup}}</option>
						</select>
						</div>
						<label>Address</label>
						<textarea name="address" class="form-control" rows="5">
							{{$item->address}}
						</textarea>
					<!-- </div> -->
					<!-- <div class="row"> -->
						<label>Date of Birth</label>
						<input type="date" name="dob" class="form-control" value="{{$item->dob}}">
					<!-- </div> -->
						<div class="text-center">
						<input type="submit" name="update" value="Update" class="btn btn-success">
						</div>
			</form>
			@endforeach
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