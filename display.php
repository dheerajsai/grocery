<?php
$userId=$_COOKIE['userId'];
$query = "select * from groccery where user_id='$userId'";
$results=executequery($query);
$total = 0;
?>
<table class ="five" border="2" style="width:100%">
  <tr class="two">
    <th>Grocery Name</th>
    <th>QTY</th>
    <th>Amount</th>
  </tr>
<?php
while($row = mysqli_fetch_array($results)){
  $total = $total + $row[4];
?>
  <tr class="two">
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td>
  <form class="" action="" method="post">
    <input type="hidden" name="userId" value="<?php echo $row[0]; ?>">
    <input type="submit" name="delete" value="Delete">
  </form>
    </td>
  </tr>
  <?php
}
?>
<tr>
  <td class="three" colspan="2">
    Total
  </td>
  <td class="three ">
    <?php echo $total;?>
  </td>
</tr>
</table>
