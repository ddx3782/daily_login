<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Login</title>
</head>
<body>
	@include('alerts.alerts')
	<fieldset>
		<div style="text-align: center;">
			<form action="{{ url('login') }}" method="post">
				{{ csrf_field() }}
				<label>Phone Number / Email</label><br>
				<input type="text" name="phone_email" required><br>
				<label>Password</label><br>
				<input type="password" name="password"><br>
				<button>Login</button><br>
				Didn't have an account? <a href="{{ url('register') }}">Click Here</a>
				Didn't have an account? <a href="{{ url('register') }}">Click Here</a>

			</form>
		</div>
	</fieldset>

</body>
</html>