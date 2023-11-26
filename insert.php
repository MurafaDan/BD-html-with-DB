<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'connect_bd.php';

    // Assume you have form fields named 'nume_erou' and 'tip_erou'
    $nume_erou = mysqli_real_escape_string($link, $_POST['nume_erou']);
    $tip_erou = mysqli_real_escape_string($link, $_POST['tip_erou']);

    $sql = "INSERT INTO eroi (nume_erou, tip_erou) VALUES ('$nume_erou', '$tip_erou')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "Record added successfully!";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>