<h1>ADMIN DETAILS</h1>
<form method="POST">
<?php
	         include 'config.php';
            //$query = "SELECT * FROM user " ; 
            $query = "SELECT `login_id`, `email`, `name`, `user_id` FROM `login` WHERE 1";
            $res = mysqli_query($conn,$query);
            $all_property = array();

            echo '<table class="data-table"><thead>';
            while ($property = mysqli_fetch_field($res)) {
                echo '<th>' . $property->name . '</th>'; 
                array_push($all_property, $property->name);
            }
            echo '<th>Select</th>';
            echo '</thead>';
            
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td>' . $row[$item] . '</td>';
                }
                //echo '<td><input type="checkbox" name="admin[]" value="'.$row['login_id'].'"/> &nbsp;</td>';
                echo'<td><a href ='delet.php?rn=$result[user_id]'>delete</td>'
                echo '</tr>';
            }
            echo "</table>";
?>
            <input type="submit" class="cn" value="Delete"></form>


<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Admin Details</title>
    <link rel="stylesheet" type="text/css" href="style_content.css">
</head>
 
<body>
<button class="cn"><a href="add_admin.php"> Back </a></button>  
</body>
 
</html>