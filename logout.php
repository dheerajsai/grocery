<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE['username'])){
        setcookie('username',"",time()-3600);
      echo "You have successfully logged out";
      }
      header("Location:/grocery/openpage.php");
    ?>
  </body>
</html>
