<?php
    include_once '../../../../privateWork/pages/validar-login.php';
    require_once '../../../../Classes/Decoracao.php';

    $decoracao = new Decoracao();

    if(isset($_POST['editIdItem'])){

        // header("Location: ../form-itemDecoracao.php");

        $id = $_POST['editIdItem'];
        $nome = $_POST['editNomeItem'];

        if(isset($id)){

            $decoracao->setIdItemDecoracao($id);
            $decoracao->setNomeItemDecoracao($nome);
    
            if($decoracao->updateItem($decoracao) == true){
                $retorna = ['error' => false, 'title' => 'Atualizado com Sucesso!', 'msg' => 'Recarregando página para salvar as alterações.'];
    
    
            } else if($decoracao->updateItem($decoracao) == false){
                $retorna = ['error' => true, 'title' => 'Oops!', 'msg' => 'Ocorreu um probleminha.<br>Tente Novamente.'];
            }
            
        }
        
    }

    echo json_encode($retorna);
?>