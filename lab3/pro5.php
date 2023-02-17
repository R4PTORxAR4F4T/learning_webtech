<?php
  if(isset($_REQUEST['submit'])){
      
    if(isset($_REQUEST['horns'])){
      $DEGREE =  $_REQUEST['horns'];
      if($DEGREE == ""){
        echo "null data found...<br>";
        echo "<a href='pro5.html'>home page</a>";
      }else{
        echo "$DEGREE<br>";
        echo "<a href='pro5.html'>home page</a>";
      }
    }
  
}else{
    header('location: pro5.html');
}
?>