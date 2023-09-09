<?php
    include_once '../../../../privateWork/pages/validar-login.php';
    require_once '../../../../Classes/Buffet.php';
    $buffet = new Buffet();



    if(isset($_POST['editIdBuffet'])){

        $id = $_POST['editIdBuffet'];
        $nome = $_POST['editNomeBuffet'];
        $valor = $_POST['editValorBuffet'];
        $desc = $_POST['editDescBuffet'];


        if(!empty($nome) && !empty($valor) && !empty($desc)){
            
            $buffet->setIdBuffet($id);

            $buffet->setNomeBuffet($nome);
            $buffet->setDescricaoBuffet($desc);
            $buffet->setValorBuffet($valor);
            
            if($buffet->update($buffet) == true){
                $retorna =  ['error' => false, 'title' => 'Atualizado com Sucesso!', 'msg' => 'Recarregando a página para salvar as alterações.'];

            }else{
                $retorna =  ['error' => true, 'title' => 'Oops!', 'msg' => 'Ocorreu um erro na hora de atualizar.<br>Tente novamente mais tarde.'];

            }
        }

    }

    echo json_encode($retorna);
?>