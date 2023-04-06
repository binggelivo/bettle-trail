<?php
include 'header.php';
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 3</h2>
    <p>Spieglein, Spieglein, an der Wand, gibst du mir den Hinweis auf den
      nächsten Stand?<br><br>
      Nutze alle Gegenstände in der Box:
    <ol>
      <li>Puzzleteile mit Plan auf Rückseite</li>
      <li>2 Plexiglasscheiben</li>
      <li>ein Spiegel</li>
    </ol>
    </p>
    <br><br>
    <div class="accordioncontainer">
      <button class="accordion">Tipp 1 - <rot>minus 20 Punkte</rot></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>

      <button class="accordion">Tipp 2 - <rot>minus 20 Punkte</rot></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>

      <button class="accordion">Tipp 3 - <rot>minus 20 Punkte</rot></button>
      <div class="panel">
        <p>Lorem ipsum...</p>
      </div>
      <button class="accordion">Lösung - <rot>keine Punkte</rot></button>
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
    <img src="img/ogv.webp" class="vlogo"><br>
    <h1>Obst- und Gartenbauverein</h1>
    <p>Herzlich willkommen beim OGV Bettlach!<br>
OGV, das steht für Obst- und Gartenbauverein und dieses Jahr dürfen
wir mit unseren 83 Mitgliedern unser 90-jähriges Bestehen feiern.<br>
Wir sind hauptsächlich draussen in den Gärten unterwegs und
kümmern uns mit viel Freude um Bäume, Sträucher und andere
Pflanzen. Den Bäumen schenken wir aber in unseren Kursen
besonders viel Aufmerksamkeit. Hier lernen wir, Bäume zu pflanzen,
führen Winter- und Sommerschnitte bei jungen und älteren Bäumen
durch oder „veredeln“ die Obstbäume. Mit dem Veredeln schaffen wir
es, dass auf einem Apfelbaum mehrere Apfelsorten wachsen können.
Oder, dass auf einem Quittenbaum plötzlich auch Birnen wachsen.
Oder, dass auf einem japanischen Kirschbaum, der eigentlich keine
Früchte trägt, plötzlich Kirschen wachsen. Cool, oder?<br>
Dies und viele andere Dinge lernst du bei uns... und wenn wir dein
Interesse geweckt haben, dann Besuch uns einmal bei einem Kurs.
Und vielleicht hast du ja auch Lust, unserem Verein beizutreten, denn
wir sind immer auf der Suche nach neuen, motivierten Mitgliedern. :-)</p>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/obst/1.webp" alt="Obst- und Gartenbauverein Bettlach beim Brätteln">
      </div>
      <div class="mySlides fade">
        <img src="img/obst/2.webp" alt="Obst- und Gartenbauverein Bettlach Bienenhotel">
      </div>
      <div class="mySlides fade">
        <img src="img/obst/3.webp" alt="Obst- und Gartenbauverein Bettlach beim Obstbäume schneiden">
      </div>
      <div class="mySlides fade">
        <img src="img/obst/4.webp" alt="Obst- und Gartenbauverein Bettlach beim Obstbäume schneiden 2">
      </div>
      <div class="mySlides fade">
        <img src="img/obst/5.webp" alt="Obst- und Gartenbauverein Bettlach beim veredeln">
      </div>
      <div class="mySlides fade">
        <img src="img/obst/6.webp" alt="Obst- und Gartenbauverein Bettlach beim veredeln 2">
      </div>
      <div class="mySlides fade">
        <img src="img/obst/7.webp" alt="Obst- und Gartenbauverein Bettlach beim veredeln 3">
      </div>
      <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
      <button class="next" onclick="plusSlides(1)">&#10095;</button>
    </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
    </div>
    <br>
    <a href="https://ogv-bettlach.jimdofree.com/" class="button">Website</a>
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