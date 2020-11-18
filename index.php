<?php 
    include("head.php");
    include("header.php");
?>


<?php

$QueryD = "select * from PlantillasVista";

echo DynamicTable_MySQL($QueryD, "DivPlantillas", "IdTabla", "", 0, 1);



?>



<?php 
    include("footer.php");
?>