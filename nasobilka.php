<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <h1 style="color: #4863A0; font-family: Arial;"> <u><i><b>Malá násobilka</b></i></u> </h1>
    <?php 
        echo "<table border=\"0px\" width=\"500\" style=\"text-align: center; font-family: Arial;\">";
        echo "<tr><th style=\"background-color: #4863A0; color: white;\">#</th>";
    
        for($i=1;$i<11;$i++){
            echo "<th  style=\"background-color: #4863A0; color: white;\">".$i."</th>";
        }
        echo "</tr>";
        for($i=1;$i<11;$i++){
            echo "<tr><th  style=\"background-color: #4863A0; color: white;\">".$i."</th>";
            for($j=1;$j<11;$j++){
                if($i==$j){
                     echo "<td style=\"background-color: #ffbf00; color: #151B54; font-family: Arial;\">".$i*$j."</td>";
                }
                else if($i%2!=0){
                    echo "<td>".$i*$j."</td>";
                }else{
                    echo "<td style=\"background-color: #98AFC7; color: white;\">".$i*$j."</td>";
                }
            }
            echo "</tr>";
            
        }
    
        
        echo "</table>";
    ?>    
    
</body>
</html>