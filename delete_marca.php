<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  $categorie = find_by_id('categories',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","ID de la marca falta.");
    redirect('administrar_marca.php');
  }
?>
<?php
  $delete_id = delete_by_id('categories',(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","Marca eliminada");
      redirect('administrar_marca.php');
  } else {
      $session->msg("d","Eliminación falló");
      redirect('administrar_marca.php');
  }
?>
