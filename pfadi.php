<?php
include 'header.php';

$posten = 8;
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 8</h2>
    <p>Drücke den grossen roten Knopf. Findest du das Blinkende Licht?
      Kleiner Tipp das Licht ist hinter verschlossener Türe.<br><br>
      Lasse dich vom Licht anleiten in welche Richtung du weiter gehen
      musst. Hier jedoch eine kleine Hilfe:<br><br>
      Finde unser ____, in dem du über den ___________ gehst und Richtung
      ______ läufst. Vor der __________ geht es _________.
    </p>
    <br>
    <img src="img/pfadi/morse.webp" alt="Decodier Pyramiede für Morsecode">
    <br><br>
    <div class="accordioncontainer">
      <button class="accordion" points="5">Tipp 1 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Das Blinkende Licht gibt dir die Antwort in Morsecode. Kennst du das Morsealphabet? Jeder Buchstabe ist durch eine längere Pause getrennt und jedes Wort durch eine noch Längere Pause.
          <br><br>
          Nutze die Pyramiede. Alle abzweigungen die nach Links gehen sind Kurze Lichtsignale und alle abzweitungen sind Lange Lichtsignale.<br>
          Beginne oben bei der Pyramiede und folge den Lichtimpulse bis zu einer grösseren Pause und zu einem Buchstaben.</p>
      </div>

      <button class="accordion" points="5">Tipp 2 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Das erste Wort besteht aus 4 Buchstaben, das zweite aus 13, das dritte aus 6, das vierte aus 11 und das fünfte aus 6 Buchstaben.</p>
      </div>

      <button class="accordion" points="5">Tipp 3 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Der Widergegeben Morsecode: .-.. / --- / --. / --- // --.. / . -... / .-. / .- / ... / - / .-. / . / .. / ..-. / . -. // -.- / .. / .-. / -.-. / .... / . // -.. / --- / .-. / ..-. / ... / - / .-. / .- / ... / ... / . // -... / . / .-. / --. / .- / ..- / ..-.</p>
      </div>
      <button class="accordion" points="30">Lösung - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 30 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Der Lösungssatz ist: Finde unser <u>Logo</u>, in dem du über den <u>Zebrastreifen</u> gehst und Richtung <u>Kirche</u> läufst. Vor der <u>Dorfstrasse</u> geht es <u>bergauf</u>.</p>
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
    </div>
  </div>
  <div class="block50 block beige rounded">
    <img src="img/pfadi.webp" alt="Logo Pfadi Bettlach" class="vlogo"><br>
    <h1>Pfadi Bettlach</h1>
    <p>Willst du Jahrgangübergreifende Freundschaften schliessen?<br>
      Möchtest du draussen und drinnen spannende Abenteuer erleben?<br>
      Willst du Teil der grössten Jugendorganisation der Schweiz sein?<br><br>
      Dann bist du bei der Pfadi Bettlach genau richtig!<br><br>
      Seit über 65 Jahren sind wir ein fester Bestandteil des Bettlacher Dorf- und Vereinslebens. Mit permanent rund 50 Mitgliedern zählen wir zu den mittelgrossen Pfadiabteilungen im Kanton. Wir sind Teil der Pfadi Kanton Solothurn sowie der Pfadibewegung Schweiz. Allein hierzulande gibt es rund 550 lokale Pfadiabteilungen mit 50‘000 Pfadis.</p>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/pfadi/1.webp" alt="Pfadi Bettlach Sarasani im Bundeslager 2022">
      </div>
      <div class="mySlides fade">
        <img src="img/pfadi/2.webp" alt="Pfadi Bettlach Mushmelows über dem Feuer">
      </div>
      <div class="mySlides fade">
        <img src="img/pfadi/3.webp" alt="Pfadi Bettlach Wafeln auf Feuer">
      </div>
      <div class="mySlides fade">
        <img src="img/pfadi/4.webp" alt="Pfadi Bettlach Seilbahn">
      </div>
      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    <br>
    <a href="https://pfadibettlach.ch" class="button">Website</a><a href="https://pfadibettlach.ch/first" class="button">Mehr Infos</a>
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