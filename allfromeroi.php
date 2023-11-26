<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'connect_bd.php';

    $sql = "SELECT eroi.nume_erou, locatii.nume_loc, transport.nume_transport, obiecte.nume_obiect , alimente.nume_aliment
    FROM eroi
    LEFT JOIN locatii ON locatii.id_loc = eroi.id_loc
    LEFT JOIN transport ON transport.id_transport = eroi.id_transport
    LEFT JOIN obiecte ON obiecte.id_obiect = eroi.id_obiect
    LEFT JOIN alimente ON alimente.id_aliment = eroi.id_aliment;
    
;

";

    $result = mysqli_query($link, $sql) or die("Eroare: " . mysqli_error($link));
    
    if ($result) {
        echo "<table class='tabel_eroi' style='border-collapse: collapse; width: 100%; height: 460px;'>";
        echo "<tr style='border: 1px solid #ddd;'><th>Nr.</th><th>Erou</th><th>Locatia</th><th>Transport</th><th>Obiect</th><th>Aliment</th></tr>";
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='border: 1px solid #ddd;'>
                    <td>".$i."</td>
                    <td>".$row['nume_erou']."</td>
                    <td>".$row['nume_loc']."</td>
                    <td>".$row['nume_transport']."</td>
                    <td>".$row['nume_obiect']."</td>
                    <td>".$row['nume_aliment']."</td>
                </tr>";
            $i++;
        }
        echo "</table>";
    }

    //deconecteaza baza de date
    mysqli_close($link);
}
?>
