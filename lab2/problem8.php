<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  -->
    <?php

    $rows = [
            'r1'=>[1,2,3,'A'],
            'r2'=>[1,2,'B','C'],
            'r3'=>[1,'D','E','F']
            ];

    echo "<table border=1>";
    echo "
        <tr>
            <td>The array to declare</td>
            <td>Shapes to print</td>
        </tr>";

        echo "<tr>
            <td>";
                echo "<table border=1 width=100%>";
                foreach($rows as $r){
                    echo "<tr>
                        <td>{$r[0]}</td>
                        <td>{$r[1]}</td>
                        <td>{$r[2]}</td>
                        <td>{$r[3]}</td>
                    </tr>";
                }
                echo "</table>"; 
            echo "</td>
            <td>
                <table border=1>
                <tr>
                    <td>";
                        for ($i = 3; $i >= 1; --$i) {
                            for ($j = 1; $j <= $i; ++$j) {
                               echo"$j ";
                            }
                            echo"<br>";
                         }
                        // for ($i = 3; $i >= 1; --$i) {
                            // for ($j = 0; $j < $i; ++$j) {
                            //    echo "$r[$j]";
                            // }
                            // echo "<br>";
                        //  }
                    echo"</td>
                    <td>";
                        $n=65;
                        for($i = 1; $i<=3;$i++){
                            for($j=1; $j<=$i; $j++){
                                
                                echo chr($n)." ";
                                $n++;
                            }
                            echo "<br>";
                        }
                    echo"</td>
                </tr>
                </table>
            </td>
        </tr>";       
    echo "</table>";
?>
</body>
</html>
