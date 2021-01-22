{{View::make('navbar')}}
<html>
<head>
<style>
body{
  background-color:#e6e6e6;
  
}
th{
  padding:5px;
}
td{
  padding:5px;
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
.butt{
  position: absolute;
    right: 0;
}
</style>
</head>
<body>
<div class="butt">
<a href="logouts"><button type="button" class="btn btn-primary">Logout</button></a>.
<a href="{{ route('registe.edit', session('datas')['email']) }}"><button type="button" class="btn btn-primary">Edit Profile</button></a>
</div>
<br>
<div style="text-align:center;">
<form action="pooss" method="post" enctype="multipart/form-data">
@csrf
<input type="text" class="type-1" placeholder="Search jobs..." name="search">
<input type="submit" value="Search Jobs" name="btn" class="btn btn-sm btn-primary"style="position: absolute;top: 100px;right: 422px;padding:10px;">
</form>
<br>
</div>
@foreach($ab as $qw)
<div class="shadow  rounded" style="width:60%;margin: auto;padding:10px;background-color:white;border: 0.5px solid #b3b3b3;">
<table>
<tr>
<th colspan="4"><h2> <b>{{$qw->jtitle}}</b></h2></th>
</tr>
<tr>
<th colspan="4">  {{$qw->cname}} - {{$qw->location}}</th>
</tr>
<tr><td colspan="4"><hr> </td></tr>
<tr>
<th> Salary</th><th> Education</th> <th> Experience</th><th> No.of Vaccancy</th>
</tr>
<tr>
<td>{{$qw->salary}}</td> <td>{{$qw->qualification}}</td> <td>{{$qw->experience}}</td><td>{{$qw->vaccancy}}</td>
</tr>
<tr><th colspan="4"></th></tr>
<tr>
<th colspan="4"> Job Description</th>
</tr>
<tr>
<td colspan="4"> {{$qw->jdesc}}</td>
</tr>
<tr><th colspan="4"></th></tr>
<tr>
<td><h3><a href='apl/{{ $qw->id }},{{ $qw->cid }},{{session('datas')['email']}}' class="btn btn-primary">APPLY NOW    </a></h3></td>
</tr>
</table>
</div>
<br><br>
@endforeach

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
  </body>
</html>