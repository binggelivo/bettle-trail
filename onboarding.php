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
            <label for="myfile">Euer Gruppenbild oder dein Profilbild:</label>
            <input type="file" id="myfile" name="myfile" accept="image/*" /><br><br>
            <button>Starten</button>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>