<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender= $_POST['gender'];
    $passwor= $_POST['passwor'];
   
   
    $sql = "INSERT INTO `signupwest`.`signupwest` (`name`, `email`, `gender`, `passwor`, `dt`) VALUES ('$name','$email', '$gender', '$passwor', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for 
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>sign-up form</title>
        <link rel="stylesheet" href="sign.css">

    </head>
    <body>
    

        <form action="sign.php" method="post" >
            <div class="srutee">
                <h1>Sign-Up Form</h1>                          
                Name: <input type="text" required name="name" id="name" ><br>   
                <br>Email-id:<input type="email" required name="email" id="email" ><br>  
     <br><legend>Gender:<br>      
        <input type="radio" name="gender" id="gender" value="F">Female 
        <input type="radio" name="gender" id="gender" value="M">Male 
                  </legend><br>   
              Password:<input type="password" name="passwor" id="passwor" placeholder="Password">       
              <br><br>
            </div>
           <br>
            <input type="submit" class="bton" value="Submit">
            <input type="reset" class="bton" value="Reset">

        </form>

        <a href="file:///C:/xampp/htdocs/vvv/fgg/westbengal.html">
                <button>back</button>
            

    </div>
    </body>
    
</html>