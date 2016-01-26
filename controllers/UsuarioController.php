<?php
/**
 * @package Exemplo simples com MVC
 * @author DigitalDev
 * @version 0.1.1
 * 
 * Camada - Controladores ou Controllers
 * Diretório Pai - controllers 
 * 
 * Controlador que deverá ser chamado quando não for
 * especificado nenhum outro
 */
class UsuarioController {

    /**
     * Ação que deverá ser executada quando 
     * nenhuma outra for especificada, do mesmo jeito que o
     * arquivo index.html ou index.php é executado quan do nenhum é
     * referenciado
     */
    public function loginAction() {
        /*$calendario = new CalendarioModel();
        $v_calendario = $calendario->_list();
        global $json_calendario; 
        $json_calendario =  json_encode($v_calendario);
        
        $desempenho = new DesempenhoModel();
        $v_desempenho = $desempenho->_list();
        global $qtd_acoes;
        $qtd_acoes = $v_desempenho->getQtd_acoes();*/
        $o_view = new View('views/login.phtml');
        var_dump($o_view);
        $o_view->showContents();
        var_dump("o_view");
    }

}

?>