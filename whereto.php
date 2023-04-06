<?php
include 'header.php';
?>
    <div class="container strech margin-b5">
        <div class="block50 block beige rounded">
            <h1>Bettle-Trail</h1>
            <p>Herzlich willkommen beim Bettle-Trail. Dieser Rätselweg der
                Bettlacher Vereine führt durchs Dorf und eignet sich für Jung und
                Alt. Der Rundgang dauert 1.5-2h (reine Gehzeit ca. 40min.) und ist
                auch mit Kinderwagen begehbar. Der Bettle-Trail ist kostenlos, vom
                7.4.-15.8.2023 jederzeit öffentlich zugänglich und kann mit oder ohne
                Smartphone gemacht werden.</p>
            <p><b>Wie funktioniert der Bettle-Trail?</b>
                <br>Es gibt insgesamt 10 Posten, bei denen es eine Tafel gibt, auf welcher
                steht, was du am jeweiligen Ort machen musst und wie du zum
                Hinweis für den nächsten Posten kommst. Mit dem QR-Code erhältst
                du mehr Infos zu den Vereinen und falls du nicht weiterkommst,
                findest du dort auch Hilfe. Sollte ein Posten defekt sein oder etwas
                fehlen, kannst du dies über die Homepage melden. Sammle die
                Goldstücke.
            </p>
        </div>
        <div class="block50 block beige rounded">
            <div class="h1"></div>
            <p><b>Vom 7. April bis 15. August 2023</b><br>
                Der Rätselweg der Bettlacher Vereine führt durchs
                Dorf und eignet sich für Jung und Alt. Der Rundgang
                dauert 1.5 - 2h (reine Gehzeit ca. 40min.) und ist auch
                mit Kinderwagen begehbar.</p>
            <div class="map">
                <div id="map" class="rounded"></div>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnLME7cG_I7389lQMJl2YmscX6y3l6aoQ&callback=initMap&v=weekly"
                    defer></script>
                <script>
                    function initMap() {
                        const start = { lat: 47.20514050621224, lng: 7.426328541395052 };
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
            <p><b>Start: Parkplatz Büelen Schulhaus</b><br>
                Teilnahme: kostenlos</p>
        </div>
    </div>
    
<?php
include 'footer.php';
?>