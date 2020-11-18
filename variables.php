<?php 
    include("head.php");
    include("header.php");
?>


<?php
echo '
<hr>
<p>Variables usadas en las plantillas:</p>
<table class="table table-striped container">
  <thead>
    <tr>
      <th scope="col">Variable</th>
      <th scope="col">Descripcion</th>
      
    </tr>
  </thead>
  <tbody>';
$sql = "select * from variables order by Variable";
$r2= $db0 -> query($sql);
while($f2 = $r2 -> fetch_array()) {               
  echo '   
    <tr>
      <th scope="row">'.$f2['Variable'].'</th>
      <td>'.$f2['Descripcion'].'</td>      
    </tr>';
}
echo '
  </tbody>
</table>
';

?>



<?php 
    include("footer.php");
?>