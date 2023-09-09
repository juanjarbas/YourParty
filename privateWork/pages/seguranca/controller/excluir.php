<?php
include_once '../../../../privateWork/pages/validar-login.php';
require_once '../../../../Classes/Conexao.php';
require_once '../../../../Classes/Seguranca.php';

$seguranca = new Seguranca();

if (isset($_POST['excIdSeguranca'])) {
    // header("Location: ../form-seguranca.php");

    $id = $_POST['excIdSeguranca'];

    if (isset($id)) {


        if ($seguranca->delete($id) == true) {
            $retorna = ['error' => false, 'title' => 'Excluído com Sucesso', 'msg' => 'Recarregando a página para salvar as alterações.'];
        } else if ($seguranca->delete($id) == false) {
            $retorna = ['error' => true, 'title' => 'Oops!', 'msg' => 'Ocorreu um probleminha.<br>Tente novamente.'];
        }
    }
}

echo json_encode($retorna);
