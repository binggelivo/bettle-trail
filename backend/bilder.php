<?php
session_start();

$servername = "localhost";
$username = "binggeli_bettle-tail";
$password = "eQQp2Ats8fPcdzJqCXj8";
$dbname = "binggeli_bettle-trail";

$time = time();



if (isset($_POST["art"])) {
    if ($_POST["art"] == "onboarding") {

        if ($_POST["privat"]){
            $_SESSION["privat"] = 1;
        }else{
            $_SESSION["privat"] = 0;
        }

        if (($_FILES['photo']['name'] != "")) {
            $target_dir = "../uploads/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['photo']['tmp_name'];
            $path_filename_ext = $target_dir . $time . "." . $ext;

            echo "Bilder";
            echo "<br><br>";
            echo "<br><br>";
            $img = imagescale( $temp_name, 600, -1, IMG_BICUBIC);
            move_uploaded_file($img, $target_dir . $time . "-." . $ext);
            echo "<br><br>";
            print_r(imagewebp($temp_name, 600, -1, $target_dir . $time . ".webp", -1));

            if (file_exists($path_filename_ext)) {
            } else {
                //move_uploaded_file($temp_name, $path_filename_ext);
                imagewebp(imagescale( $temp_name, 600, -1, IMG_BICUBIC), $target_dir . $time . ".webp", 100);
            }
        } else {
            $path_filename_ext = "";
        }
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO user (user_startpic, user_name, user_private, user_start)
        VALUES ( '" . $target_dir . $time . ".webp" . "', '" . $_POST["groupname"] . "', " . $_SESSION["privat"] . ", " . $time . ");";

        /*if ($conn->query($sql) === TRUE) {
            $id = $conn->insert_id;
            $_SESSION["groupid"] = $id;
            $_SESSION["name"] = $_POST["groupname"];
            $_SESSION["posten"] = 0;
            $_SESSION["points"] = 0;
            $_SESSION["starttime"] = $time;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();*/
    }

    if ($_POST["art"] == "zsupload") {
        if (($_FILES['photo']['name'] != "")) {
            $target_dir = "../uploads/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['photo']['tmp_name'];
            $path_filename_ext = $target_dir . $time . "." . $ext;

            if (file_exists($path_filename_ext)) {
            } else {
                move_uploaded_file($temp_name, $path_filename_ext);
                imagewebp(imagescale( $temp_name, 600, -1 ), $target_dir . $time . ".webp", -1);
            }
        } else {
            $path_filename_ext = "";
        }
        $conn = new mysqli($servername, $username, $password, $dbname);
        if (isset($_SESSION["groupid"])){
            $sql = "UPDATE user SET user_zspic = '" . $target_dir . $time . ".webp" . "', user_email = '" . $_POST["email"] . "' WHERE user_id=" . $_SESSION["groupid"];
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if (isset($_SESSION["privat"])){
        }else{
            if ($_POST["privat"]){
                $_SESSION["privat"] = 1;
            }else{
                $_SESSION["privat"] = 0;
            }
        }

        $sql = "INSERT INTO zsgewinn (zsgewinn_email, zsgewinn_foto, zsgewinn_privat) VALUES ('" . $_POST["email"] . "', '" . $target_dir . $time . ".webp" . "', '" . $_SESSION["privat"] . "')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $_SESSION["email"] = $_POST["email"];
    }

    if ($_POST["art"] == "formend"){
        if (($_FILES['photo']['name'] != "")) {
            $target_dir = "../uploads/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['photo']['tmp_name'];
            $path_filename_ext = $target_dir . $time . "." . $ext;

            if (file_exists($path_filename_ext)) {
            } else {
                move_uploaded_file($temp_name, $path_filename_ext);
                imagewebp(imagescale( $temp_name, 600, -1 ), $target_dir . $time . ".webp", -1);
            }
        } else {
            $path_filename_ext = "";
        }
        $conn = new mysqli($servername, $username, $password, $dbname);
        if (isset($_SESSION["groupid"])){
            $sql = "UPDATE user SET user_endpic = '" . $target_dir . $time . ".webp" . "', user_points = '" . $_SESSION["points"] . "', user_emd = '" . $time . "' WHERE user_id=" . $_SESSION["groupid"];
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if (isset($_SESSION["privat"])){
        }else{
            if ($_POST["privat"]){
                $_SESSION["privat"] = 1;
            }else{
                $_SESSION["privat"] = 0;
            }
        }
        if (isset($_SESSION["email"])){
        }else{
            $_SESSION["email"] = $_POST["email"];
        }

        $sql = "INSERT INTO endform (endform_email, endform_foto, endform_losung, endform_privat) VALUES ('" . $_SESSION["email"] . "', '" . $target_dir . $time . ".webp" . "', '" . $_SESSION["goldstuck"] . "', '" . $_SESSION["privat"] . "')";
        if ($conn->query($sql) === TRUE) {
            session_reset();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
