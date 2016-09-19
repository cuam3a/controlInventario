<div>
  <h3>Agregar Producto</h3>

  <p><?php echo validation_errors(); ?></p>

  <?php echo form_open_multipart(('inventario/guardar')); ?>
  <center><label>Nombre Producto</label><center>
  <center>
    <input type="text" name="nombreProd"/>
  <center>

  <center><label>Categoria</label><center>
  <center>
    <select name="idCateg">
      <?php
        foreach ($categoria->result() as $row) {
          echo "<option value=".$row->idCateg.">".$row->nomCateg."</option>";
        }
      ?>
    </select>
  <center>

  <center><label>Imagen</label><center>
  <center>
    <input type="file" name="imgProd"/>
  <center>

  <center><label>Descripcion</label><center>
  <center>
    <input type="text" name="descProd"/>
  <center>

  <center><label>Unidad Medida</label><center>
  <center>
    <select name="idUM">
      <?php
        foreach ($unidadmedida->result() as $row) {
          echo "<option value=".$row->idUM.">".$row->unidadMedida."</option>";
        }
      ?>
    </select>
  <center>

  <center><label>Precio</label><center>
  <center>
    <input type="text" name="precioProd"/>
  <center>

  <center><label>Cantidad</label><center>
  <center>
    <input type="text" name="cantidadProd"/>
  <center>

  <center>
    <button type="submit" name="Guardar" value="Guardar">Guardar</button>
  </center>
  <?php echo form_close(); ?>
</div>
