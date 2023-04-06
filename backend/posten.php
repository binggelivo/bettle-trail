<?php 
if ($_POST["posten"]){
    if (($_SESSION["posten"] + 1) == $_POST["posten"]){
        $_SESSION["posten"] = $_POST["posten"];
    }
}
?>