<?php
include 'header.php';
?>
<div class="container strech margin-b5">
    <div class="block50 block beige rounded">
        <h1>Ende</h1>
        <p>Du hast es geschafft – herzliche
            Gratulation und DANKE für deine
            Teilnahme!
            Wenn du die Goldstücke mit den
            Buchstaben gesammelt hast, errate
            daraus das Lösungswort. Gib das Lösungswort
            mit deinen Personalien ein, um
            am Wettbewerb teilzunehmen. Zu
            gewinnen gibt es einen Gutschein des
            Gewerbevereins Bettlach im Wert von CHF 500.-.</p>
        <div id="endeform">
            <?php if (isset($_SESSION["email"])){} else { ?>
                <label for="email">Deine Kontakt E-Mail:</label><br>
                <input type="text" id="email" name="email"><br>
            <?php } ?>
            <label for="endbild">Lade hier dein/euer Abschlussbild hoch:</label><br>
            <label for="endbild" class="fileupload">Bild auswählen</label>
            <input type="file" id="endbild" name="endbild" accept="image/*" /><br>
            <label for="goldstucke">Das Lösungswort der Goldstücke:</label><br>
            <input type="text" id="goldstucke" name="goldstucke"><br>
            <?php if (isset($_SESSION["privat"])) {
            } else { ?>
                <input type="checkbox" id="private" name="private" value="privat">
                <label for="private"> Ich bin einverstanden, das die Bilder auf dieser Website genutzt werden</label><br><br>
            <?php } ?>
            <button class="button" onclick="sendend()">Senden</button>
        </div>
        <script>
            document.getElementById("endbild").addEventListener("change", function() {
                document.getElementsByClassName("fileupload")[0].innerHTML = document.getElementById("endbild").files.item(0).name;
            })

            function sendend() {
                var photo = document.getElementById("endbild");
                var data = new FormData();
                data.append('art', "formend");
                data.append('photo', photo.files[0]);
                data.append('goldstuck', document.getElementById("goldstucke").value);
                if (document.getElementById("email") !== null) {
                    data.append('email', document.getElementById("email").value);
                }
                if (document.getElementById("private") !== null) {
                    data.append('privat', document.getElementById("private").checked);
                }

                var xmlhttp = new XMLHttpRequest()
                xmlhttp.open("POST", "backend/bilder.php");
                xmlhttp.send(data);
                document.getElementById("endeform").innerHTML = "<rot>Wir laden die Daten hoch ...</rot>";
                xmlhttp.onload = () => {
                    if (xmlhttp.status == 200) {
                        document.getElementById("endeform").innerHTML = "<rot>Wurde erfolgreich gesendet</rot>";
                    } else {
                        document.getElementById("endeform").innerHTML = "<rot>Leider ist ein Fehler aufgetreten. Falls du trotzdem teilnehmen möchtest, kannst du das Foto mit dem Lösungswort an <a href=\"mailto:foto@bettle-trail.ch\">foto@bettle-trail.ch</a> senden.</rot>";
                    }
                };
            }
        </script>
    </div>
    <div class="block50 block beige rounded">
        <div class="h1"></div>
        <p><b>Um zum Start zurückzukommen, gehe Richtung Osten zum Dorfplatz und von
dort weiter zum Schulhaus Büelen.</p>
        <div class="map">
            <div id="map" class="rounded"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnLME7cG_I7389lQMJl2YmscX6y3l6aoQ&callback=initMap&v=weekly" defer></script>
            <script>
                function initMap() {
                    const start = {
                        lat: 47.20514050621224,
                        lng: 7.426328541395052
                    };
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 16,
                        center: start,
                    });

                    google.maps.event.addListener(map, "click", (event) => {
                        addMarker(event.latLng, map);
                    });
                    addMarker(start, map);
                }

                function addMarker(location, map) {
                    new google.maps.Marker({
                        position: location,
                        map: map,
                    });
                }

                window.initMap = initMap;
            </script>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>