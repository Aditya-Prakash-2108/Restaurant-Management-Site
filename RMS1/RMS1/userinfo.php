<!DOCTYPE html>
<html>
  
<head>
    <title>bruuh</title>
</head>
  
<body>
    <center>

<?php
        $conn = mysqli_connect("localhost", "root", "", "rms1");
          
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $first_name = $_REQUEST['firstname'];
        $last_name = $_REQUEST['lastname'];
        $Country = $_REQUEST['Country'];
        $Subject = $_REQUEST['Subject'];
          
        $sql = "INSERT INTO userinfodata VALUES ('$first_name','$last_name','$Country','$Subject')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored successfully</h3>"; 

  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$Country\n $Subject");
        } else{
            echo "ERROR: 404 Cant resolve $sql. " 
                . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        ?>
        </center>
    </body>
    </html>