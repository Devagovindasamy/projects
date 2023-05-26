<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="pdoval.php" method="post">
        <div class="field">
          <label>Email Address</label>
          <input type="text" name="name" required>
          
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="pwd" required>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
        </div>
        <div class="field">
          <input type="submit"  value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="pdoreg.php">Signup now</a></div>
      </form>
    </div>

  </body>
</html>
