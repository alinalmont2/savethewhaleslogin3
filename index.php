<!DOCTYPE html>
<html>
<head>
	<title>Save the whales</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
     <form action="login.php" method="post">
     	<h2>WHALES LIFE MATTERS</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Don't have an account? easy create one!</a>
     </form>
</body>
</html>