<?php
if(isset($_POST['delete'])){
  $id=$_POST['userId'];
  $query = "delete from groccery where id=".$id;
  $result=executequery($query);
}
 ?>
