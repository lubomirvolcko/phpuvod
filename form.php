<!DOCTYPE html>
<html>
<head>
    
</head>
<body style="text-align: center;">
    
    <h1 style="color: #4863A0; font-family: Arial;">CALCULATOR</h1>
        
    <form method="get" action="calc.php">
        <table style="margin: 0px auto;">
            <tr>
                <td style="color: #4863A0; font-family: Arial;"><b>num a :</b></td>
                <td><input type="text" size="10" placeholder="insert a number" name="valA"></td>
            </tr>
            <tr>
                <td style="color: #4863A0; font-family: Arial;"><b>num b :</b></td>
                <td><input type="text" size="10" placeholder="insert a number" name="valB"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="check" checked><i>agree with calculating</i></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="state" value="1" checked><i>basic</i></td>
            </tr>
            <tr>
                <td colspan="2"><input type="radio" name="state" value="2"><i>advanced</i></td>
            </tr>
            <tr>
                <td><input type="reset" value="RESET"></td>
                <td><input type="submit" value="CALCULATE"></td>
            </tr>
        </table>
    </form>
    
    <form method="get" action="history.php">
        <table style="margin: 0px auto;">
            <tr>
                <td colspan="2"  style="text-align: center;"><input type="submit" value="HISTORY"></td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>