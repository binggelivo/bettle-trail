<?php
include 'header.php';
?>
<div class="container strech margin-b5">
    <div class="block100 block beige rounded">
        <h1>Interaktiver Bettle-Trail</h1>
        <p>Erlebe den Bettle-Trail mit deinem Smartphone. Bist du der schnellste, der den Parkour löst?<br><br>
            Die Zeit läuft so bald du auf Start gedrückt hast und endet mit dem Absenden des Schlussbildes beim Endposten. Falls du probleme hast beim Lösen der Aufgaben, kannst du gegen Zeitaufschlag Tipps lösen.<br><br>
            Viel Spass beim Knobbeln.
        </p>
        <div id="onboardform">
            <label for="posten">Posten:</label><br>
            <select type="text" id="posten" name="posten">
                <option value="p1">Posten 1</option>
                <option value="p2">Posten 2</option>
                <option value="p3">Posten 3</option>
                <option value="p4">Posten 4</option>
                <option value="p5">Posten 5</option>
                <option value="p6">Posten 6</option>
                <option value="p7">Posten 7</option>
                <option value="p8">Posten 8</option>
                <option value="p9">Posten 9</option>
                <option value="p10">Posten 10</option>
                <option value="installationen">Alle anderen Installation</option>
            </select><br>
            <label for="beschreibung">Was ist kapput/komisch:</label><br>
            <textarea id="beschreibung" name="beschreibung"></textarea><br><br>
            <button class="button" onclick="fehlermelden()">Senden</button>
        </div>
        <script>
            function fehlermelden() {
                var select = document.getElementById("posten");
                var name = document.getElementById("beschreibung")
                var data = new FormData();
                data.append('posten', document.getElementById("posten").value);
                data.append('beschreibung', document.getElementById("beschreibung").value);

                var xmlhttp = new XMLHttpRequest()
                xmlhttp.open("POST", "backend/fehler.php");
                xmlhttp.send(data);
                document.getElementById("onboardform").innerHTML = "<rot>Senden ...</rot>";
                xmlhttp.onload = () => {
                    if (xmlhttp.status == 200) {
                        document.getElementById("endeform").innerHTML = "<green>Wurde erfolgreich gesendet</green>";
                    } else {
                        document.getElementById("onboardform").innerHTML = "<rot>Leider ist ein Fehler aufgetreten. Sende doch bitte eine mail an <a href=\"mailto:info@bettle-trail.ch\">info@bettle-trail.ch</a>.</rot>";
                    }
                };
            }
        </script>
    </div>
</div>

<?php
include 'footer.php';
?>
