<div class="row">
<?php while($user = $usuarios->fetch_object()): ?>
  <div class="col-3">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$user->ID_USUARIO;?> - <?=$user->USUARIO;?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?=$user->NOMBRE;?> <?=$user->APELLIDO_PATERNO;?> <?=$user->APELLIDO_MATERNO;?></h6>
    <p class="card-text">Puesto: <?=$user->NOMBRE_ROL;?> <br> Area: <?=$user->AREA;?></p>
    <a href="#" class="card-link">Editar</a>
    <a href="#" class="card-link">Borrar</a>
  </div>
</div>
</div>
<?php endwhile; ?>
</div>