  <html>
  <head>
    <meta charset="utf-8">
    <title>Grocery list</title>
  </head>
<link rel="stylesheet" href="app1.css" media="screen" title="no title" charset="utf-8">
  <body>
    
    <?php
     require_once("config.php");
     if(!isset($_COOKIE['username'])){
      header('Location: /grocery/login.php');
    }
     ?>
    <h1 class="one">GROCERY LIST......made simple for you</h1>

    <a  href="/grocery/logout.php">Logout</a>

     <?php
     function executequery($query) {
       $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
       $result = mysqli_query($dbc,$query);
       mysqli_close($dbc);
       return $result;
     }
     require_once "submit.php";
     require_once "delete.php";
     require_once "display.php";
     ?>

          <!-- <tr class="two">
        <td>Potatoes</td>
        <td>2</td>
        <td>40</td>
      </tr>
      <tr class="two">
        <td>Soaps</td>
        <td>6</td>
        <td>100</td>
      </tr>
      <tr class="two">
        <td>Deodorant</td>
        <td>2</td>
        <td>400</td>
      </tr>
      <tr class="two">
        <td>paneer</td>
        <td>1</td>
        <td>40</td>
      </tr>
    </table> -->

  </body>
</html>
