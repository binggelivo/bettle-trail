<?php
include 'header.php';

$posten = 5;
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 5</h2>
    <p>Hier rollt der (Fiesel)-Ball<br><br>
      Nimm die vorbereitete Konstruktion in die Hand und lass die
      Fieselbälle rollen bzw. stoppen. Normalerweise haben wir Spieler einen
      Stock in der Hand. Konstruktionstechnisch etwas schwierig dies so
      zu machen und darum haben wir eine Alternative gebaut. Aber der
      rote Fieselball ist jeweils unser Spielball auf dem Spielfeld und gewisse
      Geschicklichkeit braucht es auch für das sogenannte Stickhandling
      (Stockhandhabung) bei unserem Sport.<br><br>
      Wie Du sehen kannst, hat es zwei Sichtfenster. Es gibt drei Bälle. Rolle
      jeweils einen Ball in das Sichtfenster und schau dir das Symbol darauf
      an. Pro Ball hat es drei Symbole und eines ist ein Hinweis für den
      nächsten Posten. Übrigens, um den Ball zu drehen, hat es auf der Seite
      eine kleine Öffnung. Hast Du die drei passenden Symbole gefunden?
      Dann ist ja alles klar, wo der nächste Posten sein wird.
    </p>
    <br><br>
    <div class="accordioncontainer">
      <button class="accordion" points="5">Tipp 1 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Ein Symbol ist ein Dach </p>
      </div>

      <button class="accordion" points="5">Tipp 2 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Ein Symbol ist ein Turm</p>
      </div>
      <button class="accordion" points="5">Tipp 3 - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 5 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Ein Symbol ist eine Glocke</p>
      </div>
      <button class="accordion" points="30">Lösung - <?php if (isset($_SESSION["groupid"])) { ?><rot>plus 30 Minuten</rot><?php } ?></button>
      <div class="panel">
        <p>Glockenturm (steige dort die Treppe zur Kirche hoch)</p>
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
    <img src="img/shc.webp" alt="Logo SHC Bettlach" class="vlogo"><br>
    <h1>Strassenhockeyclub Bettlach</h1>
    <p>Der SHC Bettlach wurde am 21. Januar 1993 im Restaurant Marti in
      Bettlach gegründet und feiert in diesem Jahr bereits sein 30-jähriges
      Jubiläum. Angefangen mit einem aktiven Team sind es mittlerweile
      fünf aktive Teams sowie vier Junioren Mannschaften von U18 bis U9.
      Darauf sind wir sehr stolz und es hat noch Platz für weitere Spielende.
      Übrigens, auch Girls und Damen können bei uns Streethockey spielen.
      Ein wichtiger Meilenstein war die Eröffnung unserer neuen Spielstätte
      im Neufeld im September 2014. Vorher war die Heimat des
      Strassenhockeyclubs das Schulhaus Einschlag – genau dort warst Du
      vorhin auch schon.<br><br>
      Unsere Saison dauert grundsätzlich vom September bis in den Mai –
      ähnlich wie im Eishockey. Auch die Ausrüstung ist an das Eishockey
      angelehnt. Ein grosser Unterschied ist, dass wir draussen trainieren/
      spielen und mit Turnschuhen auf dem Teer Platz unterwegs sind.
      Darum kommt immer mal der Spruch: «Die Giele trainiere bi jedem
      Wetter».<br><br>
      Wäre unser Sport auch was für Dich? Dann melde dich doch bei uns!</p>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/shc/1.webp" alt="Strassenhockeyclub Bettlach beim Training">
      </div>
      <div class="mySlides fade">
        <img src="img/shc/2.webp" alt="Strassenhockeyclub Bettlach Trainings und Speilplatz">
      </div>
      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    <br>
    <a href="https://shcbettlach.ch/events/bettletrail" class="button">Website</a>
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