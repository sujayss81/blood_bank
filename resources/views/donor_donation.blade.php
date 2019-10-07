<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Donations</title>
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
			<img src="https://www.sgbt.lu/uploads/tx_bisgbio/default-profile_01.png">
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
				<li class="nav-item active">
					<a class="nav-link " href="/donor_donation" style="color: black;">View Donations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">--</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Update Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Change Password</a>
				</li>
			</ul>
			<button class="btn btn-danger" onclick="confirmLogout()">Logout</button>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container-flex col-10 float-right">
			<table class="table table-hover table-bordered table-striped text-center" style=" margin: 5% 0 0 5%;max-width: 90%;">		
				<thead>
					<th>ID</th>
					<th>Blood Group</th>
					<th>Quantity</th>
					<th>Date</th>
				</thead>
				@foreach($val as $item)
				<tbody>				
					<td>{{$item->id}}</td>
					<td>{{$item->b_group}}</td>
					<td>{{$item->quantity}}</td>
					<td>{{$item->d_date}}</td>			
				</tbody>
				@endforeach
			</table>
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