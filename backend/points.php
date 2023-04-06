<?php 
if ($_POST["points"]){
    $_SESSION["points"] = $_SESSION["points"] + $_POST["points"];
}
?>