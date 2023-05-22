<h1>Crear usuario</h1>

<h4 class="mb-3">Registro de usuarios</h4>
        <form class="needs-validation" action="<?=base_url?>usuarios/save" method="POST">
          <div class="row g-3">
            

            <div class="col-sm-4">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required>
            </div>

            <div class="col-sm-4">
              <label for="apellidop" class="form-label">Apellido paterno</label>
              <input type="text" class="form-control" id="apellidop" name="apellidop" placeholder="Apellido paterno" value="" required>
            </div>
            
            <div class="col-sm-4">
              <label for="apellidom" class="form-label">Apellido materno</label>
              <input type="text" data-provide="datepicker" class="form-control" id="apellidom" name="apellidom" placeholder="Apellido materno" value="" required>
            </div>
            
            <div class="col-sm-5">
              <label for="rol" class="form-label"></label>
              <?php
                $rol = new rolController();
                $rol->select()
              ?>
            </div>

            <div class="col-sm-5">
              <label for="organigrama" class="form-label"></label>
              <?php
                $organigrama = new organigramaController();
                $organigrama->select()
              ?>
            </div>

            <div class="col-sm-2">
            <label for="organigrama" class="form-label">Activo/Inactivo</label>
              <div class="form-check form-switch">
                <input class="form-check-input" value="1" type="checkbox" id="active" name="active" checked="" kl_vkbd_parsed="true">
                <label class="form-check-label" for="formSwitchCheckChecked">Activo</label>
              </div>
            </div>

            <div class="col-12">
              <label for="usuario" class="form-label">Usuario</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
              </div>
            </div>

            <div class="col-12">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Guardar</button>
        </form>