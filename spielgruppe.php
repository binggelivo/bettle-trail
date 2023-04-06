<?php
include 'header.php';
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 6</h2>
    <p>Finde mit den richtigen Antworten den Weg zum nächsten Posten.<br><br>
      <b>Frage 1</b><br>
      Greife in die erste Box. Was kannst du ertasten?<br>
      a) Tannenzapfen ➪ Richtung Berg<br>
      b) Quitsche-Ente ➪ Richtung Aare<br><br>
      <b>Frage 2</b><br>
      Greife in die zweite Box. Was kannst du ertasten?<br>
      a) Holzstäbe ➪ Richtung Zähnteschür<br>
      b) Lego ➪ Richtung Feuerwehr<br><br>
      <b>Frage 3</b><br>
      Welches Tier steht für unsere Waldspielgruppe?<br>
      a) Pingu ➪ Richtung Gemeindehaus<br>
      b) Schnecke ➪ Richtung Dorfmuseum Adamhaus<br>
    </p>
    <br><br>
    <div class="accordioncontainer">
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
      <button class="accordion" points="30">Lösung - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 20 Minuten</rot><?php } ?></button>
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
    </div>
  </div>
  <div class="block50 block beige rounded">
    <img src="img/spielgruppe.webp" alt="Logo Spielgruppenverein Bettlach" class="vlogo"><br>
    <h1>Spielgruppenverein</h1>
    <p>Der Spielgruppenverein Bettlach stellt sich vor<br><br>
      Der Spielgruppenverein Bettlach stellt sich aus 9
      Vorstandsmitgliedern, einer Innenspielgruppe und einer
      Waldspielgruppe zusammen. In der Spielgruppe treffen sich pro
      Gruppe max. 8 Kinder ab 2 1/2 Jahren bis zum Kindergarteneintritt.
      In der Waldspielgruppe Robuzli wird eine Gruppe von max. 12 Kindern
      von einer Waldspielgruppenleiterin und einem/r Helfer/in betreut. Der
      Spielgruppenalltag richtet sich nach keinem Lehrplan. Zwei wichtige
      Grundsätze in der Spielgruppe lauten: „Hilf mir es selbst zu tun“
      (Maria Montessori) und „Selber schaffen, schafft Selbstvertauen“
      (Lucie Hillenberg). Zum Konzept der Spielgruppe gehört die enge
      Zusammenarbeit mit den Eltern.</p>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/spielgruppe/waldspielgruppe.webp" alt="Logo Waldspielgruppe Bettlach">
      </div>
      <div class="mySlides fade">
        <img src="img/spielgruppe/pingu.webp" alt="Logo Spielgruppe Pinguin Bettlach">
      </div>
      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    <br>
    <a href="https://spielgruppe-bettlach.ch/" class="button">Website</a><a href="https://spielgruppe-bettlach.ch/waldspielgruppe/" class="button">Waldspielgruppe</a>
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