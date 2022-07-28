<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $cliente = find_by_id('clientes',(int)$_GET['id']);
  if(!$cliente){
    $session->msg("d","ID de la categoría falta.");
    redirect('administrar_cliente.php');
  }
?>
<?php
  $delete_id = delete_by_id('clientes',(int)$cliente['id']);
  if($delete_id){
      $session->msg("s","cliente eliminado");
      redirect('administrar_cliente.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('administrar_cliente.php');
  }
?>
