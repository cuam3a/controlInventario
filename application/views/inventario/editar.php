<div>
  <h3>Editar Producto</h3>

  <p><?php echo validation_errors(); ?></p>

  <?php
  foreach($datos->result() as $row){
  echo form_open_multipart(('inventario/guardarEditar/'.$row->idProd));

  ?>

  <center><label>Nombre Producto</label><center>
  <center>
    <input type="text" name="nombreProd" value="<?php echo $row->nombreProd ?>"/>
  <center>

  <center><label>Categoria</label><center>
  <center>
    <select name="idCateg">
      <?php
          foreach ($categoria->result() as $catg) {
            if($catg->idCateg == $row->idCateg){
              echo "<option value=".$catg->idCateg." selected>".$catg->nomCateg."</option>";
            }else{
              echo "<option value=".$catg->idCateg." >".$catg->nomCateg."</option>";
            }
          }


      ?>
    </select>
  <center>

  <center><label>Imagen</label><center>
  <center>
    <img src="<?php echo base_url('imgProductos/'.$row->imgProd)  ?>" width="100px" height="100px"/>
    <input type="text" name="imgProd" value="<?php echo $row->imgProd ?>" readonly/>
    <input type="file" name="nimgProd" />
  <center>

  <center><label>Descripcion</label><center>
  <center>
    <input type="text" name="descProd" value="<?php echo $row->descProd ?>"/>
  <center>

  <center><label>Unidad Medida</label><center>
  <center>
    <select name="idUM">
      <?php
        foreach ($unidadmedida->result() as $uni) {
          if($uni->idUM == $row->idUM){
            echo "<option value=".$uni->idUM." selected>".$uni->unidadMedida."</option>";
          }else{
            echo "<option value=".$uni->idUM." >".$uni->unidadMedida."</option>";
          }
        }
      ?>
    </select>
  <center>

  <center><label>Precio</label><center>
  <center>
    <input type="text" name="precioProd" value="<?php echo $row->precioProd ?>"/>
  <center>

  <center><label>Cantidad</label><center>
  <center>
    <input type="text" name="cantidadProd" value="<?php echo $row->cantidadProd ?>"/>
  <center>

  <center>
    <button type="submit" name="Editar" value="Editar">Editar</button>
  </center>

  <?php
}
  echo form_close(); ?>
</div>
