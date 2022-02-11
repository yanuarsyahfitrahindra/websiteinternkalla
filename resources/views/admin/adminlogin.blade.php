<!DOCTYPE html>
<html>
<head>
	<title>Login | Kalla Group</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<form name="loginForm" action="/login" method="post">
		@csrf
                <div class="logo">
                    <img src="img/logo.png" alt="" width="200">
                </div>
                <div class="form">

				<div class="logg">
					<h3>LOG IN</h3>
				</div>
				<h4>Username </h4>
                    <input type="text" name="username" autofocus required />

				<h4>Password </h4>
                    <input type="password" name="password" required />
				<p><input type="submit" value="Login" /></p>
            </div>
		</form>
	</div>
</body>
</html>
