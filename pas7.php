<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Casuta din padure</title>
    <script>
      window.onload = function () {
          var form = document.getElementById('tableForm');

          form.addEventListener('submit', function (event) {
              event.preventDefault();

              var selectedTable = form.querySelector('input[name="tabel"]:checked').value;

              var xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function () {
                  if (xhr.readyState === 4 && xhr.status === 200) {
                      document.getElementById('eroi').innerHTML = xhr.responseText;
                  }
              };

              // Adjust the URL based on the selected table
              xhr.open('GET', selectedTable + '.php', true);
              xhr.send();
          });



      var deleteForm = document.getElementById('deleteForm');

deleteForm.addEventListener('submit', function (event) {
  event.preventDefault();

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        document.getElementById('eroi').innerHTML = xhr.responseText;
      } else {
        console.error('Error deleting record:', xhr.status, xhr.statusText);
      }
    }
  };

  // Adjust the URL based on the selected table
  xhr.open('POST', 'delete_erou.php', true);

  // Serialize form data
  var formData = new FormData(deleteForm);

  // Send the form data using POST
  xhr.send(formData);
});

var insertForm = document.getElementById('insertForm');

    insertForm.addEventListener('submit', function (event) {
      event.preventDefault();

      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            document.getElementById('eroi').innerHTML = xhr.responseText;
          } else {
            console.error('Error adding record:', xhr.status, xhr.statusText);
          }
        }
      };

      // Adjust the URL based on the selected table
      xhr.open('POST', 'insert_erou.php', true);

      // Serialize form data
      var formData = new FormData(insertForm);

      // Send the form data using POST
      xhr.send(formData);
    });
  };
  </script>
</head>

<body>
    <header class="header">
        <a href="https://www.grimmstories.com/ro/grimm_basme/hansel_si_gretel" class="logo">Hansel & Grettel</a>
        <nav class="navbar">
            <a href="#table"><img src="tabel.png" alt="tabel" width="40px" height="40px"></a>
            <a href="#video"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/640px-YouTube_full-color_icon_%282017%29.svg.png" alt="video" width="50px" height="30px"></a>
            <a href="pas1.html">Pasul 1</a>
            <a href="pas2.html">Pasul 2</a>
            <a href="pas3.html">Pasul 3</a>
            <a href="pas4.html">Pasul 4</a>
            <a href="pas5.html">Pasul 5</a>
            <a href="pas6.html">Pasul 6</a>
        
        </nav>
            </header>
            <br> <h1>Casuta din padure - Fratii Grimm</h1>
      
            <br> <h1>Casuta din padure - Fratii Grimm</h1>
<div class="container">

     <div class="text">
  <p><h2>Hänsel și Gretel sunt doi copii care trăiesc într-un sat și au părinți săraci. Din cauza lipsei hranei și a greutăților financiare,<p> părinții decid să-i abandoneze în pădure, deoarece nu pot să-i hrănească. Copiii au înțelegere deplină asupra situației și pentru a-și marca drumul de întoarcere, folosesc bucăți de pâine.</p>

    <p> Totuși, păsările din pădure mănâncă bucățile de pâine, iar Hänsel și Gretel se pierd în mijlocul pădurii. După o noapte de teamă și incertitudine, descoperă o căsuță ciudată făcută din prăjituri, acoperiș de turta dulce și ferestre din caramel. Flămânzi și curioși, încep să mănânce din pereții casei.</p> <p> casei se dovedește a fi o vrăjitoare malefică care atrage copiii cu casa ei dulce pentru a-i prinde și a-i mânca.
    </div>
    <div class="imagine">
        <img src='https://info.radiosun.ro/wp-content/uploads/2021/04/Hansel-si-Gretel-de-Fratii-Grimm.jpg' alt="imagine1" width="500" height="420" >
           </div>
    </div> 
    <h2>Vrăjitoarea îi capturează și îi îngrășește pentru a-i pregăti pentru o masă delicioasă.</p><p> Gretel, însă, observă viclenia vrăjitoarei și își propune să găsească o modalitate de a o învinge. În timpul pregătirilor pentru a-i pune la cuptor, vrăjitoarea îl testează pe Hänsel să vadă dacă este suficient de gras. Însă, folosindu-se de istețime, Hänsel îi arată oasele unei păsări în locul brațului său.</p></h2>
    <div class="container">
    <div class="imagine">
      <img src='photo2.jpg' alt="imagine2" width="550" height="420">
      </div>
      <div class="text">
   <h2>
    
   <p> Realizând că ochii vrăjitoarei nu sunt suficient de ageri, Gretel își pune planul în aplicare. În timp ce stau în cuptor, Gretel o convinge pe vrăjitoare să se aplece pentru a verifica dacă focul este destul de încins. În acel moment, Gretel o împinge pe vrăjitoare în cuptor, închizând ușa și punând capăt răutăților ei.</p><p>
    
    Cu vrăjitoarea învinsă, Hänsel și Gretel descoperă o comoară în casa ei și se întorc acasă. Pentru surpriza lor, găsesc că părinții lor au regretat profund decizia de a-i abandona și îi primește cu brațele deschise. Familia trăiește apoi în bogăție și fericire, iar Hänsel și Gretel au învățat o lecție valoroasă despre curaj, inteligență și solidaritate.</p></h2></p></h2> 
  </div>
