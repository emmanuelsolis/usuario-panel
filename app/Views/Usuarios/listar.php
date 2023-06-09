<?= $cabecera ?>
<h1 align="center">Lista de usuarios registrados</h1><br><br>

<table class="table table-bordered table-light" style="text-align:center; width:50%; margin:auto">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">mail</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario) : ?>
      <tr>
        <th scope="row"><?= $usuario['id']; ?></th>
        <td><?= $usuario['nombre']; ?></td>
        <td><?= $usuario['apellido']; ?></td>
        <td><?= $usuario['email']; ?></td>
        <td><a href="<?=base_url('editar/'.$usuario['id'])?>" class="btn btn-primary">Editar</a> <a href="<?=base_url('eliminar/'.$usuario['id']);?>" class="btn btn-danger">Eliminar</a></td>
      </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="5"><a class="btn btn-success float-start"  href="<?= base_url('crear') ?>">Crear un nuevo Usuario</a></td>
      </tr>
  </tbody>
</table>
<?= $piePagina ?>