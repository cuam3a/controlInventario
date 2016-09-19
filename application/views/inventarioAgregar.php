<div class="container">
  <a href="<?php echo base_url('index.php/ControlInventario'); ?>">
    <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Regresar
    </button>
  </a>

  <h1><span class="label label-info">Agregar Producto</span></h1>

  <?php
  if(validation_errors()){
    echo "<div class='alert alert-danger'>".validation_errors()."</div>";
  }

  ?>

  <?php echo form_open_multipart(('controlInventario/guardar')); ?>

  <div class="row">

    <div class="col-sm-6" style="margin-top:50px">
      <span class="label label-success">Nombre Producto</span>
      <input type="text" name="nomProd" value="<?php echo set_value('nomProd') ?>" class="form-control"/>
    </div>
    <div class="col-sm-6" style="margin-top:50px">
      <span class="label label-success">Categoria</span>
      <select name="idCatg" class="form-control">
        <?php
          foreach ($categoria->result() as $row) {
            echo "<option value=".$row->idCateg.">".$row->nomCateg."</option>";
          }
        ?>
      </select>
    </div>

    <div class="col-sm-6" style="margin-top:50px">
      <span class="label label-success">Imagen</span>
      <input type="file" name="imgProd" class="form-control"/>
    </div>
    <div class="col-sm-6" style="margin-top:50px">
      <span class="label label-success">Descripcion</span>
      <input type="text" name="descProd" value="<?php echo set_value('descProd') ?>" class="form-control"/>
    </div>

    <div class="col-sm-4" style="margin-top:50px">
      <span class="label label-success">Cantidad</span>
      <input type="text" name="cantProd" value="<?php echo set_value('cantProd') ?>" class="form-control"/>
    </div>
    <div class="col-sm-4" style="margin-top:50px">
      <span class="label label-success">Unidad Medida</span>
      <select name="idUM" class="form-control">
        <?php
          foreach ($unidadmedida->result() as $row) {
            echo "<option value=".$row->idUM.">".$row->descUM."</option>";
          }
        ?>
      </select>
    </div>
    <div class="col-sm-4" style="margin-top:50px">
      <span class="label label-success">Precio</span>
      <input type="text" name="precioProd" value="<?php echo set_value('precioProd') ?>" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-success form-control" style="margin-top:50px">Guardar</button>
  </div>

  <?php echo form_close(); ?>
</div>
