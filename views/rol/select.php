<select class="form-select" aria-label="Default select" name="rol" id="rol">
  <option selected="">Selecciona el Rol</option>
  <?php while($rol = $roles->fetch_object()): ?>
  <option value="<?=$rol->ID_ROL;?>"><?=$rol->NOMBRE_ROL;?></option>
  <?php endwhile; ?>
</select>