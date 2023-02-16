<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Initialize an array
    $arr = array("index0", "index1", "index2", "index3");

    // Variable to search
    $search_item = "index2";

    // Use for loop to traverse through the array
    for($i=0; $i<count($arr); $i++){
        
        // Use if-else to compare two values
        if($arr[$i] == $search_item){
            echo "Item found at position $i.";
            break;
        }
        else{
            ;
        }
    }
    ?>
</body>
</html>