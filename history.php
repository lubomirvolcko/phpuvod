<!DOCTYPE html>
<html>
<head>
    
</head>
<body style="color: #4863A0; font-family: Arial; font-weight: bold;">
    
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "calculator";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "Select a, b, type from value order by id desc limit 20;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $rows=0;
            while($row = $result->fetch_assoc()) {
                $rows++;
                $a = $row["a"];
                $b = $row["b"];
                $sum=$a+$b;
                $sub=$a-$b;
                $add=$a*$b;
                $div=$a/$b;
                
                if($row["type"]==1){
                    echo $rows. "(advanced) :   ".$a." + ".$b." = ".$sum." | ".$a." - ".$b." = ".$sub." | ".$a." * ".$b." = ".$add." | ".$a." : ".$b." = ".$div."<br>";
                }else{
                    echo $rows. "(basic) :  ".$a." + ".$b." = ".$sum." | ".$a." - ".$b." = ".$sub."<br>";
                }
                
            }
        } else {
            echo "0 results";
        }
    
        $conn->close();
    ?>
    
    <form  method="get" action="form.php">
        <tr>
            <td colspan="2"  style="text-align: center;"><input type="submit" value="BACK"></td>
        </tr>    
    </form>
</body>
</html>