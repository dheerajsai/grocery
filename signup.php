<html>
  <head>
    <title>signup from</title>
    <style media="screen">
      .one{
        text-align: center;
        color: white;
      }
      .one label{
        width: 180px;
        text-align: left;
        display:inline-block;
        color: #FF3333;
      }
      .one input{
        margin-top: 10px;
        border-radius: 10px;
        height: 25px;
        width: 250px;
      }
      body{
        background:skyblue;
      }
      img{
        height: 100px;
        float: left;
      }
      .title{
        background: #FF3333;
        text-align: center;
        color: white;
        height:30px;
        padding-bottom: 35px;
        padding-top: 35px;
      }

    </style>
  </head>
  <body>
  <?php
  require_once "dbUtil.php";
      $error = "";
      $isError= false;
      $name="";
      $username="";
      $email="";
    if(isset($_POST['signup'])){
      $name=trim($_POST['name']);
      $username= trim($_POST['username']);
      $email= trim($_POST['email']);
      $password =$_POST['password'];
      $confirmpassword=$_POST['confirmpassword'];
      if(empty($name)){
        $error = $error."<br>"."Name field is empty";
      }
      if(empty($username)){
        $isError=true;
        $error = $error."<br>"."Userame field is empty";
      }
      if(!preg_match('/^[a-z0-9_-]{3,16}$/',$username)){
        $isError = true;
        $error = $error."<br>"."Username should contain only alphabets, numbers,- and _. should be 3 to 16 characters long";
      }
      if(isUsernameExists($username)){
        $isError = true;
        $error = $error."<br>"."Username already exist.please try different one.";
      }
      if(empty($email)){
        $isError=true;
        $error = $error."<br>"."email field is empty";
      }
      if(!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/',$email)){
        $isError = true;
        $error = $error."<br>"."email is not valid";
      }
      if(isEmailExists($email)){
        $isError = true;
        $error= $error."<br>"."emailid already exist";
      }
      if(empty($password)){
        $isError=true;
        $error = $error."<br>"."Password field is empty";
      }
      if(empty($confirmpassword)){
        $isError=true;
        $error = $error."<br>"."Confirmpassword field is empty";
      }

      if($password <> $confirmpassword){
        $isError=true;
        $error = $error."<br>"."Oops!Password entered and confirmed doesn't match";
      }
      if(!$isError){
        $query="insert into users(name,username,email,password) values ('$name','$username','$email',('$password'))";
        $result = executeQuery($query);
        echo "Username with username $username has been created successfully";
      }
    }
   ?>
    <img src="http://soabootcamp.com/site/images/lots-of-groceries(4).jpg" alt="logo" />
    <h1 class="title">GROCERY LIST APP</h1>
    <h1 class="one">CREATE AN ACCOUNT</h1>
    <form class="one" action="" method="post">
      <!-- we show error here -->
      <p>
        <?php echo $error; ?>
      </p>
      <label  for="name">Name: </label>
      <input type="text" name="name" value="<?php echo $isError ? $name:""; ?>">
      <br>
      <label   for="username">Username: </label>
      <input   type="text" name="username" value="<?php echo  $isError ? $username :""; ?>">
      <br>
      <label   for="email">Email:</label>
      <input   type="text" name="email" value="<?php echo $isError ? $email :""; ?>">
      <br>
      <label  for="password">Password:</label>
      <input  type="password" name="password" value="">
      <br>
      <label   for="confirmpassword">Confirm Password: </label>
      <input    type="password" name="confirmpassword" value="">
      <br>
      <input type="submit" name="signup" value="create an account">

      <a href="login.php">Login</ a>


    </form>

  </body>
</html>
