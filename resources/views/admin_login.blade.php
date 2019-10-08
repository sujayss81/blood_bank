<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/admin_login_style.css')}}">
</head>
<body>
	  <div class="container-fluid col-12 text-center">
	  	<h4>ADMIN LOGIN</h4>
	  </div>
	  <div class="container-fluid col-3">
	  		<form method="POST" action="/admin_auth">
	  			@csrf
	  			<div class="form-group text-center">
	  				<label>Username</label>
	  				<input type="text" name="username" class="form-control">
	  			</div>
	  			<div class="form-group text-center">
	  				<label>Password</label>
	  				<input type="password" name="password" class="form-control">
	  			</div>
	  			<div class="text-center">
	  				<input type="submit" name="login" value="Login" class="btn btn-warning">
	  			</div>
	  		   @if (session('status'))
   			   <div class="alert alert-danger">
      				  {{ session('status') }}
  			   </div>
			   @endif
	  		</form>
	  </div>

</body>
</html>
