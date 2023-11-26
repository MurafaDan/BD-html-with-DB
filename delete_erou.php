<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'connect_bd.php';

    // Check if 'nume_erou_delete' key exists in the $_POST array
    $nume_erou_delete = isset($_POST['nume_erou_delete']) ? $_POST['nume_erou_delete'] : '';

    // Check if the record exists before deleting
    $checkSql = "SELECT COUNT(*) FROM eroi WHERE nume_erou = '$nume_erou_delete'";
    $checkResult = mysqli_query($link, $checkSql);

    if ($checkResult) {
        $row = mysqli_fetch_array($checkResult);
        $recordExists = $row[0] > 0;

        if ($recordExists) {
            // Record exists, proceed to delete
            $deleteSql = "DELETE FROM eroi WHERE nume_erou = '$nume_erou_delete'";
            $deleteResult = mysqli_query($link, $deleteSql);

            if ($deleteResult) {
                echo "Record deleted successfully!";
            } else {
                echo "Error deleting record: " . mysqli_error($link);
            }
        } else {
            echo "Record with nume_erou '$nume_erou_delete' does not exist!";
        }
    } else {
        echo "Error checking record existence: " . mysqli_error($link);
    }

    // Close the connection if it's open
    if (mysqli_ping($link)) {
        mysqli_close($link);
    }
}
?>
