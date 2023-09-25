<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "event_management_system";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
   
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
                <th clospan = "2" align = "center">OPERATIONS</th>
            </tr>
       
            <?php
                
                
                $query = "SELECT * FROM `login`WHERE 1 ";
                
                $res = mysqli_query($conn,$query);
                if ( $res)
                {
                    
                    //$sql = " SELECT * FROM `login` WHERE 1 ";
                    //$res1 = mysqli_query($conn,$sql);
                    while ($query_executed = mysqli_fetch_assoc ($res))
                    {
                        echo "
                        <tr>
                            <td>".$query_executed['login_id']."</td>
                            <td>".$query_executed['email']."</td>
                            <td>".$query_executed['name']."</td>
                            <td>".$query_executed['user_id']."</td>
                            <td><a href = 'update.php?ln=$query_executed[login_id] & em=$query_executed[email] & ne=$query_executed[name] & ui=$query_executed[user_id]'>UPDATE</td>
                            <td><a href = 'delet.php?li=$query_executed[login_id]'>DELET</td>
                        </tr>";
          
                    }
                }
                else
                {
                    echo "Error in execution!";
                }
                
            ?>
        </table>
    </section>
    <button class="cn"><a href="add_admin.php"> Back </a></button>  
</body>
 
</html>