<?php
require_once 'connect_bd.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_erou'])) {
    $search_erou = $_GET['search_erou'];

    $searchSql = "SELECT * FROM eroi WHERE nume_erou = '$search_erou'";
    $searchResult = mysqli_query($link, $searchSql);

    if ($searchResult) {
        if (mysqli_num_rows($searchResult) > 0) {
            echo '<table class="tabel1">';
            echo '<tr><th>Nume Erou</th><th>Tip Erou</th></tr>';
            while ($row = mysqli_fetch_assoc($searchResult)) {
                echo '<tr><td>' . $row['nume_erou'] . '</td><td>' . $row['tip_erou'] . '</td></tr>';
            }
            echo '</table>';
        } else {
            echo 'No results found for Nume Erou: ' . $search_erou;
        }
    } else {
        echo 'Error searching for Nume Erou: ' . mysqli_error($link);
    }
}
?>