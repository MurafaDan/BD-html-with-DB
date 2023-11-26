<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'connect_bd.php';

    $sql = "SELECT eroi.nume_erou,eroi.tip_erou, locatii.nume_loc, obiecte.nume_obiect, obiecte.tip_obiect
  FROM eroi
LEFT JOIN locatii ON locatii.id_loc = eroi.id_loc

LEFT JOIN obiecte ON obiecte.id_obiect = eroi.id_obiect;
";

    $result = mysqli_query($link, $sql) or die("Eroare: " . mysqli_error($link));
    
    if ($result) {
        echo "<table class='tabel_eroi' style='border-collapse: collapse; width: 100%; height: 460px;'>";
        echo "<tr style='border: 1px solid #ddd;'><th>Nr.</th><th>Erou</th><th>Tip Erou</th><th>Locatia</th><th>Obiect</th><th>Tip Obiect</th></tr>";
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='border: 1px solid #ddd;'>
                    <td>".$i."</td>
                    <td>".$row['nume_erou']."</td>
                    <td>".$row['tip_erou']."</td>
                    <td>".$row['nume_loc']."</td>
                    <td>".$row['nume_obiect']."</td>
                    <td>".$row['tip_obiect']."</td>
                </tr>";
            $i++;
        }
        echo "</table>";
    }

    //deconecteaza baza de date
    mysqli_close($link);
}
?>
