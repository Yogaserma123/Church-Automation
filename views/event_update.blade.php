<html>
<head>
	<meta charset="utf-8">
	<title> Update page </title>
</head>
<body>
<form action="{{route('eventedit', $gan->id)}}" method="POST">
{{csrf_field()}}
<div>
<label>Event Date:</label><input type="date" value="{{$gan->event_date}}" name="event_date"><br><br>
<label>Event Time:</label><input type="time" value="{{$gan->event_time}}" name="event_time"><br><br>
<label>Event Number:</label><input type="number" value="{{$gan->event_no}}" name="event_no"><br><br>
<label>Event Name: </label><input type="text" value="{{$gan->event_name}}" name="event_name"><br><br>
<label>Guest Name: </label><input type="text" value="{{$gan->guest_name}}" name="guest_name"><br><br>
<label>Message : </label><input type="text" value="{{$gan->event_msg}}" name="event_msg"><br><br>
<label>Remark: </label><input type="text" value="{{$gan->remark}}" name="remark"><br><br>
<button type="submit">UPDATE</button>
</div>
@method('GET')
</form>
</body>
</html>