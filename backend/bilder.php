<?php 
session_start();

$servername = "localhost";
$username = "binggeli_bettle-tail";
$password = "eQQp2Ats8fPcdzJqCXj8";
$dbname = "binggeli_bettle-trail";



if (isset($_POST["art"])){
    if ($_POST["art"] == "onboarding"){
        if (($_FILES['photo']['name']!="")){
        // Where the file is going to be stored
            $target_dir = "upload/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['photo']['tmp_name'];
            $path_filename_ext = $target_dir. time() .".".$ext;
            
        // Check if file already exists
        if (file_exists($path_filename_ext)) {
                echo "Sorry, file already exists.";
            }else{
                move_uploaded_file($temp_name,$path_filename_ext);
                echo "Congratulations! File Uploaded Successfully.";
            }
        }
        echo "<br><br>";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO user (user_startpic, user_name, user_private)
        VALUES ( '" . "', '" . $_POST["groupname"] . "', " . $_POST["privat"] . ");";
        
        /*if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }*/

        $conn->close();
    }
}
?>