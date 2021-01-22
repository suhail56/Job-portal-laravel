<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/registercss.css') }}" >
</head>
<body>
	
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration
		</div>

		<form action="iii" method="post" enctype="multipart/form-data">
		@csrf 
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname" required>
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname" required>
					</div>
				</div>
				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="text" id="email" name="email" required>
				</div>
				<div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="male" class="input_radio" checked>
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="female" class="input_radio">
								<span>Female</span>
							</label>
						</li>
					</ul>
				</div>
				<div class="input_wrap">
					<label for="psw">Password</label>
					<input type="password" placeholder="Enter Password" name="password" id="psw" required>
				</div>
				
				<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn">
				</div>
				<a href="job" style="text-decoration: none;"><p align="center" style="padding:0px;color:white;">Home</p></a>
			</div>
		</form>
		@if (session('alert'))
    <div class="alert alert-danger" role="alert">
        {{ session('alert') }}
    </div>
    @endif   
	</div>
</div>

</body>
</html>