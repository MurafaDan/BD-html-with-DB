<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styles.css"> 
   
    <script>
        window.onload = function() {
            var form = document.getElementById('tableForm');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                var selectedTable = form.querySelector('input[name="tabel"]:checked').value;

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.getElementById('eroi').innerHTML = xhr.responseText;
                    }
                };

                // Adjust the URL based on the selected table
                xhr.open('GET', selectedTable + '.php', true);
                xhr.send();
            });
        };
    </script>
</head>
<body>
    <h1>Welcome to Your Page</h1>

    <div class="phpstyle">
        <form method="GET" action="#" class="forma_tabele" id="tableForm">
            <table>
                <tr>
                    <td>
                        <input type="radio" name="tabel" value="sarcina2" id="Eroi">
                        <label for="Eroi">Sarcina 2</label>
                    </td>
                    <td>
                        <input type="radio" name="tabel" value="sarcina3" id="Alimente">
                        <label for="Alimente">Sarcina 3</label>
                    </td>
                </tr>
                <tr>
                  <td>
                      <input type="radio" name="tabel" value="sarcina1" id="Locatii">
                      <label for="Locatii">Sarcina 1</label>
                  </td>
                  <td>
                      <input type="radio" name="tabel" value="allfromeroi" id="Transport">
                      <label for="Transport">Tot din eroi</label>
                  </td>
              </tr>
              <tr>
                <tr>
                    <td>
                        <input type="radio" name="tabel" value="obiecte" id="Obiecte">
                        <label for="Obiecte">Obiecte</label>
                    </td>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table><br><br>
        </form>
    </div>

    <div id="eroi"><br></div>
    <br><br>
    <h1>Adauga un personaj nou!</h1> 
    <div class="phpstyle">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'connect_bd.php';

        $nume_erou = $_POST['nume_erou'];
        $tip_erou = $_POST['tip_erou'];



        // bug cu loadu , verificam daca exista
        $checkSql = "SELECT COUNT(*) FROM eroi WHERE nume_erou = '$nume_erou'";
        $checkResult = mysqli_query($link, $checkSql);

        if ($checkResult) {
            $row = mysqli_fetch_array($checkResult);
            $recordExists = $row[0] > 0;

            if (!$recordExists) {
                // inseram
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
</div>


    <form method="POST" action="#" class="center-form" id="insertForm">
        <label for="nume_erou">Nume Erou:</label>
        <input type="text" name="nume_erou" id="nume_erou" required>

        <label for="tip_erou">Tip Erou:</label>
        <input type="text" name="tip_erou" id="tip_erou" required>

        <input type="submit" name="Submit" value="Adauga">
    </form>


    <div class="phpstyle"> 
        <?php include 'delete_erou.php'; ?>

<form method="POST" action="delete_erou.php" class="forma_tabele" id="deleteForm">
    <label for="nume_erou_delete">Nume Erou to Delete:</label>
    <input type="text" name="nume_erou_delete" id="nume_erou_delete" required>

    <input type="submit" name="deleteSubmit" value="Sterge">
</form>
</div>
</body>
</html>