</div>
    <br><h1> Care sunt personajele acestei povesti?</h1>
    <br><br><br>

    <table class="tabel1">
        <tr>
          <th>Personaje</th>
          <th>Evenimente</th>
        </tr>
        <tr>
          <td><p><a href="https://ro.wikipedia.org/wiki/Hänsel_și_Gretel#:~:text=Hänsel%20si%20Gretel%20sunt%20doi,afară%20pentru%20a%20strânge%20pietre.">Hansel si Grettel</a></p></td>
          <td>Părinții săraci decid să-i abandoneze în pădure din cauza sărăciei.</td>
        </tr>
        <tr>
          <td></td>
          <td>Folosesc bucăți de pâine pentru a marca drumul, dar păsările le mănâncă.</td>
        </tr>
        <tr>
          <td></td>
          <td>Găsesc căsuța din pădure făcută din prăjituri.</td>
        </tr>
        <tr>
          <td><p><a href="https://ik-ptz.ru/ro/russian-language/genzel-i-gretel-skazka-vedmy-grimm-bratya-yakob-i-vilgelm-hrabryi.html">Vrajitoarea</a></p></td>
          <td>Proprietara casei se dovedește a fi o vrăjitoare malefică care îi capturează.</td>
        </tr>
        <tr>
          <td></td>
          <td>Planul vrăjitoarei de a-i mânca este întors împotriva ei de copii.</td>
        </tr>
        <tr>
          <td></td>
          <td>Hänsel și Gretel găsesc o comoară în casa vrăjitoarei.</td>
        </tr>
        <tr>
          <td></td>
          <td>Se întorc acasă și descoperă că părinții au regretat decizia de a-i abandona.</td>
        </tr>
        <tr>
          <td></td>
          <td>Familia trăiește fericită și bogat până la adânci bătrâneți.</td>
        </tr>
        <tr>
            <td><p><a href="https://ru.wikipedia.org/wiki/Скуби-Ду">Scooby doo</a></p></td>
        <tr>
            <td></td>
            <td>Scooby doo a gasit copiii in casa din prajitura.</td>
        </tr>
        <tr>
            <td></td>
            <td>Copiii sunt fericiti sa-i vada dupa tot ce s-a intimplat.</td>
        </tr>
      
        <tr></tr>
        <td></td>
            <td>Au ajutat copiii sa ajunga acasa la parinti tot cu comoara.</td>
        </tr>

        </tr>
      </table>
      <br><br><br>
      <div class="center">
        <h1>Video pentru copii</h1>
        <br><br>
      <video id="video" width="320" height="240" controls>
        <source src=”videocopii” type=video/ogg>
        <source src="videocopii.mp4" type=video/mp4>
       
      </video>
    </div>
    <br><br><br>
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
  <form method="POST" action="#" class="forma_tabel2" id="insertForm">
      <label for="nume_erou">Nume Erou:</label>
      <input type="text" name="nume_erou" id="nume_erou" required>

      <label for="tip_erou">Tip Erou:</label>
      <input type="text" name="tip_erou" id="tip_erou" required>

      <input type="submit" value="Submit">
  </form>

<h1>Sterge un personaj!</h1> 
<div class="phpstyle"> 
        <?php include 'delete_erou.php'; ?>

        <form method="POST" action="delete_erou.php" class="forma_tabele" id="deleteForm">
    <label for="nume_erou_delete">Nume Erou to Delete:</label>
    <input type="text" name="nume_erou_delete" id="nume_erou_delete" required>

    <input type="submit" name="deleteSubmit" value="Sterge">
</form>
</form>
</div>
<h1>Detalii Erou</h1>
<form method="GET" action="#" class="forma_tabel2" id="outputForm">
    <label for="search_erou">Cauta Nume Erou:</label>
    <input type="text" name="search_erou" id="search_erou" required>
    <input type="submit" name="searchSubmit" value="Cauta">
</form>

<div id="outputResult"></div>

<script>
    document.getElementById('outputForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var search_erou = document.getElementById('search_erou').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('outputResult').innerHTML = xhr.responseText;
            }
        };

        xhr.open('GET', 'output.php?search_erou=' + search_erou, true);
        xhr.send();
    });
</script>
</body>
</html>
