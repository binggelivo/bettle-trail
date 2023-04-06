<?php
include 'header.php';
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 9</h2>
    <p>Beantworte die untenstehenden Fragen und erhalte die Lösungszahl.
      Mit dieser öffnest du unsere Box, in welcher der nächste Hinweis
      versteckt ist.<br><br>
      <b>Frage 1:</b><br>
      An wie vielen weiteren Anlässen (ausserhalb der Fasnacht) haben sich
      die Böögianer engagiert?<br><br>
      <b>Frage 2:</b><br>
      Wie viele Gründungsmitglieder zählt unser Verein?
    </p>
    <table>
      <tr>
        <td>a. 4</td>
        <td>Ziffer für die Lösungszahl = 2</td>
      </tr>
      <tr>
        <td>b. 2</td>
        <td>Ziffer für die Lösungszahl = 5</td>
      </tr>
      <tr>
        <td>c. 5</td>
        <td>Ziffer für die Lösungszahl = 3</td>
      </tr>
      <tr>
        <td>d. 3</td>
        <td>Ziffer für die Lösungszahl = 0</td>
      </tr>
    </table><br>
    <p><b>Frage 3:</b><br>
      Was lieben alle Böögianer?</p>
    <table>
      <tr>
        <td>a. Fasnachtswagen</td>
        <td>Ziffer für die Lösungszahl = 4</td>
      </tr>
      <tr>
        <td>b. Feuer und gutes Essen</td>
        <td>Ziffer für die Lösungszahl = 1</td>
      </tr>
      <tr>
        <td>c. gute Musik und Tanzen</td>
        <td>Ziffer für die Lösungszahl = 9</td>
      </tr>
    </table><br>
    <p><b>Frage 4:</b><br>
      Wo wurde der erste Böög gebaut?</p>
    <table>
      <tr>
        <td>a. in einer Garage</td>
        <td>Ziffer für die Lösungszahl = 7</td>
      </tr>
      <tr>
        <td>b. in einer grossen Halle</td>
        <td>Ziffer für die Lösungszahl = 6</td>
      </tr>
      <tr>
        <td>c. auf einem Parkplatz</td>
        <td>Ziffer für die Lösungszahl = 8</td>
      </tr>
    </table>
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
    <img src="img/boogianer.webp" alt="Logo Böögianer" class="vlogo"><br>
    <h1>Böögianer Bettlach</h1>
    <p>Die Böögianer sind eine Fasnachtszunft, welche den Böög bauen und
      das Böögverbrennen durchführen. Gegründet wurden die Böögianer
      im Jahr 2017 von den 3 Gründungsmitgliedern. Der Gründungsort war
      die Garage eines der 3 Gründungsmitglieder, in welcher dann auch der
      erste Böög gebaut wurde. Der Erfolg war gross und der Verein fing an
      zu wachsen und schon bald durften wir in einer grösseren Halle den
      Böög bauen. Beim Böögbau wurde in Zusammenarbeit mit einem Profi
      auch professionelle Pyrotechnik verbaut.<br><br>
      Dank dem Mitgliederwachstum konnte sich der Verein an weiteren
      Anlässen wie dem Zähnteschürfest und dem Silvesterapéro
      engagieren.<br><br>
      Aktuell konzentriert sich der Verein auf das Wesentliche und legt
      den Fokus wieder mehr auf den Böögbau, die Chesslette und das
      Böögverbrennen. Was aber nicht heisst, dass es während der
      Sommerzeit keine vereinsinternen Anlässe gibt. Alle Böögianer lieben
      das Feuer sowie gutes Essen und dies lässt sich perfekt mit einem
      gemütlichen Grillabend/Grilltag kombinieren.<br><br>
      Unser Motto:&emsp;&emsp;Vom Dorf, fürs Dorf!</p>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/boogianer/1.webp" alt="Böögianer Zug Böög">
      </div>
      <div class="mySlides fade">
        <img src="img/boogianer/2.webp" alt="Böögianer Tod Böög">
      </div>
      <div class="mySlides fade">
        <img src="img/boogianer/3.webp" alt="Böögianer Mount Rushmore Böög">
      </div>
      <div class="mySlides fade">
        <img src="img/boogianer/4.webp" alt="Böögianer Fahrschule Böög">
      </div>
      <div class="mySlides fade">
        <img src="img/boogianer/5.webp" alt="Böögianer Brendender Böög">
      </div>
      <div class="mySlides fade">
        <img src="img/boogianer/6.webp" alt="Böögianer Schweizerkreuz Böög">
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
    </div>
    <br>
    <a href="http://www.bettlach.ch/site.html?sid=125&OID=360" class="button">Mehr Infos</a>
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