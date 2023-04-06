    <div class="container footer">
        <div class="block block100 beige rounded">
            <h2>Umgesetzt durch unsere Vereine</h2>
            <div class="footer-logos">
                <div class="footer-logo"><a href="/schutzen"><img src="img/schutzen.webp" alt="Logo Schützen Bettlach"></a></div>
                <div class="footer-logo"><a href="/tvb"><img src="img/turnverein.webp" alt="Logo Turnverein Bettlach"></a></div>
                <div class="footer-logo"><a href="/obst"><img src="img/ogv.webp" alt="Logo Obst und Gartenbau Verein Bettlach"></a></div>
                <div class="footer-logo"><a href="/zs"><img src="img/zs.webp" alt="Logo Zänteschür Verein"></a></div>
                <div class="footer-logo"><a href="/shc"><img src="img/shc.webp" alt="Logo Street Hockey Club Bettlach"></a></div>
                <div class="footer-logo"><a href="/spielgruppe"><img src="img/spielgruppe.webp" alt="Logo Spielgruppenverein Bettlach"></a></div>
                <div class="footer-logo"><a href="/comitato"><img src="img/comitato.webp" alt="Logo Comitato Bettlach"></a></div>
                <div class="footer-logo"><a href="/pfadi"><img src="img/pfadi.webp" alt="Logo Pfadi Bettlach"></a></div>
                <div class="footer-logo"><a href="/boogianer"><img src="img/boogianer.webp" alt="Logo Böögianer Bettlach"></a></div>
                <div class="footer-logo"><a href="/alphorn"><img src="img/alphorn.webp" alt="Logo Alphorn Bettlach"></a></div>
            </div>
            <h2>Unterstützt durch</h2>
            <div class="unterstutzer-logos">
                <div class="unterstutzer-logo"><img src="img/gewerbverein.webp" alt="Logo Gewerbeverein Bettlach"></div>
                <div class="unterstutzer-logo"><img src="img/jkskb.webp" alt="Logo Jugend-, Kultur- und Sportkomission Bettlach"></div>
            </div>
        </div>
    </div>

</body>

<?php
if (isset($_SESSION["groupid"])){
?>

<script>
    document.getElementsByClassName("accordion").addEventListener("click", function(){
        var points = this.getAttribute("points");
        var data = new FormData();
        data.append('points', parseInt(points));

        var xmlhttp = new XMLHttpRequest()
        xmlhttp.open("POST", "backend/points.php");
        xmlhttp.send(data);
        this.getAttribute("points") = 0;
    });
</script>

<?php
}
?>

</html>