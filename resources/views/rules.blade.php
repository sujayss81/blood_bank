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
    		margin-top: 5%;
    	}
    	h3{
    		margin-top: 3%;
    		margin-bottom: 2%;
    	}
    	h3.sp{
    		color: red;
    	}
    	h3.fp{
    		color: blue;
    	}
    </style>
</head>
<body>
		<!-- NAVBAR -->
		<div class="container-flex col-12 float-right">
   			<nav class="navbar navbar-expand navbar-light bg-light">
   				<a class="navbar-brand" href="/donor_home">Blood Bank</a>
   				<ul class="navbar-nav mr-auto">
   					<li class="nav-item ">
   						<a class="nav-link" href="/donor_home">Home</a>
   					</li>
   					<li class="nav-item">	
   						<a class="nav-link" href="#">Profile</a>
   					</li>	
   				</ul>
   				<a onclick="confirmLogout()" class="logout">LOGOUT</a>
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
					<a class="nav-link" href="/rules" style="color: black">Rules</a>
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
					<a class="nav-link" href="/c_pass">Change Password</a>
				</li>
			</ul>
			<button class="btn btn-danger" onclick="confirmLogout()">Logout</button>
		</div>
		<!-- ----------------------------------------------------------------- -->
		<div class="container-flex col-10 float-right">
			<div class="container">
			<h3 class="fp">Parameters that determine the eligibility of an individual to donate blood</h3>
			<ul>
				<li>Overall health- The donor must be fit and healthy, and should not be suffering from transmittable diseases.</li>
				<li>Age and weight- The donor must be 18–65 years old and should weigh a minimum of 50 kg.</li>
				<li>Pulse rate- Between 50 and 100 without irregularities.</li>
				<li>Hemoglobin level- A minimum of 12.5 g/dL.</li>
				<li>Blood pressure- Diastolic: 50–100 mm Hg, Systolic: 100–180 mm Hg.</li>
				<li>Body temperature- Should be normal, with an oral temperature not exceeding 37.5 °C.</li>
				<li>The time period between successive blood donations should be more than 3 months.</li>
			</ul>
			<h3 class="sp">You will not be eligible to donate blood or platelets if you:</h3>
			<ul>
				<li>A person who has been tested HIV positive.</li>
				<li>Individuals suffering from ailments like cardiac arrest, hypertension, blood pressure, cancer, epilepsy, kidney ailments and diabetes.</li>
				<li>A person who has undergone ear/body piercing or tattoo in the past 6 months.</li>
				<li>Individuals who have undergone immunization in the past 1 month.</li>
				<li>Individuals treated for rabies or received Hepatitis B vaccine in the past 6 months.</li>
				<li>A person who has consumed alcohol in the past 24 hours.</li>
				<li>Women who are pregnant or breastfeeding.</li>
				<li>Individuals who have undergone major dental procedures or general surgeries in the past 1 month.</li>
				<li>Women who have had miscarriage in the past 6 months.</li>
				<li>Individuals who have had fits, tuberculosis, asthma and allergic disorders in the past.</li>
			</ul>
			<div class="text-center">
				<button class="btn btn-info" onclick="back()">Back</button>
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
			function back(){
				window.location.href = '/donor_home';
			}
		</script>
</body>
</html>