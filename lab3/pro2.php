<?php
  if(isset($_REQUEST['submit'])){
      
    if(isset($_REQUEST['email'])){
      $eMail =  $_REQUEST['email'];
      if($eMail == ""){
        echo "null data found...<br>";
        echo "<a href='pro2.html'>home page</a>";
      }else{
        echo "$eMail<br>";
        echo "<a href='pro2.html'>home page</a>";
      }
    }
  
}else{
    header('location: pro2.html');
}
?>