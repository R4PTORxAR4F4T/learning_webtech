<?php
  if(isset($_REQUEST['submit'])){
      
    if(isset($_REQUEST['blood'])){
      $BLOOD =  $_REQUEST['blood'];
      if($BLOOD == ""){
        echo "null data found...<br>";
        echo "<a href='pro6.html'>home page</a>";
      }else{
        echo "your blood type $BLOOD<br>";
        echo "<a href='pro6.html'>home page</a>";
      }
    }
  
}else{
    header('location: pro6.html');
}
?>