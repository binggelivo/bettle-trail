<?php
include 'header.php';
?>
<div class="container strech margin-b5">
    <div class="block100 block beige rounded">
        <h1>Interaktiver Bettle-Trail</h1>
        <p>Erlebe den Bettle-Trail mit deinem Smartphone. Bist du der schnellste, der den Parkour löst?</p>
        <div>
            <label for="groupname">Euer Gruppenname oder dein Name:</label><br>
            <input type="text" id="groupname" name="groupname"><br><br>
            <label for="gruppenbild">Euer Gruppenbild oder dein Profilbild:</label><br>
            <label for="gruppenbild" class="fileupload">Bild auswählen</label>
            <input type="file" id="gruppenbild" name="gruppenbild" accept="image/*" /><br><br><br>
            <button class="button">Starten</button>
            <scrip>

            </scrip>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>