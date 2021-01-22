{{View::make('navbar')}}
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
  body{
    background-color: lightblue; 
  }
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
.butt{
  position: absolute;
    right: 0;
}
</style>  
</head>  
<body bgcolor="lightblue"> 
<br>
<div class="butt">
<a href="logout"><button type="button" class="btn btn-primary">Logout</button> </a>.
<a href="pop"><button type="button" class="btn btn-primary">View posted Jobs</button> </a>
</div>
<form action="poo" method="post" enctype="multipart/form-data">  
@csrf 
  <div class="container">  
  <center>  <h1> Post Jobs</h1> </center>  
  <hr>  
  <label> Company Name: </label>   
<input type="text" name="cname" placeholder= "Company Name" size="15" required />   
<label> Job title: </label>   
<input type="text" name="jtitle" placeholder="Job title" size="15" required />   
<label> Location: </label>    
<input type="text" name="location" placeholder="Location" size="15"required /> 
<label> Salary: </label>    
<input type="text" name="salary" placeholder="Salary" size="15"required />   
<label> Qualification: </label>    
<input type="text" name="qualification" placeholder="Qualification" size="15"required />
<label> Experience: </label>    
<input type="text" name="experience" placeholder="Experience" size="15"required />
Job Description :  
<textarea cols="80" rows="7" placeholder="Job Description" name="jdesc" required>  
</textarea>  
 <label for="Vaccany"><b>No of Vaccany</b></label>  
 <input type="text" placeholder="Enter Vaccany" name="vaccancy" required>  
 <input type="hidden" id="custId" name="cid" value="{{session('data')['email']}}">
    <button type="submit" class="registerbtn">Post</button>    
</form>  

</body>  
</html> 