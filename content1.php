
<?php
$user = 'root';
$password = '';
$database = 'event_management_system';
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);
 if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
    }

$sql = " SELECT * FROM `login` WHERE 1 ";
$result = $mysqli->query($sql);
//$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
   
    <link rel="stylesheet" type="text/css" href="style_content.css">
 
</head>
 
<body>
    <section>
        <h1>ADMIN DETAILS</h1>
        
        <table>
            <tr>
                <th>LOGIN ID</th>
                <th>EMAIL</th>
                <th>NAME</th>
                <th>USER ID</th>
                <th>OPERATIONS</th>
            </tr>
       
            <?php
                
                
            $sql = " SELECT * FROM `login` WHERE 1 ";   
            while($result = $mysqli->query($sql))
            {
            echo "
            <tr>
                <td>".$result[login_id]."</td>
                <td>".$result[email]."</td>
                <td>".$result[name]."</td>
                <td>".$result[user_id]."</td>
                <td><a href = 'delet.php?rn=$result[user_id]'>DELET</td>
            </tr>";
            
                }
                
            ?>
        </table>
    </section>
</body>
 
</html>