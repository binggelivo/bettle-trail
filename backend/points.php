<?php 
echo "neue: " . $_POST["points"];
echo "<br>";
echo "vorher: " . htmlspecialchars($_SESSION["points"]);
if ($_POST["points"]){
    $_SESSION["points"] += $_POST["points"];
}
echo "<br>";
echo "jetzt: " . htmlspecialchars($_SESSION["points"]);
?>