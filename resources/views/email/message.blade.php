<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Message</title>
</head>
<body>
	Good day {{ $user->firstname }} {{ $user->lastname }} !

	<a href="{{ url('email/verification/' . $user->id) }}">Click here to Verify your accout</a>

</body>
</html>