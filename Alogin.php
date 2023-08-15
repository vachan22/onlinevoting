<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="post" action="api/Adlogin.php">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>User name</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pass" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
         
        </div>
      </form>
    </div>

  </body>
</html>
