<?php

session_start();

include("config.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $event = $_POST['event'];
  $city = $_POST['city'];
  $venue = $_POST['venue'];
  //$date = $_POST['date'];
  $phone = $_POST['phone'];
  $attendees = $_POST['Number'];
  $additional_requirements = $_POST['additional_requirements'];   
  
  
  $CName = $_POST['CName'];
  $cnumber = $_POST['cnumber'];
  $edate = $_POST['edate'];
  $cvv = $_POST['cvv'];

  $sql = "SELECT user_id FROM user WHERE email='$email'";
  if (mysqli_num_rows($result = mysqli_query($conn, $sql))>0 && $row = $result->fetch_row() ) {
  
  $user_id = $row[0];
  
  $sql_query1 = "INSERT INTO payment(`user_id`, `name_on_card`, `card_number`, `expiry_date`, `cvv`) VALUES ( '$user_id','$CName','$cnumber','$edate','$cvv') ";
  
  //mysqli_query($conn, $sql_query1) ; 
  if (mysqli_query($conn, $sql_query1)) {
    //<a href="http://localhost/new/index.php">index</a><
  
  }

       
  
  $sql_query2 = "INSERT INTO `booking` (`booking_id`, `name`, `email`, `event_name`, `city`, `venue`, `phone`, `attendees`,  `additional_requirements`, `user_id`) VALUES (NULL, '$name', '$email', '$event', '$city', '$venue',  '$phone', '$attendees' ,  '$additional_requirements', '$user_id');";
      
    
    if (mysqli_query($conn, $sql_query2)) {
      header("Location: http://localhost/tharun/payment_sucess.php");
      //die;
    } 
    
  } 
  else {
    echo "<script>alert('Woops! Email not Exists.')</script>";
}
}

  //header("Location: index.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      /*background-color:#04AA6D; 
      background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);*/
      background-image : url(srajan.JPG);
    }
    .background{
      border-radius:30px;
      overflow: hidden;
      align-items: stretch;
      
      box-shadow: 0 0 30px 10px #000000;
    }
    * {
      box-sizing: border-box;
    }

    input {
      width: 75%S;
    }

    .container {
      padding: 4px;
      margin:25px;
      /*background-color: white;*/
      display: flex;
      flex-flow: column;
      
    }

    label {
      font-weight: bolder;
    }

    input[type=text] {
      padding: 15px;
      margin: 5px 0 22px 0;
      display: block;
      border: none;
      background: #d8d8d8;
      -webkit-transition: 0.1s;
      border: 3px solid #000000;
      width: 30rem;
      margin-top: 6px;
    }

    input[type=text]:focus {
      background-color: #d8d8d8;
      outline: none;
      border: 3px solid #000000;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    div {
      padding: 10px 0;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .registerbtn {
      background-color: #8B0000;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .registerbtn:hover {
      opacity: 1;
    }

    .center {
      display: inline-block;
      text-align: left;
      margin: auto;
    }
  </style>
</head>

<body>
<div class="background">
  <form method="post">
    <div class="container">
      <center>
        <h1>EVENT BOOKING AND PAYMENT</h1>
      </center><br><br>

      <center>
        <h1> BOOKING DETAILS</h1>
      </center>

      <div class="center">
        <label> Name :</label>
        <input type="text" name="Name" placeholder="Name" size="20" required />
        <br>

        <label> Email :</label>
        <input type="text" name="Email" placeholder="eg.,abc@xyz.com" size="4" required />

        <br>
        <label> event name :</label>

        <select name="event" required>
          <option value="event" option>event</option>
          <option value="cricket">cricket</option>
          <option value="volyball">volyball</option>
          <option value="kabaddi">kabaddi</option>
          <option value=" Table Tennis"> Table Tennis</option>
          <option value="Chess">Chess</option>
          <option value="Carrom">Carrom</option>
          <option value="Weight Lift">Weight Lift</option>
          <option value="Power Lift">Power Lift</option>
          <option value="Short Pitch Cricket(men)">Short Pitch Cricket(men)</option>
          <option value="Basketball">Basketball</option>
          <option value="Volly Ball(men)">Volly Ball(men)</option>
          <option value="Throwball(women)">Throwball(women)</option>
          <option value="Treasure hunt">Treasure hunt</option>
          <option value="Tug Of War">Tug Of War</option>
          <option value="Treasure Hunt">Treasure Hunt</option>
        </select>

        <br><br><br>
        <label> city  :</label>
        <select name="city" required>
            <option value="city" option>city</option>
            <option value="banglore">banglore</option>



        </select>
        <br><br><br>

        <label> venue  :</label>
        <select name="venue" required>
            <option value="venue" option>venue</option>
            <option value="RNSIT">RNSIT</option>
        </select>
        <br>

        <br>

        <label><br> <br>Phone :</label>
        <input type="text" name="phone" placeholder="phone no." size="10" required />
        <br>

        <label><br> attendees :</label>
        <input type="text" name="Number" placeholder="max of 10" size="10"  required />
        <br>

        <label> additional requirements :</label>
        <input type="text" name="additional_requirements" placeholder="eg. , first aid , water , etc" size="10" required />
        <br><br><br><br>


        <center>
            <h1> PAYMENT DETAILS</h1>
          </center>
    

        <label> Name on card:</label>
        <input type="text" name="CName" placeholder="Name" size="20" required />
        <br>

        <label>card number :</label>
        <input type="text" name="cnumber" placeholder="card num" size="10" required />
        <br>

        <label><br> <br>expiry date :</label>
        <input type="text" name="edate" placeholder="yy/mm/dd" size="10" required />
        <br>

        <label><br> <br>cvv :</label>
        <input type="text" name="cvv" placeholder="cvv no" size="10" required />
        <br>




       <button type="submit" class="registerbtn"href="payment_sucess.php">Register</button>
        
      </div>
    </div>
  </form>
  </div>
</body>

</html>