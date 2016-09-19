<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class ControlInventario extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('producto','',TRUE);
 }

 function index()
 {
   $data = array(
     'datos' => $this->producto->getProducto(),
     'categoria' => $this->producto->getCategoria()
   );

   $this->load->view('header');
   $this->load->view('inventario',$data,FALSE);
   $this->load->view('footer');
 }

 public function detalles($id)
 {
   $data = array(
     'datos' => $this->producto->detalles($id)
   );

   $this->load->view('header');
   $this->load->view('inventarioDetalles',$data,FALSE);
   $this->load->view('footer');
 }

 public function agregar()
 {

   $data = array(
     'categoria' => $this->producto->getCategoria(),
     'unidadmedida' => $this->producto->getUnidadMedida()
   );
   $this->load->view('header');
   $this->load->view('inventarioAgregar',$data);
   $this->load->view('footer');

 }

 public function guardar()
 {
   $this->form_validation->set_rules('nomProd', 'Nombre', 'required');
   $this->form_validation->set_rules('descProd', 'Descripcion', 'required');
   $this->form_validation->set_rules('precioProd', 'Precio', 'trim|required');
   $this->form_validation->set_rules('cantProd', 'Cantidad', 'trim|required');

   if ($this->form_validation->run() == FALSE)
   {
     $data = array(
       'categoria' => $this->producto->getCategoria(),
       'unidadmedida' => $this->producto->getUnidadMedida()
     );
     $this->load->view('header');
     $this->load->view('inventarioAgregar',$data);
     $this->load->view('footer');
   }else{

   $config['upload_path']          = './imgProductos/';
   $config['allowed_types']        = 'gif|jpg|png';
   $config['max_size']             = 10000;
   $config['max_width']            = 10240;
   $config['max_height']           = 7680;

   $this->load->library('upload', $config);

   $this->upload->do_upload('imgProd');

   $file_name = $this->upload->data('file_name');


   $data = array(
      'nomProd' => $this->input->post("nomProd",TRUE),
      'idCatg' => $this->input->post("idCatg",TRUE),
      'imgProd' => $file_name,
      'descProd' => $this->input->post("descProd",TRUE),
      'idUM' => $this->input->post("idUM",TRUE),
      'precioProd' => $this->input->post("precioProd",TRUE),
      'cantProd' => $this->input->post("cantProd",TRUE)
    );

   $this->producto->guardarDatos($data);

   redirect('controlInventario', '');
  }
 }

 public function buscarCategoria()
 {
   $catg = $this->input->post("idCatg",TRUE);

   if($catg == "Todo"){
     $datos = $this->producto->getProducto();
   }else{
     $datos = $this->producto->buscarCategoria($catg);
   }

   $data = array(
     'datos' => $datos,
     'categoria' => $this->producto->getCategoria()
   );

   $this->load->view('header');
   $this->load->view('inventario',$data,FALSE);
   $this->load->view('footer');
 }

 public function eliminar($id,$img)
 {
   unlink('./imgProductos/'.$img);

   $this->producto->eliminar($id);
   redirect('controlInventario', '');
 }

}

?>
