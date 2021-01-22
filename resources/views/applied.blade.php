{{View::make('navbar')}}

<table class="table table-striped">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>CV</th>
</tr>
@foreach($ac as $qw)
<tr>
<td>{{$qw->id}}</td>
<td>{{$qw->jtitle}}</td>
<td>{{$qw->jdesc}}</td>
<td><a href="/images/{{$qw->cv}}" class="btn btn-primary" target="_blank">View CV</a></td>
</tr>
@endforeach
</table>
