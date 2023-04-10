<?php
include 'header.php';
?>
    <div class="container strech margin-b5">
        <div class="block100 block beige rounded">
            <h1>Zwischen den Pösten</h1>
            <p>Du bis nicht bei einem Posten. Weis du wohin?</p>
            <?php 
                echo "<p>Auf zu Posten " . htmlspecialchars($_SESSION["posten"]) . "</p>";
                echo "<p>" . htmlspecialchars($_SESSION["points"]) . "</p>"
            ?>
            <button class="button accordion" points="30">Hast du dich verlaufen <rot>plus 30 Minuten</rot></button>
            <div class="navigator">

            </div>
        </div>
    </div>
    
<?php
include 'footer.php';
?>