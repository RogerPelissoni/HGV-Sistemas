<?php
include('../config.php');

$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];

if (empty($cidade)) {
    $message = ['status' => 'cidadeInvalido',];
    echo json_encode($message);
} else if (!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep)) {
    $message = ['status' => 'cepInvalido',];
    echo json_encode($message);
} else if (empty($uf)) {
    $message = ['status' => 'ufInvalido',];
    echo json_encode($message);
} else {
    $id = $_POST['id'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    
$update = MySql::conectar()->prepare("UPDATE `tb_enderecos` SET `cidade` = ?, `cep` = ?, `uf` = ? WHERE id = ? ");
$update->execute(array($cidade,$cep,$uf,$id));
if($update){
    $message = true;
}
echo json_encode($message);
}