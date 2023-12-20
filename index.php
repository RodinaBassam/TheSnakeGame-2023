<?php
$UserName=$_REQUEST['name'];
if(isset($_POST['name'])){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "thegame";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO scores VALUES ('$id','$name','$score')";
       

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }

    $conn->close();
}
?>


