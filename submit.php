<?php
  $errorMsg="";
  if(isset($_POST['submit'])){
    $userId = $_COOKIE['userId'];
    $groceryName = $_POST['GrocceryName'];
    $qty=$_POST['QTY'];
    $amount=$_POST['Amount'];
    if(!empty($groceryName) && !empty($qty) && !empty($amount)){
      $query = "insert into groccery(user_id,groccery_name,qty,amount)values('$userId','$groceryName','$qty','$amount')";
    // echo $query;
      $result=executequery($query);
    }
    else{
      $errorMsg = "enter the groceries,qty,amount in the fields <br>";
    }
  }
 ?>
<!-- <?php
  // if(isset($_POST['submit'])){
  //   $grocceryName = $_POST['GrocceryName'];
  //   $QTY = $_POST['QTY'];
  //   $Amount = $_POST['Amount'];
  //   $userId=$_COOKIE['userId'];
  //   $query = "insert into groccery(user_id,groccery_name,qty,amount) values ('".$userId."','".$grocceryName."','".$QTY."','".$Amount."')";
  //   // echo $query;
  //   executequery($query);
  // }
?> -->
  <div class="four">

  <form class="" action="app1.php" method="post">
    <?php echo $errorMsg; ?>
    <input class="container" type="text" name="GrocceryName" value="" placeholder="Grocery Name">
    <input class="container" type="text" name="QTY" value="" placeholder="QTY">
    <input class="container" type="text" name="Amount" value="" placeholder="Amount">
    <input class="container" type="submit" name="submit" value="SUBMIT">
    <!-- <input type="submit" name="edit" value="EDIT"> -->
</form>
</div>
