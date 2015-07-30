<?php
require_once "config.php";
function executeQuery($query){
  $dbc= mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME) or die("error connecting db");
  $result = mysqli_query($dbc,$query) or die("error querying db");
  mysqli_close($dbc);
  return $result;
}
function isUsernameExists($username){
  $query = "select * from users where username = '$username'";
  $result = executeQuery($query);
  if(mysqli_num_rows($result)>0){
    return true;
  }
  else{
    return false;
  }
}
function isEmailExists($email){
  $query = "select * from users where email = '$email' ";
  $result = executeQuery($query);
  if(mysqli_num_rows($result)>0){
    return true;
  }
  else{
    return false;
  }
}
  function isValidCredentials($gotUsername,$gotPwd){
    $query="select * from users where username ='$gotUsername' and password=('$gotPwd')";
    $result = executeQuery($query);
    if(mysqli_num_rows($result) >0){
        return true;
      }
      else{
        return false;
      }
  }
  function getUserId($username){
    $query = "select * from users where username = '$username'";
    $result = executeQuery($query);
    $rowArray = mysqli_fetch_array($result);
    return $rowArray[0];
  }

  ?>
