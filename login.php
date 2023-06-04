<?php include('main.php');
$ob->user_login();
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Day One: Login Screen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="assets/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="login">
    <div class="tabs">
      <div class="tab active">SIGN IN</div>
      <div class="tab">SIGN UP</div>
    </div>
    <form method="post">
      <div class="input">
        <input id="username" type="text" name="username"/>
        <label for="username">USERNAME</label>
      </div>
      <div class="input">
        <input id="password" type="password" name="psw"/>
        <label for="password">PASSWORD</label>
      </div>
      <input id="remember" type="checkbox" name="remember"/>
      <label for="remember">Keep me Signed in</label>
      <button type="submit" name="btn_login">SIGN IN</button>
      <div class="forgot"><span>Forgot Password?</span></div>
    </form>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
