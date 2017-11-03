<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
  if(group_in_use((int)$_GET['id'])){
      $session->msg("d","No se pudó eliminar ya que existen usuarios con ese Rol asignado.");
      redirect('group.php');
  }
  else{
    $delete_id = delete_by_id('user_groups',(int)$_GET['id']);
    if($delete_id){
        $session->msg("s","Rol eliminado.");
        redirect('group.php');
    } else {
        $session->msg("d","Falló la eliminación del Rol.");
        redirect('group.php');
    }
  }
?>
