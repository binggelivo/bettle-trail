<?php 
echo $_POST["points"];
echo "<br>";
echo htmlspecialchars($_SESSION["points"]);
if ($_POST["points"]){
    $_SESSION["points"] = $_SESSION["points"] + $_POST["points"];
}
echo "<br>";
echo htmlspecialchars($_SESSION["points"]);
?>