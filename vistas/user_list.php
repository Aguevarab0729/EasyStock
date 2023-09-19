<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Usuarios</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Administración de Usuarios</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="card">
    <br>
    <div class="card-body">
      <div class="table-responsive">
        <?php
            require_once "./php/main.php";

            # Eliminar usuario #
            if(isset($_GET['user_id_del'])){
                require_once "./php/usuario_eliminar.php";
            }

            if(!isset($_GET['page'])){
                $pagina=1;
            }else{
                $pagina=(int) $_GET['page'];
                if($pagina<=1){
                    $pagina=1;
                }
            }

            $pagina=limpiar_cadena($pagina);
            $url="index.php?vista=user_list&page=";
            $registros=15;
            $busqueda="";

            # Paginador usuario #
            require_once "./php/usuario_lista.php";
        ?>
      </div>
    </div>
  </div>
</section>