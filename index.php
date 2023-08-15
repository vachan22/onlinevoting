<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="api/login.php">
        <div class="txt_field">
          <input type="text" name="reg" required>
          <span></span>
          <label>Register Number</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
<div class="signup_link">
     <a href="routes/forget.php"><div class="pass">Forgot Password?</div></a>
        <input type="submit" value="Login">
        
          Not Registered? <a href="routes/register.php">Register Here</a><br><br>
	     <a href="Alogin.php">Admin Login Here</a>
        </div>
      </form>
    </div>

  </body>
</html>
