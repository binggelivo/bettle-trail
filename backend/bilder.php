<?php 
session_start();

$servername = "localhost";
$username = "binggeli_bettle-tail";
$password = "eQQp2Ats8fPcdzJqCXj8";
$dbname = "binggeli_bettle-trail";



if (isset($_POST["art"])){
    if ($_POST["art"] == "onboarding"){
        print_r(basename($_FILES["photo"]["name"]));
        echo "<br><br>";
        print_r(strtolower(pathinfo(basename($_FILES["photo"]["name"]),PATHINFO_EXTENSION)));
        echo "<br><br>";
        /*if (move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . microtime())){

        }*/
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO user (user_startpic, user_name, user_private)
        VALUES ( '" . "', '" . $_POST["groupname"] . "', " . $_POST["privat"] . ");";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
}
?>