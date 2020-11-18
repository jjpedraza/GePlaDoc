<?php 
    include("head.php");
    include("header.php");
?>
<center>
<h3 style="margin-top:70px;">Nueva Plantilla </h3>



<?php
if (isset($_POST['btnGuardar'])){
    $PlantillaNombre = VarClean($_POST['PlantillaNombre']);
    $PlantillaDescripcion = VarClean($_POST['PlantillaDescripcion']);
    $IdPlantilla = IdPlantilla();
    $MensajeError ="";
    $ArchivoFinal = "";
    if ( isset( $_FILES ) && isset( $_FILES['PlantillaFile'] ) && !empty( $_FILES['PlantillaFile']['name'] && !empty($_FILES['PlantillaFile']['tmp_name']) ) ) 
    {
        if ( ! is_uploaded_file( $_FILES['PlantillaFile']['tmp_name'] ) ) 
	    {$MensajeError.= "ERROR: El fichero encontrado no fue procesado por la subida correctamente";} 
        
        $ext = pathinfo( $_FILES['PlantillaFile']['name'], PATHINFO_EXTENSION );
        // echo "Extension = ".$ext;
        if($ext == 'docx')
        {
            // $destino="plantillas/".$GePlaDoc_IdUser.'_'.$IdPlantilla.'_'.TokenGenerate().'.'.$ext;	
            $destino="plantillas/".$IdPlantilla.'.'.$ext;	
            $ArchivoFinal = $WebsiteURL.$destino;
            if ( ! @move_uploaded_file($_FILES['PlantillaFile']['tmp_name'], $destino) ) 
            {
                $MensajeError.= ", No se ha podido mover el fichero enviado a la carpeta de destino";
                @unlink(ini_get('upload_tmp_dir').$_FILES['PlantillaFile']['tmp_name']);
                
            }
            else
            { //Exito
              $sql = "INSERT INTO plantillas 
                (IdPlantilla, PlantillaNombre, PlantillaDescripcion, fecha, hora, IdUser, PlantillaFile) 
                VALUES ('".$IdPlantilla."','".$PlantillaNombre."','".$PlantillaDescripcion."','".$fecha."','".$hora."','".$GePlaDoc_IdUser."'
                ,'".$ArchivoFinal."'
                )";
                
                
                if ($db0->query($sql) == TRUE)
                {
                    echo '<div class="alert alert-success" role="alert">
                   Plantilla Guardada con Exito
                  </div>';
                }
                else {
                    Toast("ERROR al guardar",4,"");
                }

              
            }

        } else {$MensajeError.= ", archivo no compatible (solamente se aceptar .docx)";} 

    } else {
        Toast("Selecciona un archivo de Word.docx",2,"");
    }
    
    if ($MensajeError <> ''){
      Toast("ERROR ".$MensajeError,2,"");
    }
    Historia($GePlaDoc_IdUser, "Plantilla", "Registro la Plantilla ".$IdPlantilla." = ".$sql);


} else {
    echo '

    
<form id="Forma" method="POST" action="" enctype="multipart/form-data">
<div class="form-group">
  <label for="exampleFormControlInput1">Nombre de la Plantilla</label>
  <input type="text" class="form-control" id="PlantillaNombre" name="PlantillaNombre" required>
</div>

<div class="form-group">
  <label for="exampleFormControlTextarea1">Descripcion:</label>
  <textarea class="form-control" id="PlantillaDescripcion"  name="PlantillaDescripcion" rows="3" required></textarea>
</div>

<div class="form-group">
  <label for="exampleFormControlFile1">Example file input</label>
  <input type="file" class="form-control-file" id="PlantillaFile" name="PlantillaFile" 
  accept=".docx" required>
  
</div>

<div class="form-group">
  
  <input type="submit" class=" btn btn-success" name="btnGuardar" value="Guardar">
</div>
</form>
</center>




';

echo '
<hr>
<p>Tome en cuenta haber colocado corretamente las variables en el documento:</p>
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

}

?>



<?php


?>

<?php 

    include("footer.php");
?>