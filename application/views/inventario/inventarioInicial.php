<div>
  <li>
  </li>
  <table align="center">
    <tr>
      <td>
        <h4>ID</h4>
      </td>
      <td>
        <h4>Categoria</h4>
      </td>
      <td>
        <h4>Nombre</h4>
      </td>
      <td>
        <h4>Imagen</h4>
      </td>
      <td>
        <h4>Descripcion</h4>
      </td>
      <td>
        <h4>UnidadMedida</h4>
      </td>
      <td>
        <h4>PrecioUnitario</h4>
      </td>
      <td>
        <h4>Cantidad</h4>
      </td>
      <td>
        <h4>Total</h4>
      </td>
    </tr>
  <?php
  echo form_open('inventario/guardarInventarioInicial');
    if($datos != null){

      foreach ($datos->result() as $row) {
        echo"<tr>";
          echo "<td><input type='text' name='idProd[]"."' value='".$row->idProd."' readonly/></td>";
          echo "<td><input type='text' value='".$row->nomCateg."' readonly/></td>";
          echo "<td><input type='text' value='".$row->nombreProd."' readonly/></td>";
          echo "<td><input type='text' value='".$row->imgProd."' readonly/></td>";
          echo "<td><input type='text' value='".$row->descProd."' readonly/></td>";
          echo "<td><input type='text' value='".$row->unidadMedida."' readonly/></td>";
          echo "<td><input type='text'  value='".$row->precioProd."' readonly/></td>";
          echo "<td><input type='text' name='cantidadProd[]"."' value='0' value='".$row->cantidadProd."'/></td>";
          $total = $row->precioProd*$row->cantidadProd;
          echo "<td><input type='text' value='".$total."' readonly/></td>";

        echo"</tr>";

      }
    }else{
      echo "No hay datos";
    }
  ?>
  </table>
  <button type="submit">Guardar</button></a>
  <?php

    echo form_close();
  ?>
</div>
