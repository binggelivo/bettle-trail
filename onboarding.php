<?php
include 'header.php';
?>
<div class="container strech margin-b5">
    <div class="block100 block beige rounded">
        <h1>Interaktiver Bettle-Trail</h1>
        <p>Erlebe den Bettle-Trail mit deinem Smartphone. Bist du der schnellste, der den Parkour löst?</p>
        <div id="onboardform">
            <label for="groupname">Euer Gruppenname oder dein Name:</label><br>
            <input type="text" id="groupname" name="groupname"><br>
            <label for="gruppenbild">Euer Gruppenbild oder dein Profilbild:</label><br>
            <label for="gruppenbild" class="fileupload">Bild auswählen</label>
            <input type="file" id="gruppenbild" name="gruppenbild" accept="image/*" /><br>
            <input type="checkbox" id="private" name="private" value="privat">
            <label for="private"> Ich bin einverstanden, das die Bilder auf dieser Website genutzt werden</label><br><br>
            <button class="button" onclick="onboarding()">Starten</button>
        </div>
        <script>
            document.getElementById("gruppenbild").addEventListener("change", function() {
                document.getElementsByClassName("fileupload")[0].innerHTML = document.getElementById("gruppenbild").files.item(0).name;
            })

            function onboarding() {
                var photo = document.getElementById("gruppenbild");
                var name = document.getElementById("groupname").value
                var data = new FormData();
                data.append('art', "onboarding");
                data.append('photo', photo.files[0]);
                data.append('groupname', name);
                data.append('privat', document.getElementById("private").checked);

                var xmlhttp = new XMLHttpRequest()
                xmlhttp.open("POST", "backend/bilder.php");
                xmlhttp.send(data);
                document.getElementById("onboardform").innerHTML = "<rot>Wir laden die Daten hoch ...</rot>";
                xmlhttp.onload = () => {
                    if (xmlhttp.status == 200) {

                    } else {
                        document.getElementById("onboardform").innerHTML = "<rot>Leider ist ein Fehler aufgetreten. Versuche die Seite neu zu laden.</rot>";
                    }
                };
            }
        </script>
    </div>
</div>

<?php
include 'footer.php';
?>