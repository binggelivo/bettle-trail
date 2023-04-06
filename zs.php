<?php
include 'header.php';

echo $_SESSION["grouid"];
?>
<div class="container strech margin-b5">
  <div class="block50 block beige rounded">
    <h2>Posten 4</h2>
    <p>Hinweis: Die Fragebogen findet ihr im „Briefkasten“!<br><br>
      Beantwortet die vier Fragen und setzt die Zahlen in die
      entsprechenden Antwortfelder ein.<br>
      Frage 1: In welchem Jahr wurde die Zähnteschür erstmals schriftlich
      erwähnt?<br>
      Frage 2: Für wie viele Franken kaufte der Zähnteschürverein die
      Liegenschaft? Bilde die Quersumme!<br>
      Frage 3: Was kostet die Mitgliedschaft im Zähnteschürverein für ein
      Ehepaar?<br>
      Frage 4: Wie viele Anlässe „i dr Schür“ organisiert der
      Zähnteschürverein in diesem Jahr?<br>
      Gestaltet die Lösungszahl nach eurer Phantasie mit Materialien aus
      der Natur und sende ein Foto im Formular:</p><br><br>
    <div id="zsform">
      <label for="email">Deine Kontakt E-Mail:</label><br>
      <input type="text" id="email" name="email"><br>
      <label for="zsbild">Lade hier das Bild hoch:</label><br>
      <label for="zsbild" class="fileupload">Bild auswählen</label>
      <input type="file" id="zsbild" name="zsbild" accept="image/*" /><br>
      <?php if (isset($_SESSION["groupid"])){}else{ ?>
        <input type="checkbox" id="private" name="private" value="privat">
        <label for="private"> Ich bin einverstanden, das die Bilder auf dieser Website genutzt werden</label><br><br>
      <?php } ?>
      <button class="button" onclick="onboarding()">Starten</button>
      <script>
        document.getElementById("zsbild").addEventListener("change", function(){
          document.getElementsByClassName("fileupload")[0].innerHTML = document.getElementById("zsbild").files.item(0).name;
        })
        function onboarding() {
          var photo = document.getElementById("zsbild");
          var email = document.getElementById("email").value
          var data = new FormData();
          data.append('art', "zsupload");
          data.append('photo', photo.files[0]);
          data.append('email', email);
          if (typeof document.getElementById("private") !== 'undefined'){
            data.append('privat', document.getElementById("private").checked);
          }

          var xmlhttp = new XMLHttpRequest()
          xmlhttp.open("POST", "backend/bilder.php");
          xmlhttp.send(data);
          document.getElementById("zsform").style.display = "none";
        }
      </script>
    </div><br>
    <p><b>Einsendeschluss: 15. August 2023.</b><br><br>
      Unter den richtigen Lösungszahlen erkürt der Vorstand die drei
      kreativsten und schönsten Fotos.
      Es gibt tolle Preise zu gewinnen:
    <ol>
      <li>Preis: Eintritt für „Kultur i dr Schür“</li>
      <li>Preis: Getränk in „Kultur i dr Schür“</li>
      <li>Preis: Kaffee und Giipfeli im „Kafi i dr Schür“</li>
    </ol>
    <br>
    Hinweis zum nächsten Posten:<br>
    Ersetze die ersten drei Ziffern der Lösungszahl durch die Buchstaben.
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
    <img src="img/zs.webp" alt="Logo Zähnteschür Bettlach" class="vlogo"><br>
    <h1>Zähnteschürverein</h1>
    <p>Die Schür wurde 1611 erstmals erwähnt. Die verfallene Zähnteschür
      sollte aber, obwohl seit 1941 unter Schutz gestellt (im „Inventar
      der erhaltenswerten Objekte des Kantons“), dem Verkehr geopfert
      werden. Damit waren einige Dorfbewohner nicht einverstanden und
      kauften kurzum die alte Schür für 45‘000.- Franken. Dies war vor über
      40 Jahren die Gründung des Zähnteschürvereins. Eine umfangreiche
      Renovation mit Frondienst folgte.<br><br>
      Heute ist die Zähnteschür im Dorfleben nicht mehr wegzudenken.
      Zahlreiche gesellige Anlässe finden hier statt! Sie kann für private
      Anlässe gemietet werden.<br><br>
      In diesem Jahr organisiert der Zähnteschürverein einige Anlässe unter
      dem Motto „i dr Schür“. Diese sind in unmittelbarer Umgebung des
      Postens zu finden.<br><br>
      Es würde uns freuen, euch als Mitglieder im Verein begrüssen zu
      können. So kostet z.B. eine Mitgliedschaft für Einzelpersonen Fr. 50.-
      und für Ehepaare Fr. 75.- (Anmeldeformular unter www.zsbettlach.ch).
      Wir wünschen euch viel Spass bei unserem Posten und auf dem
      BETTLE-TRAIL!<br><br>
      Der Zähnteschürverein Bettlach</p>
    <img src="img/zs/1.webp" alt="Zähnteschür von hinten">
    <br>
    <a href="https://zsbettlach.ch/" class="button">Website</a>
  </div>
</div>

<?php
include 'footer.php';
?>