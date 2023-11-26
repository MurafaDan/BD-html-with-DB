<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'connect_bd.php';

    $nume_erou = $_POST['nume_erou'];
    $tip_erou = $_POST['tip_erou'];

    // Check if the record already exists
    $checkSql = "SELECT COUNT(*) FROM eroi WHERE nume_erou = '$nume_erou'";
    $checkResult = mysqli_query($link, $checkSql);

    if ($checkResult) {
        $row = mysqli_fetch_array($checkResult);
        $recordExists = $row[0] > 0;

        if (!$recordExists) {
            // Record doesn't exist, so insert it
            $insertSql = "INSERT IGNORE INTO eroi (nume_erou, tip_erou) VALUES ('$nume_erou', '$tip_erou')";
            $insertResult = mysqli_query($link, $insertSql);

            if ($insertResult) {
                if (mysqli_affected_rows($link) > 0) {
                    echo "Record added successfully!";
                } else {
                    echo "Record already exists!";
                }
            } else {
                echo "Error adding record: " . mysqli_error($link);
            }
        } else {
            echo "Record with nume_erou '$nume_erou' already exists!";
        }
    } else {
        echo "Error checking record existence: " . mysqli_error($link);
    }
}
?>