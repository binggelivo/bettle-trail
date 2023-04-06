<?php
session_start();

$servername = "localhost";
$username = "binggeli_bettle-tail";
$password = "eQQp2Ats8fPcdzJqCXj8";
$dbname = "binggeli_bettle-trail";



if (isset($_POST["art"])) {
    if ($_POST["art"] == "onboarding") {
        if (($_FILES['photo']['name'] != "")) {
            $target_dir = "../uploads/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['photo']['tmp_name'];
            $startime = time();
            $path_filename_ext = $target_dir . $startime . "." . $ext;

            if (file_exists($path_filename_ext)) {
            } else {
                move_uploaded_file($temp_name, $path_filename_ext);
            }
        } else {
            $path_filename_ext = "";
        }
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO user (user_startpic, user_name, user_private, user_start)
        VALUES ( '" . $path_filename_ext . "', '" . $_POST["groupname"] . "', " . $_POST["privat"] . ", " . $startime . ");";

        if ($conn->query($sql) === TRUE) {
            $id = $conn->insert_id;
            $_SESSION["groupid"] = $id;
            $_SESSION["name"] = $_POST["groupname"];
            $_SESSION["posten"] = 1;
            $_SESSION["points"] = 0;
            $_SESSION["starttime"] = $startime;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    if ($_POST["art"] == "zsupload") {
        if (($_FILES['photo']['name'] != "")) {
            $target_dir = "../uploads/";
            $file = $_FILES['photo']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['photo']['tmp_name'];
            $startime = time();
            $path_filename_ext = $target_dir . $startime . "." . $ext;

            if (file_exists($path_filename_ext)) {
            } else {
                move_uploaded_file($temp_name, $path_filename_ext);
            }
        } else {
            $path_filename_ext = "";
        }
        $conn = new mysqli($servername, $username, $password, $dbname);
        if (isset($_SESSION["groupid"])){
            $sql = "UPDATE user SET user_zspic = '" . $path_filename_ext . "', user_email = '" . $_POST["email"] . "' WHERE user_id=" . $_SESSION["groupid"];
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $sql = "INSERT INTO zsgewinn (zsgewinn_email, zsgewinn_foto) VALUES ('" . $_POST["email"] . "', '" . $path_filename_ext . "')";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
