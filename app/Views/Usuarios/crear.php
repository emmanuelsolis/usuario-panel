<?= $cabecera ?>
<h1>Formulario de Registro</h1>
<form class="row g-3" method="POST" action="<?=site_url('/guardar') ?>">
  <form class="row g-3">
    <div class="col-md-6">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="col-md-6">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </form>
 
<?= $piePagina ?>