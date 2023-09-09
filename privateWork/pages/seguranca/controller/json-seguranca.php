<?php
    include_once '../../../../privateWork/pages/validar-login.php';

    require_once '../../../../Classes/Seguranca.php';

    $seguranca = new Seguranca();

    if(isset($_GET['idSeguranca'])){

        $id = $_GET['idSeguranca'];
        $list = $seguranca->listarUpdate($id);
    }
    echo json_encode($list);



?>