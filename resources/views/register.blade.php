<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
	@include('alerts.alerts')
	<fieldset>
		<div style="text-align: center;">
			<form action="{{ url('register/user') }}" method="post">
				{{ csrf_field() }}
				<label>Firstname</label><br>
				<input type="text" name="firstname" required><br>
				<label>Middlename</label><br>
				<input type="text" name="middlename" required><br>
				<label>Lastname</label><br>
				<input type="text" name="lastname" required><br>
				<label>Phone Number</label><br>
				<input type="text" name="phone_number" required><br>
				<label>Email</label><br>
				<input type="email" name="email" required><br>
				<label>Password</label><br>
				<input type="password" name="password" required><br>
				<label>Confirm Password</label><br>
				<input type="password" name="confirm_password" required><br><br>
				<label>Authenticate By:</label><br>
				<label>Email </label>
				<input type="radio" name="r_btn" value="email" required>
				<label>Phone Number </label>
				<input type="radio" name="r_btn" value="phone_number" required><br><br>
				<button>Register</button><br>
				<a href="{{  url('/') }}">Back</a>
			</form>
		</div>
	</fieldset>
</body>
</html>