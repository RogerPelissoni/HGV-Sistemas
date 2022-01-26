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
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];

    $insert = MySql::conectar()->prepare("INSERT INTO `tb_enderecos` VALUES (NULL,?,?,?)");
    $insert->execute(array($cidade, $cep, $uf));
    if ($insert) {
        $message = true;
    }
    echo json_encode($message);
}
