<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteSubmit'])) {
    require_once 'connect_bd.php';


    $nume_erou_to_delete = mysqli_real_escape_string($link, $_POST['nume_erou']);

    $sql = "DELETE FROM eroi WHERE nume_erou = '$nume_erou_to_delete'";
    $result = mysqli_query($link, $sql);

    if ($result) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>