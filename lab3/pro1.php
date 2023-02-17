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