<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'connect_bd.php';

    $sql = "SELECT alimente.nume_aliment, obiecte.nume_obiect , tip_aliment
    FROM obiecte
   JOIN alimente ON alimente.id_obiect = obiecte.id_obiect;
";

    $result = mysqli_query($link, $sql) or die("Eroare: " . mysqli_error($link));
    
    if ($result) {
        echo "<table class='tabel_eroi' style='border-collapse: collapse; width: 100%; height: 460px;'>";
        echo "<tr style='border: 1px solid #ddd;'><th>Nr.</th><th> Aliment</th><th>Tipul Alimentului</th><th>Obiect</th></tr>";
        $i = 1;
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr style='border: 1px solid #ddd;'>
                    <td>".$i."</td>
                    <td>".$row['nume_aliment']."</td>
                    <td>".$row['tip_aliment']."</td>
                    <td>".$row['nume_obiect']."</td>
                </tr>";
            $i++;
        }
        echo "</table>";
    }

    //deconecteaza baza de date
    mysqli_close($link);
}
?>

