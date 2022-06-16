<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="/newt/project/partials/_handleSignup.php" method="post">
     	<h2>SIGN UP</h2>
          <!-- <label>username</label> -->
          
               <input type="text" 
                      name="username" 
                      placeholder="username"><br>
                   
               <input type="text" 
                      name="firstName" 
                      placeholder="firstName"><br>
          
          <!-- <label>firstname</label> -->
          
               <input type="text" 
                      name="lastName" 
                      placeholder="lastName"><br>

          <!-- <label>lastName</label> -->

               <input type="text" 
                      name="email" 
                      placeholder="email"><br>
 
           
               <input type="tel" 
                      name="phone" 
                      placeholder="Phone number"><br>
 
     	<!-- <label>Password</label> -->
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <!-- <label>Re Password</label> -->
          <input type="password" 
                 name="cpassword" 
                 placeholder="Confirm Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>