<?php
include 'header.php';
?>
    <div class="container strech margin-b5">
        <div class="block50 block beige rounded">
            <h2>Posten 10</h2>
            <p>Das Alphorn ist ein Naturtoninstrument ohne Grifflöcher, Ventile,
Klappen etc.<br>
Indem Luft durch die Lippen ins Mundstück gepresst wird, geraten
diese in Schwingungen und ein Ton entsteht.<br>
Die Kunst des Alphornspiels liegt in der schnellen und präzisen
Veränderung der Lippenspannung.
            </p>
            <br>
            <img src="img/alphorn/noten.webp" alt="Decodier Pyramiede für Morsecode">
            <p>Früher wurden Tannen verwendet, welche an einem steilen Hang
krumm gewachsen sind, siehe Foto.<br>
Die Bearbeitung erfolgte von Hand und benötigte ca. 80
Arbeitsstunden.<br>
Heute werden zum Teil moderne CNC-Maschinen verwendet.
Ein fertiges Alphorn wiegt ca. 4 kg.<br>
Etwa 55 kg Holz werden dazu benötigt.<br>
Das vorwiegend in der Schweiz geblasene Alphorn hat eine Länge von
3.47 Meter und ist in Fis/Ges gestimmt.</p>
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
            <img src="img/alphorn.webp" class="vlogo"><br>
            <h1>Alphorngruppe Echo vom Jura</h1>
            <p><b>Willkommen bei der Alphorngruppe „Echo vom Jura“</b><br>
Die Alphorngruppe „Echo vom Jura“ besteht seit 2010.<br>
Sie setzt sich aus engagierten Alphornbläserinnen und Alphornbläsern
der näheren und weiteren Umgebung zusammen.<br>
Nebst in der Gruppenformation treten wir auch in Solo-, Duo- oder
Trio-Besetzung auf.<br>
Gerne erfreuen wir unsere Zuhörer an den unterschiedlichsten
Anlässen mit gepflegter Alphornmusik. Sei es an einem Geburtstag,
Hochzeit, Firmenfest, Jodlersonntag oder an einem öffentlichen
Grossanlass.<br>
An Kursen vermitteln wir Interessierten die Schönheit und Eigenheiten
dieses wunderbaren Instrumentes mit dem unvergesslichen Naturton.<br>
<b>Alphorn ist ideal für Erwachsene mit/ohne Musikerfahrung und
Kinder ab 10 J.</b>
<ul>
  <li>wenig Töne, keine Notenkenntnisse erforderlich</li>
  <li>unterstützt die korrekte Atmung und du musizierst oft in der Natur</li>
  <li>kann mit Schalldämpfer problemlos in der Wohnung geblasen werden!</li>
</ul>
<b>Melde dich für eine kostenlose Schnupperstunde bei</b><br>
Ruedi Bauriedl 032 645 27 09</p>
            <div class="slideshow-container">
              <div class="mySlides fade">
                <img src="img/alphorn/1.webp" alt="Alphorngruppe Echo vom Jura spielt">
              </div>
              <div class="mySlides fade">
                <img src="img/alphorn/2.webp" alt="Kind spielt auf dem Alphorn">
              </div>
              <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
              <button class="next" onclick="plusSlides(1)">&#10095;</button>
            </div>
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
            </div>
            <br>
            <a href="https://alphorn4u.ch" class="button">Website</a>
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