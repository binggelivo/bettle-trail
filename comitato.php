<?php
include 'header.php';
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 7</h2>
    <p><b>Gewürze aus der italienischen Küche</b><br>
      8 Dosen mit einigen typischen Gewürzen aus der italienischen Küche:
    <ul>
      <li>Petersilie</li>
      <li>Basilikum</li>
      <li>Rosmarin</li>
      <li>Salbei</li>
      <li>Oregano</li>
      <li>Fenchel</li>
      <li>Thymian</li>
      <li>Paprika</li>
    </ul>
    Schliesse die Augen und lass Deinen Geruchssinn «arbeiten».
    Welche der 8 Dosen enthält den Oregano?<br>
    Hast Du’s erraten? Bravo!<br><br>
    Auf zum nächsten Posten.<br>
    Folge dem Giglerbach (Wasser) / Wegkreuz beachten.<br>
    Viel Spass
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
    <img src="img/comitato.webp" alt="Logo Comitato" class="vlogo"><br>
    <h1>Comitato Genitori Bettlach</h1>
    <p>Der Comitato Genitori Bettlach wurde vor ca. 44 Jahren von
      italienischen Einwohnern in Bettlach gegründet.<br>
      Bestehend aus ca. 30 Mitgliedern verschiedenen Alters, widmen
      wir uns hauptsächlich dem Erhalt der italienischen Kultur innerhalb
      und ausserhalb des Vereins. Ebenso unterstützen wir sehr stark die
      wöchentlichen Kurse der Italienerschule in Bettlach, um unsere Kultur
      auch in Zukunft zu erhalten.<br>
      Unser Comitato setzt sich sehr stark dafür ein, dass die «Italianità»
      nach aussen gelebt und getragen wird. Sei es in Form von
      Festaktivitäten, Ausflügen u.v.m.<br>
      Die jährliche «Una giornata insieme» ist seit vielen Jahren ein fester
      Bestandteil der Fest- und Kulturagenda in Bettlach.<br>
      Interessiert Teil unseres Vereins zu werden?<br>
      Kontaktiere uns unter f.lavieri@besonet.ch oder besuche einer unserer
      nächsten Anlässe.<br>
      Wir heissen Dich schon jetzt herzlich willkommen und freuen uns auf
      Dich.</p>
    <br>
    <a href="http://www.bettlach.ch/site.html?sid=125&OID=233" class="button">Mehr Infos</a>
  </div>
</div>

<?php
include 'footer.php';
?>