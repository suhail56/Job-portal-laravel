{{View::make('navbar')}}
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
</style>
</head>
<body>
<a href="postjob"><button type="button" class="btn btn-primary">Back</button></a>
<br>
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
<th> Salary:</th><th> Education:</th> <th> Experience:</th><th> No mof Vaccancy:</th>
</tr>
<tr>
<td>{{$qw->salary}}</td> <td>{{$qw->qualification}}</td> <td>{{$qw->experience}}</td><td>{{$qw->vaccancy}}</td>
</tr>
<tr><th colspan="4"></th></tr>
<tr>
<th colspan="4"> Job Description:</th>
</tr>
<tr>
<td colspan="4"> {{$qw->jdesc}}</td>
</tr>
<tr><th colspan="4"></th></tr>
<tr>
<td><a href="{{ route('post.edit', $qw->id) }}" class="btn btn-warning">Edit</a></td>
<td colspan="2"><h3><a href='aplli/{{ $qw->id }},{{ $qw->cid }}' class="btn btn-primary">View Applied Candidates</a></h3></td>
<td><a href='delete/{{ $qw->id }}' class="btn btn-danger">Delete</a></td>
</tr>
</table>
</div>
<br>
@endforeach
</body>