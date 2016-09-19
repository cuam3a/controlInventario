<div class="container">
  <a href="<?php echo base_url('index.php/ControlInventario'); ?>">
    <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Regresar
    </button>
  </a>

  <h1><span class="label label-info">Detalles Producto</span></h1>



  <?php
  foreach($datos->result() as $row){
  ?>

  <div class="row">

    <div class="col-sm-8">
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url('imgProductos/'.$row->imgProd)  ?>" width="150px" height="150px"/>
    </div>

    <div class="col-sm-6" style="margin-top:50px">
      <span class="label label-success">Nombre Producto</span>
      <input type="text" name="nombreProd" value="<?php echo $row->nomProd ?>" class="form-control"/>
    </div>
    <div class="col-sm-6" style="margin-top:50px">
      <span class="label label-success">Categoria</span>
      <input type="text" name="nomCateg" value="<?php echo $row->nomCateg ?>" class="form-control"/>
    </div>

    <div class="col-sm-12" style="margin-top:50px">
      <span class="label label-success">Descripcion</span>
      <input type="text" name="descProd" value="<?php echo $row->descProd ?>" class="form-control"/>
    </div>

    <div class="col-sm-4" style="margin-top:50px">
      <span class="label label-success">Cantidad</span>
      <input type="text" name="cantidadProd" value="<?php echo $row->cantProd ?>" class="form-control"/>
    </div>
    <div class="col-sm-4" style="margin-top:50px">
      <span class="label label-success">Unidad Medida</span>
      <input type="text" name="descProd" value="<?php echo $row->descUM ?>" class="form-control"/>
    </div>
    <div class="col-sm-4" style="margin-top:50px">
      <span class="label label-success">Precio</span>
      <input type="text" name="precioProd" value="<?php echo $row->precioProd ?>" class="form-control"/>
    </div>

  </div>
  <?php

}
  ?>
</div>
