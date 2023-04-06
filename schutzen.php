<?php
include 'header.php';
?>
    <div class="container strech margin-b5">
        <div class="block50 block beige rounded">
            <h2>Posten 1</h2>
            <p>Ziele durch die 4 Löcher in der Box und finde heraus auf welchen
Ringwert (0-9) der Schiessscheibe das Fadenkreuz zeigt. Siehe Dir
dazu die Skizzen für das richtige Zielen an.<br>
Die 4 Ringwerte werden Dich in aufsteigender Zahlenfolge an den
nächsten Posten führen:<br><br>
Ringwert 1 = Kirche<br>
Ringwert 2 = Brunnen<br>
Ringwert 3 = zwischen<br>
Ringwert 4 = hinter<br>
Ringwert 5 = in<br>
Ringwert 6 = neben<br>
Ringwert 7 = Schulhaus<br>
Ringwert 8 = Gemeindehaus<br>
Ringwert 9 = Treppe<br>
            </p>
            <br>
            <img src="img/schutze/zielen.webp" alt="Wie ziehlt man um zum Ziel zu kommen">
            <img src="img/schutze/scheibe.webp" alt="Wie liest man die Zielscheibe">
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
        <img src="img/schutzen.webp" alt="Logo Schützen Bettlach" class="vlogo"><br>
            <h1>Schützengesellschaft Bettlach</h1>
            <p>Die Schützengesellschaft Bettlach wurde 1833 gegründet. Bei uns
kann man mit dem Gewehr auf einer Distanz von 300m und auch
Pistole in den Distanzen 25m und 50m schiessen. Unsere Trainings
finden jeweils am Donnerstag und Freitag im Schützenhaus Lauacher
in Bettlach statt.<br><br>
Beim Schiesssport ist Präzision und Konzentration das A und O.
Neben dem Schiessen ist uns die Kameradschaft und somit auch der
gesellige Teil sehr wichtig.<br><br>
Wir führen jedes Jahr eine Vereinsmeisterschaft durch und nehmen
auch an regionalen und nationalen Schiesswettkämpfen teil.
Ausserdem führen wir jedes Jahr einen Jungschützenkurs durch.
Schau doch mal unverbindlich in einem Training vorbei, unsere
Jahresprogramme findest Du auf www.bettlach.ch. Wir würden uns
freuen Dich begrüssen zu dürfen.</p>
            <div class="slideshow-container">
              <div class="mySlides fade">
                <img src="img/schutze/1.webp" alt="Schützen Bettlach Schützen im Schützenstand">
              </div>
              <div class="mySlides fade">
                <img src="img/schutze/2.webp" alt="Schützen Bettlach Scheiben vom Schützenstand">
              </div>
              <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
              <button class="next" onclick="plusSlides(1)">&#10095;</button>
            </div>
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
            </div>
            <br>
            <a href="http://www.bettlach.ch/site.html?sid=125&OID=268" class="button">Mehr Infos & Jahresprogramm</a>
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
                if(n > slides.length) {
                  slideIndex = 1
                }
                if(n < 1) {
                  slideIndex = slides.length
                }
                for(i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";
                }
                for(i = 0; i < dots.length; i++) {
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