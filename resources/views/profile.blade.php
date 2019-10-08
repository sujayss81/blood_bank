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
    <link rel='stylesheet' type='text/css' href="{{asset('bootstrap/css/profile_style.css')}}">
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
   					<li class="nav-item ">
   						<a class="nav-link" href="/donor_home">Home</a>
   					</li>
   					<li class="nav-item active">	
   						<a class="nav-link" href="/profile">Profile</a>
   					</li>	
   				</ul>
   				<a onclick="confirmLogout()" class="logout">LOGOUT</a>
   			</nav>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container col-6 pcard">
			<div class="text-center">
			<img src="{{asset('avatar.png')}}" style="width: auto;height: auto;">
			<h1>My Profile</h1>
			</div>
			<!-- @foreach($res as $item)
			<h3>ID :</h3><h4 class="id">{{$item->id}}</h4>
			<h3>Name :</h3><span class="name">{{$item->fname}} {{$item->lname}}</span>
			<h3>Blood Group :</h3><span class="bg">{{$item->bgroup}}</span>
			<h3>Date Of Birth :</h3><span class="dob">{{$item->dob}}</span>
			<h3>Gender :</h3><span class="gender">{{$item->gender}}</span>
			<h3>Address :</h3><span class="address">{{$item->address}}</span>
			<h3>Contact :</h3><span class="contact">{{$item->contact}}</span>
			@endforeach -->
			<!-- <div class="text-center"> -->
			<table class="col-9">
				<tbody>
					<tr>
						<th>ID</th>
						<th>:</th>
						<td>{{$item->id}}</td>
					</tr>
					<tr>
						<th>Name</th>
						<th>:</th>
						<td>{{$item->fname}} {{$item->lname}}</td>
					</tr>
					<tr>
						<th>Blood Group</th>
						<th>:</th>
						<td>{{$item->bgroup}}</td>
					</tr>
					<tr>
						<th>Date Of Birth </th>
						<th>:</th>
						<td>{{$item->dob}}</td>
					</tr>
					<tr>
						<th>Gender </th>
						<th>:</th>
						<td>{{$item->gender}}</td>
					</tr>
					<tr>
						<th>Address </th>
						<th>:</th>
						<td>{{$item->address}}</td>
					</tr>
					<tr>
						<th>Contact </th>
						<th>:</th>
						<td>{{$item->contact}}</td>
					</tr>
				</tbody>
			</table>
			</div>
			<div class="container col-6">
			<div class="bgroup">
			<button class="btn btn-info float-left" onclick="back();">Back</button>
			<button class="btn btn-info float-left" onclick="update();">Update Profile</button>
			</div>
			</div>
		<!-- </div> -->
		<!-- ----------------------------------------------------------------- -->
		<script type="text/javascript">
			function confirmLogout(){
				var res = confirm("You are about to logout!!");
				if(res)
				{
					window.location = '/donor_logout';
				}

			}
			function back(){
				window.location.href = '/donor_home';
			}
			function update(){
				window.location.href = '/donor_update';
			}
		</script>
</body>
</html>