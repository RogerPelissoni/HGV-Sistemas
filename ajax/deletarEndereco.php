<?php
include('../config.php');

$id = $_POST['id'];

$delete = MySql::conectar()->prepare("DELETE FROM `tb_enderecos` WHERE id = ?");
$delete->execute(array($id));
if($delete){
    $message = true;
}
echo json_encode($message);