{{View::make('navbar')}}
<html>
<head>
<style>
body{
  background-color:#d9d9d9;
}
input[type=text], input[type=email], textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
  position: absolute;
  top:170px;
  left: 195px
}
.detls {
  position: absolute;
  right: 220px;
  top: 160px;
  background-color: white;
  padding: 20px;
}
</style>
</head>
<body>
<h1 style="position: absolute;left: 210px;top: 120px;color: darkslategray;">Contact Us</h1>
<div class="container">
  <form action=''   enctype="multipart/form-data" >
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" placeholder="Your name.." required><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="Your email.." required><br>

    <label for="subject">Message</label><br>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea><br>

    <input type="submit" value="Submit">
  </form>
</div>
<div class="detls">
<h3 style="color: darkslategray;">Contact Details</h3>
<br>
<h5>Address:</h5>
<b>Booking India Pvt. Ltd.,<br>
DLF Building No. 5 Tower B<br>
DLF Cyber City, DLF Phase 2<br>
Sector 25, Gurugram, Bangalore, India<br></b>
<br>
<h5>Fixed Line:</h5>
<b>0124 4628747<br>
0124 5045105<br>
0124 2898000<br></b>
<br>
<h5>E-mail:</h5>
<b>suhail3k@gmail.com<br>
kmsuhail56@gmail.com</b>

</div>
</body>
</html>