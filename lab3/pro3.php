<?php
  if(isset($_REQUEST['submit'])){
      
    if(isset($_REQUEST['date'])){
      $DATE =  $_REQUEST['date'];
      if($DATE == ""){
        echo "null data found...<br>";
        echo "<a href='pro3.html'>home page</a>";
      }else{
        echo "$DATE<br>";
        echo "<a href='pro3.html'>home page</a>";
      }
    }
  
}else{
    header('location: pro3.html');
}
?>