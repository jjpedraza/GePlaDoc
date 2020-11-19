<?php 
    include("head.php");
    include("header.php");
?>

<center >




<?php
if (isset($_GET['id'])){
    $IdPlantilla = VarClean($_GET['id']);
    $sql = "select * from plantillas WHERE IdPlantilla ='".$IdPlantilla."'";        
    $r= $db0 -> query($sql);
    if($f = $r -> fetch_array())
    {
        echo '<h3 style="">Editar Plantilla <b>'.$f['PlantillaNombre'].'</b> </h3>';
        echo '<div class="container">
        <div class="row">
          <div class="col-md">
            ';

        if (isset($_POST['btnGuardar'])){            
             $PlantillaDescripcion = VarClean($_POST['PlantillaDescripcion']);
             $IdPlantilla = VarClean($_POST['IdPlantilla']);
             $PlantillaEstado = VarClean($_POST['PlantillaEstado']);
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
                         

                        
                        }

                    } else {$MensajeError.= ", archivo no compatible (solamente se aceptar .docx)";} 

                } 

                $sql = "UPDATE plantillas

                SET PlantillaDescripcion = '".$PlantillaDescripcion."',active='".$PlantillaEstado."'
                WHERE IdPlantilla = '".$IdPlantilla."'
                ";
                
                if ($db0->query($sql) == TRUE)
                {
                    echo '<div class="alert alert-success" role="alert">
                   Plantilla Actualizada con Exito
                  </div>';
                }
                else {
                    Toast("ERROR al guardar",4,"");
                }

                
                // else {
                //     Toast("Selecciona un archivo de Word.docx",2,"");
                // }
                if ($MensajeError <> ''){
                    Toast("ERROR ".$MensajeError,2,"");
                }

                Historia($GePlaDoc_IdUser, "Plantilla", "Actualizo la Plantilla ".$IdPlantilla." = ".$sql);


        } else {
            echo '              
                <form id="Forma" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="IdPlantilla" value="'.$IdPlantilla.'">
                <div class="form-group" style="width:90%;">
                
                <label for="exampleFormControlTextarea1">Descripcion:</label>
                <textarea class="form-control" id="PlantillaDescripcion"  name="PlantillaDescripcion" rows="3" >'.$f['PlantillaDescripcion'].'</textarea>
                </div>

                <div class="form-group">
                <label for="exampleFormControlFile1">Archivo para Actualizar</label>
                <input type="file" class="form-control-file" id="PlantillaFile" name="PlantillaFile" 
                accept=".docx" >            
                </div>

                <div class="form-group">
                <label for="exampleFormControlFile1">Estado</label>
                <select class="form-control" id="PlantillaEstado" name="PlantillaEstado" >
                ';
                if ($f['active'] == 0){
                    echo "<option value='0' selected>Inactiva</option>";
                    echo "<option value='1'>Activa</option>";

                } else {
                    echo "<option value='0'>Inactiva</option>";
                    echo "<option value='1' selected>Activa</option>";
                }
                echo '</select>
                
                </div>

                <div class="form-group">
                
                <input type="submit" class=" btn btn-success" name="btnGuardar" value="Actualizar">
                </div>
                </form>
            ';

        echo '
          </div>
          <div class="col-md" style="height:700px;">
           Vista Previa (<a href="">Actualizar</a>) :';
           echo '
           <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-left:10px;">
            <a href="api.php" style="
                display:block; color:white; width:100%; height:100%;
                ">API</a>
                </button>
           ';

           echo "<a class='btn btn-primary' href='plantillas/".$IdPlantilla.".docx' download='Plantilla".$f['PlantillaNombre'].".docx'>Descargar</a>";
            $ArchivoPlantilla = $WebsiteURL."/plantillas/".$IdPlantilla.".docx";
            echo "
           <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=".$ArchivoPlantilla."' 
            width='100%' height='100%' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.
            </iframe>
            ";

           echo '</div>
          
        </div>
      </div>';
    }
        
    } else {
        echo '<div class="alert alert-danger container" role="alert">
        No se ha podido localizar la plantilla con el Id = '.$IdPlantilla.'
      </div>';
    }
    
}



?>



<?php


?>
</center>
<?php 

    include("footer.php");
?>