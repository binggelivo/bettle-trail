<?php
include 'header.php';
?>
<div class="container strech margin-b5">
    <div class="block100 block beige rounded">
        <h1>Interaktiver Bettle-Trail</h1>
        <p>Erlebe den Bettle-Trail mit deinem Smartphone. Bist du der schnellste, der den Parkour löst?</p>
        <div>
            <label for="groupname">Euer Gruppenname oder dein Name:</label><br>
            <input type="text" id="groupname" name="groupname"><br>
            <label for="gruppenbild">Euer Gruppenbild oder dein Profilbild:</label><br>
            <label for="gruppenbild" class="fileupload">Bild auswählen</label>
            <input type="file" id="gruppenbild" name="gruppenbild" accept="image/*" /><br>
            <input type="checkbox" id="private" name="private" value="privat">
            <label for="private"> Ich bin einverstanden, das die Bilder auf dieser Website genutzt werden</label><br><br>
            <button class="button" onclick="onboarding()">Starten</button>
            <script>
                function onboarding(){
                    var photo = document.getElementById("gruppenbild");
                    var name = document.getElementById("groupname").value
                    var data=new FormData();
                    data.append('art', "onboarding");
                    data.append('photo',photo.files[0]);
                    data.append('groupname', name);
                    data.append('privat', document.getElementById("private").checked);

                    var xmlhttp=new XMLHttpRequest()
                    xmlhttp.open("POST", "bilder.php");
                    xmlhttp.send(data);
                }
            </script>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>