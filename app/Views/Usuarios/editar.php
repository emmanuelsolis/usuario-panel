
<?=$cabecera?>
<!-- <?php 
    print_r($usuario);
    ?> -->
    <h1 class="col-md-6 mx-auto">Actualizar Datos</h1><br><br>
    <form class="row g-3 col-md-6 mx-auto" method="POST" action="<?= site_url('/actualizar') ?>">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" value="<?=$usuario['nombre']?>" name="nombre">
  </div>
  <div class="col-md-6">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" value="<?=$usuario['apellido']?>" name="apellido">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" value="<?=$usuario['email']?>" name="email">
  </div>
  <div class="col-md-6">
    <label for="contraseña" class="form-label">Password</label>
    <input type="password" class="form-control" >
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar Datos</button>
  </div>
</form>
<?=$piePagina?>