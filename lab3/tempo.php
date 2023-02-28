<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table >
    <tr>
      <td>
      <form method="POST" enctype="">
        <fieldset>
          <legend>NAME</legend>
          <input type="text" name="name"><br>
          <hr>
          <input type="submit" name="submit" value="Submit" />
        </fieldset>
      </form>
    </td>
    </tr>
  </table>

  <?php
  if(isset($_REQUEST['submit'])){
      
    if(isset($_REQUEST['name'])){
      $NAME =  $_REQUEST['name'];
      if($NAME == ""){
        echo "null data found...<br>";
        echo "<a href='pro1.html'>home page</a>";
      }else{
        echo "$NAME<br>";
        echo "<a href='pro1.html'>home page</a>";
      }
    }
  
}else{
    header('location: pro1.html');
}
?>



</body>
</html>