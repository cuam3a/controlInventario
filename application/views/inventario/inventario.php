<div>
  <li>
    <lu>c</lu>
    <lu><a href="<?php echo base_url('index.php/inventario/inventarioInicial'); ?>">Inventario Inicial</a></lu>
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
      <td>
      </td>
      <td>
      </td>
    </tr>
  <?php
    if($datos != null){
      foreach ($datos->result() as $row) {
        echo"<tr>";
          echo "<td>".$row->idProd."</td>";
          echo "<td>".$row->nomCateg."</td>";
          echo "<td>".$row->nombreProd."</td>";
          echo "<td>".$row->imgProd."</td>";
          echo "<td>".$row->descProd."</td>";
          echo "<td>".$row->unidadMedida."</td>";
          echo "<td>".$row->precioProd."</td>";
          echo "<td>".$row->cantidadProd."</td>";
          $total = $row->precioProd*$row->cantidadProd;
          echo "<td>".$total."</td>";
          echo "<td><a href=".base_url('index.php/inventario/editar/'.$row->idProd.'')."><button>Editar</button></a></td>";
          echo "<td><a href=".base_url('index.php/inventario/eliminar/'.$row->idProd.'/'.$row->imgProd.'')."><button>Eliminar</button></a></td>";
        echo"</tr>";
      }
    }else{
      echo "No hya datos";
    }
  ?>
  </table>
</div>
