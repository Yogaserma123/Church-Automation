
<html>
<head>
	<meta charset="utf-8">
	<title> Update page </title>
</head>
<body>
<form action="{{route('attendupdate', $san->id)}}" method="POST">
{{csrf_field()}}
<div>
<label>Family Number:</label><input type="text" value="{{$gan->fno}}" name="fno"><br><br>
<label>Family Head Name:</label><input type="text" value="{{$gan->family_head_name}}" name="family_head_name"><br><br>
<label>Family Photo:</label><input type="file" value="{{$gan->family_photo}}" name="family_photo"><br><br>
<label>Sl No: </label><input type="text" value="{{$gan->slno}}" name="slno"><br><br>
<label>Family Member Name: </label><input type="text" value="{{$gan->family_member_name}}" name="family_member_name"><br><br>
<label>Gender : </label><input type="text" value="{{$gan->gender}}" name="gender"><br><br>

<label>relation: </label><input type="text" value="{{$gan->relation}}" name="relation"><br><br>
<label>occupation: </label><input type="text" value="{{$gan->occupation}}" name="occupation"><br><br>
<label>DoB: </label><input type="date" value="{{$gan->dob}}" name="dob"><br><br>
<label>Marriage Date: </label><input type="date" value="{{$gan->marriage_date}}" name="marriage_date"><br><br>
<label>Baptism Date: </label><input type="date" value="{{$gan->baptism_date}}" name="baptism_date"><br><br>
<label>Mobile: </label><input type="number" value="{{$gan->mobile}}" name="mobile"><br><br>
<label>Aadhar Number: </label><input type="number" value="{{$gan->ad_no}}" name="ad_no"><br><br>
<label>Joining Date: </label><input type="date" value="{{$gan->joining_date}}" name="joining_date"><br><br>
<label>Member Status: </label><input type="text" value="{{$gan->member_status}}" name="member_status"><br><br>
<label>Member Saved: </label><input type="text" value="{{$gan->member_saved}}" name="member_saved"><br><br>
<label>Member Photo: </label><input type="file" value="{{$gan->member_photo}}" name="member_photo"><br><br>
<label>Street: </label><input type="text" value="{{$gan->street}}" name="street"><br><br>
<button type="submit">UPDATE</button>
</div>
@method('GET')
</form>
</body>
</html>

