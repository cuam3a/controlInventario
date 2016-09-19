<?php
Class Producto extends CI_Model
{
 function getProducto()
 {
    $query = $this -> db -> query ('SELECT producto.idProd,
                                  categoria.nomCateg,
                                  producto.nomProd,
                                  producto.imgProd,
                                  producto.descProd,
                                  unidadmedida.descUM,
                                  producto.precioProd,
                                  producto.cantProd
                                  FROM
                                  producto
                                  INNER JOIN categoria on
                                  categoria.idCateg = producto.idCatg
                                  INNER JOIN unidadmedida on
                                  producto.idUM = unidadmedida.idUM');

   if($query -> num_rows() > 0)
   {
     return $query;
   }
   else
   {
     return false;
   }
 }

function getCategoria()
{
   $query = $this -> db -> get('categoria');

   if($query -> num_rows() > 0)
   {
     return $query;
   }
   else
   {
     return false;
   }
 }

 function getUnidadMedida()
 {
    $query = $this -> db -> get('unidadmedida');

    if($query -> num_rows() > 0)
    {
      return $query;
    }
    else
    {
      return false;
    }
 }

 function guardarDatos($data)
 {
   $this -> db -> insert('producto', $data);
 }

 function detalles($id)
 {
   $query = $this -> db -> query ('SELECT producto.idProd,
                                 categoria.nomCateg,
                                 producto.nomProd,
                                 producto.imgProd,
                                 producto.descProd,
                                 unidadmedida.descUM,
                                 producto.precioProd,
                                 producto.cantProd
                                 FROM
                                 producto
                                 INNER JOIN categoria on
                                 categoria.idCateg = producto.idCatg
                                 INNER JOIN unidadmedida on
                                 producto.idUM = unidadmedida.idUM
                                 WHERE idProd='.$id);
   if($query -> num_rows() > 0)
   {
     return $query;
   }
   else
   {
     return false;
   }
  }

  function buscarCategoria($catg){
    $query = $this -> db -> query ('SELECT producto.idProd,
                                  categoria.nomCateg,
                                  producto.nomProd,
                                  producto.imgProd,
                                  producto.descProd,
                                  unidadmedida.descUM,
                                  producto.precioProd,
                                  producto.cantProd
                                  FROM
                                  producto
                                  INNER JOIN categoria on
                                  categoria.idCateg = producto.idCatg
                                  INNER JOIN unidadmedida on
                                  producto.idUM = unidadmedida.idUM
                                  WHERE idCatg='.$catg);
    if($query -> num_rows() > 0)
    {
      return $query;
    }
    else
    {
      return false;
    }
  }
 //
 //  function guardarDatosEditar($data,$id)
 //  {
 //    $this -> db -> where('idProd',$id);
 //    $this -> db -> update('producto', $data);
 //  }
 //
  function eliminar($id)
  {
    $this -> db -> where('idProd', $id);
    $this -> db -> delete('producto');
  }
 //
 //  function guardarInventarioInicial($data)
 //  {
 //
 //      $this -> db ->query('UPDATE producto SET cantidadProd = '.$data['cantidadProd'].' WHERE idProd ='.$data['idProd']);
 //
 //  }
 //
 //  function getFilasProducto()
 //  {
 //    $query = $this -> db -> get('producto');
 //    $result = $query -> num_rows();
 //    return $result;
 //  }
 //
 //  function getURLImagen($id)
 //  {
 //    $query = $this -> db ->query('SELECT imgProd FROM producto WHERE idProd='.$id);
 //
 //      return $query;
 //
 //
 //  }

}
?>
