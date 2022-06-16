<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="/newt/project/partials/_handleLogin.php" method="post">
     	<h2>LOGIN</h2>
 
     	<!-- <label>User Name</label> -->
     	<input type="text" name="loginusername" placeholder="Username"><br>

     	<!-- <label>Password</label> -->
     	<input type="password" name="loginpassword" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>