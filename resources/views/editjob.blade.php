<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  

.container {  
  padding: 60px;  
    width: 40%; 
  background-color: lightblue;
  margin-left: 370px;
  border: 3px solid #f1f1f1; 
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
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
</style>  
</head>  
<body bgcolor="lightblue">  
<form action="{{ route('post.update',$qw->id) }}" method="post" enctype="multipart/form-data">  
@method('PATCH')
@csrf 
  <div class="container">  
  <center>  <h1> Update Job</h1> </center>  
 
  <label> Company Name: </label>   
<input type="text" name="cname" placeholder= "Company Name" size="15" required value={{$qw->cname}} />   
<label> Job title: </label>   
<input type="text" name="jtitle" placeholder="Job title" size="15" required value={{$qw->jtitle}} />   
<label> Location: </label>    
<input type="text" name="location" placeholder="Location" size="15"required value={{$qw->location}} /> 
<label> Salary: </label>    
<input type="text" name="salary" placeholder="Salary" size="15"required value={{$qw->salary}} />   
<label> Qualification: </label>    
<input type="text" name="qualification" placeholder="Qualification" size="15"required value={{$qw->qualification}} />
<label> Experience: </label>    
<input type="text" name="experience" placeholder="Experience" size="15"required value={{$qw->experience}} />
Job Description :  
<textarea cols="80" rows="7" placeholder="Job Description" name="jdesc" required> {{$qw->jdesc}} 
</textarea>  
 <label for="Vaccany"><b>No of Vaccany</b></label>  
 <input type="text" placeholder="Enter Vaccany" name="vaccancy" required value={{$qw->vaccancy}}>  
 <input type="hidden" id="custId" name="cid" value="{{session('data')['email']}}">
    <button type="submit" class="registerbtn">Update</button>    
</form>  
</body>  
</html> 