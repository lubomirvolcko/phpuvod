<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
        
    <form method="get" action="calc.php">
        <table>
            <tr>
                <td style="color: #4863A0; font-family: Arial;"><b>num a :</b></td>
                <td><input type="text" size="10" placeholder="insert a number" name="valA"></td>
            </tr>
            <tr>
                <td style="color: #4863A0; font-family: Arial;"><b>num b :</b></td>
                <td><input type="text" size="10" placeholder="insert a number" name="valB"></td>
            </tr>
            <tr>
                <td ></td>
                <td><input type="checkbox" name="check"><i>agree with calculating</i></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" name="state" value="1" checked><i>basic</i></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" name="state" value="2"><i>advanced</i></td>
            </tr>
            <tr>
                <td ><input type="reset" value="RESET"></td>
                <td><input type="submit" value="CALCULATE"></td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>