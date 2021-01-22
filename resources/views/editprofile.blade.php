<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form In HTML and CSS</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/registercss.css') }}" >
</head>
<body>
	
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Edit Profile
		</div>
        @foreach($qw as $ab)
		<form action="{{ route('registe.update',$ab->id) }}" method="post" enctype="multipart/form-data">
		@method('PATCH')
        @csrf 
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname" required value={{$ab->fname}} >
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname" required value={{$ab->lname}}>
					</div>
				</div>
				<div class="input_wrap">
					<label for="email">Upload CV</label>
					<input type="file" id="cv" name="cv"><br><br>
                    <a href="/images/{{$ab->cv}}" style="color:white;text-decoration: none;" target="_blank">View Current CV</a>
				</div>
				
				<div class="input_wrap">
					<input type="submit" value="Save Changes" class="submit_btn">
				</div>
			</div>
		</form>@endforeach
	</div>
</div>

</body>
</html>


