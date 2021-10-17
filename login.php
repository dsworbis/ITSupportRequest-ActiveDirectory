<?php
  
if (isset($_POST['submit-login'])) {
  
  $Username = $_POST['username'];
  $Password = $_POST['pwd'];

  try {
    // check if controller obj exist if not create it 
    
    getUser($Username,$Password);
	$_SESSION['logIn'] = 'true';
	include 'index.html.php';
  }  catch(Exception $e) {
    echo $e; // print the exception later at release create error code table and output error code
  }

}

/*
TO DO :
update the attribute last ip in the users table everytime the user logins via the superglobal : $_SERVER['REMOTE_ADDR']; 
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta name="keywords" content="Login">
</head>
<body>
<div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     
    <input type="submit" name="submit-login" class="btn btn-primary" value="Submit">
  </form>


</div>
</body>
</html>