<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Record</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h1>Welcome to the Insert Page</h1>

    <div class="phpstyle">
        <!-- Your PHP code for inserting records -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once 'connect_bd.php';

            $nume_erou = $_POST['nume_erou'];
            $tip_erou = $_POST['tip_erou'];

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

        <!-- Your HTML form for inserting records -->
        <form method="POST" action="#" class="forma_tabele" id="insertForm">
            <label for="nume_erou">Nume Erou:</label>
            <input type="text" name="nume_erou" id="nume_erou" required>

            <label for="tip_erou">Tip Erou:</label>
            <input type="text" name="tip_erou" id="tip_erou" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>