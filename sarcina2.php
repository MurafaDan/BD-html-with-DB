<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'connect_bd.php';

    $sql = "SELECT eroi.nume_erou, eroi.tip_erou, locatii.nume_loc
            FROM eroi
            JOIN locatii ON eroi.id_loc = locatii.id_loc";

    $result = mysqli_query($link, $sql) or die("Eroare: " . mysqli_error($link));
    
    if ($result) {
        echo "<table class='tabel_eroi' style='border-collapse: collapse; width: 100%; height: 460px;'>";
        echo "<tr style='border: 1px solid #ddd;'><th>Nr.</th><th>Nume erou</th><th>Tip erou</th><th>Nume loc</th></tr>";
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='border: 1px solid #ddd;'>
                    <td>".$i."</td>
                    <td>".$row['nume_erou']."</td>
                    <td>".$row['tip_erou']."</td>
                    <td>".$row['nume_loc']."</td>
                </tr>";
            $i++;
        }
        echo "</table>";
    }

    //deconecteaza baza de date
    mysqli_close($link);
}
?>
