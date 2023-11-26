    <?php
    mysql_connect("localhost","root","root");     
    mysql_select_db("poveste1") or die;
       $results = mysql_query("SELECT * FROM eroi");
       $numrows=mysql_num_rows($queryResult);
      while($row = mysql_fetch_assoc($queryResult)) {
       ?>
           <tr>
               <td> $numrows ?></td>
               <td>  $row['nume_erou']?></td>
               <td>  $row['tip_erou']?></td>
               <td>  $row['id_obiect']?></td>
           </tr>
      
       <?php
      }