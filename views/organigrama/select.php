<select class="form-select" aria-label="Default select" name="organigrama" id="organigrama">
  <option selected="">Selecciona el puesto del organigrama</option>
  <?php while($organigrama = $organigramas->fetch_object()): ?>
  <option value="<?=$organigrama->ID_ORGANIGRAMA;?>"><?=$organigrama->AREA;?></option>
  <?php endwhile; ?>
</select>