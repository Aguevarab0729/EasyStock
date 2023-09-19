<aside class="main-sidebar sidebar-light-primary elevation-4">
  <a href="index.php?vista=home" class="brand-link">
    <img src="./views/src/dist/img/easyStock-logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Easy Stock</span>
  </a>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <br>
      <li class="nav-item">
        <a class="nav-link">
          ** <?php echo $_SESSION['usuario']; ?> **
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-cog"></i>
          <p>
            General
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?vista=user_new" class="nav-link">
              <i class="far fas fa-users nav-icon"></i>
              <p>Nuevo Usuario</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=user_list" class="nav-link">
              <i class="far fas fa-users nav-icon"></i>
              <p>Lista de usuarios</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=user_search" class="nav-link">
              <i class="far fas fa-users nav-icon"></i>
              <p>Buscador</p>
            </a>
          </li>
        </ul>
      </li>
      <br>
      <li class="nav-header">C B U</li>
      <br>
      <li class="nav-item">
        <a href="inventario" class="nav-link">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Categoria
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?vista=category_new" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Agregar Categoria</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=category_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Lista Categorias</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=category_search" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buscador</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="inventario" class="nav-link">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Producto
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.php?vista=product_new" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Agregar Producto</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=product_list" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Lista de productos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=product_category" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Productos por categoria</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?vista=product_search" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buscador</p>
            </a>
          </li>
        </ul>
      </li>
      

      <br>
      <li class="nav-header"><hr></li>
      <br>
      <li class="nav-item">
        <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="nav-link">
          <p>Mi cuenta</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="index.php?vista=logout" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>Cerrar Sesión</p>
        </a>
      </li>
    </ul>
  </nav>
  </div>
</aside>
