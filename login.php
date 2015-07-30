<!DOCTYPE html>
<html>
  <head>
    <title>Login Grocery</title>
    <style media="screen">
    .allign2{
      background: #FF3333;
      text-align: center;
      color: white;
    }
    .allign{
      text-align: center;
    }
    .allign label{
      width: 80px;
      text-align: left;
      display:inline-block;
    }
    .allign input{
      margin-top: 10px;
      border-radius: 10px;
    }
    body {
    background-image: url("http://soabootcamp.com/site/images/lots-of-groceries(4).jpg");
    /*background: url(img_flwr.gif);*/
    background-image size: 10px 10px;
    background-image repeat: no-repeat;
  
}
    </style>
  </head>
  <body>
    <?php
      require_once "dbUtil.php";
      $error="";
      if(isset($_POST['login'])){
        $gotUsername = $_POST['username'];
        $gotPwd = $_POST['pwd'];
        if(isValidCredentials($gotUsername,$gotPwd)){
          setcookie('username',$gotUsername);
          $userId=getuserId($gotUsername);
          setcookie('userId',$userId);
          // echo $userId;
          echo "Logged in successfully";
          header("Location:/grocery/app1.php");
        }
        else{
          $error = "Invalid credentials.please try again <br>";
        }
      }
     ?>
     <h1 class="allign2">LOGIN TO GROCERY APP</h1>

     <form class="allign" action="" method="post">
       <?php echo $error; ?>
       <label for="username">Login:</label>
       <input type="text" name="username" value="">
       <br>
       <label for="password">Password:</label>
       <input type="password" name="pwd" value="">
       <br>
       <input type="submit" name="login" value="Login">
     </form>
  </body>
</html>
