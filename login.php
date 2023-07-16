
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="./style1.css">
  <script src="./login.js"></script>
  
  
</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<form action="login_connect.php" method="post">

  <div class="input-control">
      <input id="email" name="email" type="text" placeholder="Email ">
      <div class="error"></div>
  </div>
  
    <div class="input-control">
      <input id="password" name="password" type="password" placeholder="Password">
      <div class="error"></div>
  </div>
  <div>
    <button class="btn" name="submit" type="submit">Log in</button>
  </div>
</form>
<!-- partial -->
  
</body>
</html>
