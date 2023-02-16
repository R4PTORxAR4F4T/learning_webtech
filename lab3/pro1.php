<?php
  if(isset($_REQUEST['submit'])){
      
    $NAME =  $_REQUEST['name'];
    if($NAME == ""){
        echo "null data found...";
    }else{
      echo "$NAME";
    }
  
}else{
    header('location: pro1.html');
}
?>