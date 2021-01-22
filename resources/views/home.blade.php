{{View::make('navbar')}}
<html>
<head>
<style>
body{
    background-image: url('/images/jp.jpg');
  background-repeat: no-repeat;
  background-size: 100% 700px;
}
* {
  box-sizing: border-box;
}
input[type=text] {
  display:block;
  width:31%;
  margin:auto;
  padding:10px;
}
.type-1 {
  border-radius:10px;
  border: 1px solid #eee;
  transition: .3s border-color;
}
.type-1:hover {
  border: 1px solid #aaa;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #00284d;
   color: white;
   text-align: center;
}
.button1 {
    width: 250px;
    background-color: #e60000; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.but{
    position: absolute;
    left: 30%;
    top: 45%;
}
</style>
</head>
<body>
<div>
<div style="text-align: center;">
<form action="jobvi"  enctype="multipart/form-data">
@csrf
<br><br><br><br>
<h1 style="color:white;">Find the Job You Love</h1><br>
<input type="text" class="type-1" placeholder="Search jobs..." name="search">
<input type="submit" value="Search Jobs" name="btn" class="btn btn-sm btn-danger" style="position: fixed;top: 251px;right: 431px;padding:10px;">
</form>
</div>
<div class="but">
<a href="login" style="padding:40px;"><button class="button button1"><b> Find Jobs</b></button></a>
<a href="plogin"><button class="button button1"><b> Post Jobs</b></button></a>
</div>
<div class="footer">
<br>
<p>Copyright © 2021 All rights reserved | Job Portal</p>
</div>
</body>
</html>