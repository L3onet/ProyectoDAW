<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Rol</th>
      <th scope="col">Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Puesto</th>
      <th scope="col">Estado</th>
      <th scope="col"> </th>
      <th scope="col"> </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php while($user = $usuarios->fetch_object()): ?>
    <tr>
      <th scope="row"><?=$user->ID_USUARIO;?></th>
      <td><?=$user->NOMBRE_ROL;?></td>
      <td><?=$user->USUARIO;?></td>
      <td><?=$user->NOMBRE;?></td>
      <td><?=$user->APELLIDO_PATERNO;?></td>
      <td><?=$user->APELLIDO_MATERNO;?></td>
      <td><?=$user->AREA;?></td>
      <td>
        <?php
        if ($user->ESTADO == 1){
          echo '<div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="active" name="active" checked="" kl_vkbd_parsed="true" disabled>
                
          </div>';
        } else {
          echo '<div class="form-check form-switch">
          <input class="form-check-input" value="1" type="checkbox" id="active" name="active" kl_vkbd_parsed="true" disabled>
          
        </div>';
        }
        ?>
      </td>
      <td>
        <button type="button" class="w-100 btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#usuarioReadModal_<?=$user->ID_USUARIO;?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
          </svg>
        </button>
        <div class="modal fade" id="usuarioReadModal_<?=$user->ID_USUARIO;?>" tabindex="-1" aria-labelledby="usuarioReadModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Información del usuario: <?=$user->USUARIO;?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">ID</th>
                      <td><?=$user->ID_USUARIO;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Rol</th>
                      <td><?=$user->NOMBRE_ROL;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Usuario</th>
                      <td><?=$user->USUARIO;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Nombre</th>
                      <td><?=$user->NOMBRE;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Apellido Paterno</th>
                      <td><?=$user->APELLIDO_PATERNO;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Apellido Materno</th>
                      <td><?=$user->APELLIDO_MATERNO;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Puesto</th>
                      <td><?=$user->AREA;?></td>
                    </tr>
                    <tr>
                      <th scope="row">Estado</th>
                      <td><?php
        if ($user->ESTADO == 1){
          echo '<div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="active" name="active" checked="" kl_vkbd_parsed="true" disabled>
                
          </div>';
        } else {
          echo '<div class="form-check form-switch">
          <input class="form-check-input" value="1" type="checkbox" id="active" name="active" kl_vkbd_parsed="true" disabled>
          
        </div>';
        }
        ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </td>
      <td>
        <button type="button" class="w-100 btn btn-primary btn-xs">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
          </svg>
        </button>
      </td>
      <td>
        <button type="button" class="w-100 btn btn-danger btn-xs">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
          </svg>
        </button>
      </td>

    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
