<?php
include 'header.php';

$posten = 2;
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 2</h2>
    <p>Herzlich willkommen am Posten des Turnvereins Bettlach!<br><br>
      Du stehst hier vor einem grossen Memory Spiel. Weisst Du noch, wie
      das Memory Spiel funktioniert?<br>
      Deine Aufgabe ist es, die Hinweise zum nächsten Posten zu finden,
      damit Du weisst, in welche Richtung es weitergeht. Die Hinweise
      befinden sich auf der Rückseite der drehbaren Felder. Beim Loslassen
      drehen sich die Felder wieder zurück in die Ausgangsposition.<br><br>
      <b>Spielregeln:</b>
    <ul>
      <li>Pro Spielzug darfst Du jeweils zwei Felder umdrehen</li>
      <li>Suche die zusammenpassenden Felder und merke Dir die Hinweise</li>
      <li>Wenn Du alle Hinweise gefunden hast, sollte Dir klar sein in welche Richtung Du nun gehen musst</li>
    </ul><br>
    Viel Glück!</p>
    <br><br>
    <!--<div class="accordioncontainer">
      <button class="accordion" points="5">Tipp 1 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>

      <button class="accordion" points="5">Tipp 2 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>

      <button class="accordion" points="5">Tipp 3 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>
      <button class="accordion" points="30">Lösung - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 30 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
      </script>
    </div>-->
  </div>
  <div class="block50 block beige rounded">
    <img src="img/turnverein.webp" alt="Logo Turnverein Bettlach" class="vlogo"><br>
    <h1>Turnverein Bettlach</h1>
    <p>Der TV Bettlach ist mit über 250 Erwachsenen und über 150
      Jugendlichen der grösste Verein im Dorf und bildet eine wichtige
      Säule in der Freizeitbeschäftigung für Jung und Alt, bei der neben dem
      Turnerischen, auch Kameradschaft und Spass nicht zu kurz kommen.
      In diesem Jahr feiert der TV Bettlach sein 125-jähriges Bestehen
      sowie das 20-jährige Jubiläum seit dem Zusammenschluss der drei
      Turnvereine (Turnverein / Damenturnverein / Frauenturnverein)<br>
      Das Sportangebot des TV Bettlach ist sehr umfangreich. Mit 8
      Jugend-, 4 Wettkampf- sowie 5 polysportiven Fit- & Fun-Abteilungen
      finden Kinder, Jugendliche und Erwachsene ein abwechslungsreiches
      Programm. Turnerische Bewegung, in all ihren Facetten zwischen Spiel
      und Leistung, stellt neben einer sinnvollen Freizeitbeschäftigung auch
      einen gesundheitsfördernden und gemeinschaftlichen Beitrag dar.<br><br>
      Hesch Inträssä? De chum doch mou cho ineluege…</p>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/tvb/1.webp" alt="Turnverein Bettlach Leitungsteam">
      </div>
      <div class="mySlides fade">
        <img src="img/tvb/2.webp" alt="Turnverein Bettlach Aerobic Gruppe">
      </div>
      <div class="mySlides fade">
        <img src="img/tvb/3.webp" alt="Turnverein Bettlach Gruppenbild">
      </div>
      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <br>
    <a href="http://www.turnverein-bettlach.ch/" class="button">Website</a>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
  </div>
</div>

<?php
include 'footer.php';
?>