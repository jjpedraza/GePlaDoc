<?php 
    include("head.php");
    include("header.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md">

    <div class="alert alert-secondary" role="alert">
    El Werbservice recibe por POST, los siguientes valores:
    </div>

    <div class="alert alert-primary" role="alert">
        URL: <?php echo $URLWebservice; ?>
    </div>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Variable:</th>
        <th scope="col">Tipo:</th>
        <th scope="col">Valor:</th>
        
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">ApiKey</th>
        <td>Alfanumerica (16)</td>
        <td><?php echo $TokenKey; ?></td>
        
        </tr>
        <tr>

        <th scope="row">IdPlantilla</th>
        <td>Numerica Entera (5)</td>
        <td></td>
        
        </tr>

        <tr>
        <th scope="row">NEmpleado</th>
        <td>Alfanumerica (10)</td>
        <td></td>           
        </tr>

        <?php        
        for ($i = 1; $i <= 180; $i++) {
            echo '
            <tr>
            <th scope="row">VC'.str_pad($i, 3, "0", STR_PAD_LEFT).'</th>
            <td>Alfanumerica (200)</td>
            <td></td>           
            </tr>';
        }
        
        ?>
    </tbody>
    </table>

    </div>

    <div class="col-sm">
    <div class="alert alert-success" role="alert">
        La respuesta se recibe en JSON, son los siguientes datos:
    </div>
      <code>
        {<br>
            "exito":"TRUE",<br>
            "urlfile":"https://dominio.com/filedoc.docx",<br>
            "msg":"Archivo creado satisfactoriamente",<br>
            "embed":"https://view.officeapps.live.com/op/embed.aspx?src="<br>
        }
    </code>
    </div>
    
   

    </div>
</div>
<?php 
    include("footer.php");
?>