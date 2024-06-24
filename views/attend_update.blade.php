<html>
<head>
	<meta charset="utf-8">
	<title> Update page </title>
</head>
<body>
<form action="{{route('attendupdate', $san->id)}}" method="POST">
{{csrf_field()}}
<div>
<label>Member Number:</label><input type="text" value="{{$san->flno}}" name="flno"><br><br>
<label>Members Name:</label><input type="text" value="{{$san->fname}}" name="fname"><br><br>
<label>Members Phone:</label><input type="number" value="{{$san->fphone}}" name="fphone"><br><br>
<label>Member Status : </label><input type="text" value="{{$san->attend_entry}}" name="attend_entry"><br><br>
<label>Remarks: </label><input type="text" value="{{$san->family_member_name}}" name="remark"><br><br>
<button type="submit">UPDATE</button>
</div>
@method('GET')
</form>
</body>
</html>

