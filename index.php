<?php
include 'header.php';

$servername = "localhost";
$username = "binggeli_bettle-tail";
$password = "eQQp2Ats8fPcdzJqCXj8";
$dbname = "binggeli_bettle-trail";
?>
<div class="container-norm strech margin-b5">
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
        <a href="/onboarding" class="button">Starte den Interactiven Trail</a>
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
        <p><b>Start: Parkplatz Büelen Schulhaus</b><br>
            Teilnahme: kostenlos</p>
    </div>
    <div class="block50 block beige rounded">
        <h2>Score-Board</h2>
        <p>Führe das Score-Board an indem du die Interaktive Tour absolvierst.</p>
        <table>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Score</th>
            </tr>
            <?php
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `user_name`, (`user_start` - `user_emd` + (`user_points` * 100)) as score FROM `user` ORDER BY score DESC limit 10;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $i = 1;

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>" . $i . "<td></td><td>" . $row["user_name"] . "</td><td>" . $row["score"] . "</td></tr>";
                    $i++;
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </table>


    </div>
    <div class="block50 block beige rounded">
        <h2>Fotos vom Teilnehmenden</h2>
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT DISTINCT user_endpic as bilder from ( SELECT user.user_endpic FROM user WHERE user.user_private = 1 AND user.user_endpic IS not NULL UNION SELECT user.user_zspic FROM user WHERE user.user_private = 1 AND user.user_zspic IS not NULL UNION SELECT user.user_startpic FROM user WHERE user.user_private = 1 AND user.user_startpic IS not NULL UNION SELECT zsgewinn.zsgewinn_foto FROM zsgewinn WHERE zsgewinn.zsgewinn_privat = 1 AND zsgewinn.zsgewinn_foto IS not NULL UNION SELECT endform.endform_foto FROM endform WHERE endform.endform_privat = 1 AND endform.endform_foto IS not NULL) nd ORDER BY RAND() Limit 10;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $i = 1;
            $iphoto = "";
            $ibulet = "";

            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $iphoto .= "<div class=\"mySlides fade\"><img loading=\"lazy\" src=\"" . $row["bilder"] . "\" alt=\"Bild eines Teilnehmers des Bettle-Trail\" decoding=\"async\" /></div>";
                $ibulet .= "<span class=\"dot\" onclick=\"currentSlide(" . $i . ")\"></span>";
                $i++;
            }

            echo "<div class=\"slideshow-container\">";
            echo $iphoto;
            echo "<button class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</button><button class=\"next\" onclick=\"plusSlides(1)\">&#10095;</button></div><div style=\"text-align:center\">";
            echo $ibulet;
            echo "</div>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <br>
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
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
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