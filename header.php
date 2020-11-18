<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php"><img src="img/Logo_large_white.png" style="width:150px; margin:-12px; padding:0px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active" style="color:white; margin-left:20px;">
          <!-- <a class="nav-link" href="#">Registrar</a> -->
          <?php echo $GePlaDoc_IdUserName."<br><cite style='font-size:8ptM'>".$GePlaDoc_IdUser."
           
          </cite>";?>
        </li>
    
       
        
       
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Plantilla" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>  -->
        <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-left:10px;">
        <a href="registrar.php" style="
        display:block; color:white; width:100%; height:100%;
        ">Registrar</a>
         </button>

         <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-left:10px;">
        <a href="api.php" style="
        display:block; color:white; width:100%; height:100%;
        ">API</a>
         </button>

         <button class="btn btn-primary my-2 my-sm-0" type="submit" style="margin-left:10px;">
        <a href="variables.php" style="
        display:block; color:white; width:100%; height:100%;
        ">Variables</a>
         </button>

        <button class="btn btn-danger my-2 my-sm-0" type="submit" style="margin-left:5px;"><a href="logout.php" style="
        display:block; color:white; width:100%; height:100%;
        ">Salir</a></button>
      </form>
    </div>
  </nav>
</header>
<div style="margin-top:70px;"></div>