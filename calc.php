<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
        
        <?php 
            if(empty($_GET["check"])){
                echo "<div style=\"color: red;\"> <b> Numbers weren't calculated ! <b></div>";
            }else{
                $check=$_GET["check"];
            
            
            if($check==true){
                
            
            if(empty($_GET["valA"]) || empty($_GET["valB"])) {
                echo "<div style=\"color: red;\"> <b>One of number is empty ! <b></div>";
            }else{
                $a=$_GET["valA"];
                $b=$_GET["valB"];
                $sum=$a+$b;
                $sub=$a-$b;
                $add=$a*$b;
                $div=$a/$b;
                
                
                if($_GET["state"]==1){
                    echo "<div style=\"font-family:Arial;\"><b>SUM  :  ".$a."  +  ".$b."  =  ".$sum."</b></div>";
                    echo "<div style=\"font-family:Arial;\"><b>SUB  :  ".$a."  -  ".$b."  =  ".$sub."</b></div>";
                }else if($_GET["state"]==2){
                    echo "<div style=\"font-family:Arial;\"><b>SUM  :  ".$a."  +  ".$b."  =  ".$sum."</b></div>";
                    echo "<div style=\"font-family:Arial;\"><b>SUB  :  ".$a."  -  ".$b."  =  ".$sub."</b></div>";
                    echo "<div style=\"font-family:Arial;\"><b>ADD  :  ".$a."  *  ".$b."  =  ".$add."</b></div>";
                    if($b==0){
                        echo "<div style=\"font-family:Arial; color: red;\"><b> null </b></div>";
                    }else{
                        echo "<div style=\"font-family:Arial;\"><b>DIV  :  ".$a."  /  ".$b."  =  ".$div."</b></div>";
                    }
                }
                
                
                
            }
            }else if($check==false){
                echo "<div style=\"color: red;\"> <b> Numbers weren't calculated ! <b></div>";
            }
            }
            //echo "<table><tr  style=\"color: #4863A0; font-family: Arial;\"><td><b>a + b = </b></td><td>".$valA+$valB."</td></tr></table>";
    
        $state=$_GET["state"];
    
        if($state==1){
            $type=0;
        }else{
            $type=1;
        }
    
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

        $string="INSERT INTO value (a,b, type) VALUES(".$a.", ".$b.",".$type.");";
    
        if ($conn->query($string) === TRUE) {
            echo "Successfuly saved to database !";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    
            
        
        ?>
    
        <form method="get" action="form.php">
            <input type="submit" value="BACK">
        </form>
    
</body>
</html>