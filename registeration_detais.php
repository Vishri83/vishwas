<h1>REGISTERATION DETAILS</h1>
<?php
	         include 'config.php';
            //$query = "SELECT * FROM user " ; 
            $query = "SELECT `booking_id`, `name`, `email`, `event_name`, `city`, `venue`, `date`, `phone`, `attendees`, `time`, `additional_requirements`, `user_id` FROM `booking` WHERE 1";
            $res = mysqli_query($conn,$query);
            $all_property = array();

            echo '<table class="data-table"><thead>';
            while ($property = mysqli_fetch_field($res)) {
                echo '<th>' . $property->name . '</th>'; 
                array_push($all_property, $property->name);
            }
            echo '</thead>';
            
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                foreach ($all_property as $item) {
                    echo '<td>' . $row[$item] . '</td>';
                }
                echo '</tr>';
            }
            echo "</table>";

?>


<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Registeration Details</title>
    <link rel="stylesheet" type="text/css" href="style_content.css">
</head>
 
<body>
<button class="cn"><a href="add_admin.php"> Back </a></button>  
</body>
 
</html>