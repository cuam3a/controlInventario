
<div class="container">
  <div class="row">
    <?php
      echo form_open('controlInventario/buscarCategoria');
    ?>
    <div class="col-sm-4">
      <span class="label label-default">Filtrar por Categoria</span>
      <select name="idCatg" class="form-control">
        <?php
          foreach ($categoria->result() as $row) {
            echo "<option value=".$row->idCateg.">".$row->nomCateg."</option>";
          }
        ?>
        <option value="Todo" selected>Todo</option>
      </select>
    </div>
    <div class="col-sm-4" style="margin-top:25px">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
    <?php
      echo form_close();
    ?>
    <div class="col-sm-4">
      <span class="label label-default">Agregar Nuevo Producto</span>
      <a href="<?php echo base_url('index.php/ControlInventario/agregar'); ?>"><button class="btn btn-success btn-lg">Agregar</button></a>
    </div>





    <table align="center" class="table table-striped">
      <tr>
        <td><h4>ID</h4></td>
        <td><h4>Nombre</h4></td>
        <td><h4>Categoria</h4></td>
        <td><h4>Cantidad</h4></td>
        <td><h4>UM</h4></td>
        <td><h4>PrecioUnitario</h4></td>
        <td><h4>Total</h4></td>
        <td></td>
        <td></td>
      </tr>
    <?php
      if($datos != null){
        foreach ($datos->result() as $row) {
          echo"<tr>";
            echo "<td>".$row->idProd."</td>";
            echo "<td>".$row->nomProd."</td>";
            echo "<td>".$row->nomCateg."</td>";
            echo "<td>".$row->cantProd."</td>";
            echo "<td>".$row->descUM."</td>";
            echo "<td>".$row->precioProd."</td>";
            $total = $row->precioProd*$row->cantProd;
            echo "<td>".$total."</td>";
            echo "<td><a href=".base_url('index.php/controlInventario/detalles/'.$row->idProd.'')."><button class='btn btn-info' >Detalles</button></a></td>";
            echo "<td><a href=".base_url('index.php/controlInventario/eliminar/'.$row->idProd.'/'.$row->imgProd.'')."><button class='btn btn-danger'>Eliminar</button></a></td>";
          echo"</tr>";
        }
      }else{
        
      }
    ?>
    </table>
  </div>
</div>
