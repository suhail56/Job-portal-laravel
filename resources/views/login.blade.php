<html>

<head>
  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/logincss.css') }}" >
  <title>Login in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Login Jobseeker</p>
    <form class="form1" action="log" method="post" enctype="multipart/form-data">
    @csrf 
      <input class="un " type="email" align="center" placeholder="Username" name="email" required>
      <input class="pass" type="password" align="center" placeholder="Password" name="password" required>
      <input type="submit" value="Login" class="submit">
      <p class="forgot" align="center"><a href="register">SignUp</a></p>
      <p class="forgot" align="center" style="padding:0px;"><a href="job">Home</a></p>
      </form>
      @if (session('alert'))
    <div class="alert alert-danger" role="alert">
        {{ session('alert') }}
    </div>
    @endif      
    </div>
     
</body>

</html>