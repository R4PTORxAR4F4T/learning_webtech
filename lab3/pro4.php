<?php
  if(isset($_REQUEST['submit'])){
      
    if(isset($_REQUEST['horns'])){
      $SEX =  $_REQUEST['horns'];
      if($SEX == ""){
        echo "null data found...<br>";
        echo "<a href='pro4.html'>home page</a>";
      }else{
        echo "$SEX<br>";
        echo "<a href='pro4.html'>home page</a>";
      }
    }
  
}else{
    header('location: pro4.html');
}
?>