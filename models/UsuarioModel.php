<?php

/**
 * @package Exemplo simples com MVC 
 * @author DigitalDev 
 * @version 0.1.1
 *  
 * Camada - Modelo ou Model.
 * Diretório Pai - models  
 * Arquivo - AcoesModel
 *
 * Responsável por gerenciar e persistir os dados de usuarios
 * */
class UsuarioModel extends PersistModelAbstract {

    private $id;
    private $nome;
    private $email;
    private $login;
    private $senha;
    private $status;
    private $dataCadastro;
    private $admin;

    function __construct() {
        parent::__construct();
    }

    /**
     * Setters e Getters da
     * classe UsuarioModel
     */
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getAdmin() {
        return $this->admin;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setAdmin($admin) {
        $this->admin = $admin;
    }

        /**
     * Retorna um array contendo os usuarios
     * @param string $projeto_nome
     * @return Array
     */
    public function _list($filtros = null) {
        $v_acoes = array();
        /*
        if (isset($filtros["btnEnviar"]) && !empty($filtros["btnEnviar"])) {
            $st_query = "SELECT * FROM acoes WHERE 1=1 AND ";
            $condicoes = array();
            if (isset($filtros['perspectiva']) && !empty($filtros['perspectiva'])) {
                $condicoes[] = "perspectiva_id = " . $filtros['perspectiva'];
            }
            if (isset($filtros['tema']) && !empty($filtros['tema'])) {
                $condicoes[] = "tema_id = " . $filtros['tema'];
            }
            if (isset($filtros['objetivo']) && !empty($filtros['objetivo'])) {
                $condicoes[] = "objetivo_id = " . $filtros['objetivo'];
            }
            if (isset($filtros['iniciativa']) && !empty($filtros['iniciativa'])) {
                $condicoes[] = "iniciativa_id = " . $filtros['iniciativa'];
            }
            if (isset($filtros['filtroacao']) && !empty($filtros['filtroacao'])) {
                $condicoes[] = "acao_id = " . $filtros['filtroacao'];
            }
            $st_query .= implode(" AND ", $condicoes);
            //echo $st_query;
            try {
                $o_data = $this->o_db->query($st_query);
                while ($o_ret = $o_data->fetchObject()) {
                    $o_acao = new AcoesModel();
                    $o_acao->setProjeto_id($o_ret->projeto_id);
                    $o_acao->setProjeto_nome($o_ret->projeto_nome);
                    $o_acao->setPerspectiva_id($o_ret->perspectiva_id);
                    $o_acao->setPerspectiva_nome($o_ret->perspectiva_nome);
                    $o_acao->setTema_id($o_ret->tema_id);
                    $o_acao->setTema_nome($o_ret->tema_nome);
                    $o_acao->setObjetivo_id($o_ret->objetivo_id);
                    $o_acao->setObjetivo_nome($o_ret->objetivo_nome);
                    $o_acao->setIniciativa_id($o_ret->iniciativa_id);
                    $o_acao->setIniciativa_nome($o_ret->iniciativa_nome);
                    $o_acao->setAcao_id($o_ret->acao_id);
                    $o_acao->setAcao_nome($o_ret->acao_nome);
                    $o_acao->setAcao_glossario($o_ret->acao_glossario);
                    $o_acao->setAcao_produto($o_ret->acao_produto);
                    $o_acao->setAcao_quantidade($o_ret->acao_quantidade);
                    $o_acao->setAcao_prazo($o_ret->acao_prazo);
                    $o_acao->setStatus_id($o_ret->status_id);
                    $o_acao->setStatus($o_ret->status);
                    $o_acao->setConclusao($o_ret->conclusao);
                    $o_acao->setResponsavel_login($o_ret->responsavel_login);
                    $o_acao->setResponsavel_nome($o_ret->responsavel_nome);
                    $o_acao->_listEtapas();
                    array_push($v_acoes, $o_acao);
                }
            } catch (PDOException $e) {
                
            }
        }*/
        return $v_acoes;
    }
    public function _listMonitoramento($filtros = null) {
        $v_acoes = array();
        if (isset($filtros["btnEnviar"]) && !empty($filtros["btnEnviar"])) {
            $st_query = "SELECT * FROM acoes WHERE 1=1 AND ";
            $condicoes = array();
            if (isset($filtros['perspectiva']) && !empty($filtros['perspectiva'])) {
                $condicoes[] = "perspectiva_id = " . $filtros['perspectiva'];
            }
            if (isset($filtros['tema']) && !empty($filtros['tema'])) {
                $condicoes[] = "tema_id = " . $filtros['tema'];
            }
            if (isset($filtros['objetivo']) && !empty($filtros['objetivo'])) {
                $condicoes[] = "objetivo_id = " . $filtros['objetivo'];
            }
            if (isset($filtros['iniciativa']) && !empty($filtros['iniciativa'])) {
                $condicoes[] = "iniciativa_id = " . $filtros['iniciativa'];
            }
            if (isset($filtros['filtroacao']) && !empty($filtros['filtroacao'])) {
                $condicoes[] = "acao_id = " . $filtros['filtroacao'];
            }
            $st_query .= implode(" AND ", $condicoes);
            //echo $st_query;
            try {
                $o_data = $this->o_db->query($st_query);
                while ($o_ret = $o_data->fetchObject()) {
                    $o_acao = new AcoesModel();
                    $o_acao->setProjeto_id($o_ret->projeto_id);
                    $o_acao->setProjeto_nome($o_ret->projeto_nome);
                    $o_acao->setPerspectiva_id($o_ret->perspectiva_id);
                    $o_acao->setPerspectiva_nome($o_ret->perspectiva_nome);
                    $o_acao->setTema_id($o_ret->tema_id);
                    $o_acao->setTema_nome($o_ret->tema_nome);
                    $o_acao->setObjetivo_id($o_ret->objetivo_id);
                    $o_acao->setObjetivo_nome($o_ret->objetivo_nome);
                    $o_acao->setIniciativa_id($o_ret->iniciativa_id);
                    $o_acao->setIniciativa_nome($o_ret->iniciativa_nome);
                    $o_acao->setAcao_id($o_ret->acao_id);
                    $o_acao->setAcao_nome($o_ret->acao_nome);
                    $o_acao->setAcao_glossario($o_ret->acao_glossario);
                    $o_acao->setAcao_produto($o_ret->acao_produto);
                    $o_acao->setAcao_quantidade($o_ret->acao_quantidade);
                    $o_acao->setAcao_prazo($o_ret->acao_prazo);
                    $o_acao->setStatus_id($o_ret->status_id);
                    $o_acao->setStatus($o_ret->status);
                    $o_acao->setConclusao($o_ret->conclusao);
                    $o_acao->setResponsavel_login($o_ret->responsavel_login);
                    $o_acao->setResponsavel_nome($o_ret->responsavel_nome);
                    $o_acao->_listEtapas();
                    array_push($v_acoes, $o_acao);
                }
            } catch (PDOException $e) {
                
            }
        }
        return $v_acoes;
    }

    public function _listEtapas() {
        $acao = $this->getAcao_id();
        $st_query = "SELECT * FROM etapas WHERE acao = $acao;";
        try {
            $o_data = $this->o_db->query($st_query);
            $v_etapas = array();
            while ($o_ret = $o_data->fetch(PDO::FETCH_ASSOC)) {
                $v_etapas[] = new EtapasModel($o_ret);
            }
            $this->setEtapas($v_etapas);
        } catch (PDOException $e) {
            
        }
    }

    public function acoesFiltros($filtros = "", $valor = "") {
        if (!is_null($filtros) && !empty($filtros)) {
            //$st_query = "SELECT DISTINCT perspectiva_id,perspectiva_nome FROM acoes WHERE perspectiva_nome LIKE '%" . utf8_decode($filtros['q']) . "%' ORDER BY perspectiva_nome";
            switch ($filtros) {
                case "tema" : $st_query = "SELECT DISTINCT tema_id as id,tema_nome as nome FROM acoes WHERE perspectiva_id = " . $valor . " ORDER BY nome";
                    break;
                case "objetivo" : $st_query = "SELECT DISTINCT objetivo_id as id,objetivo_nome as nome FROM acoes WHERE tema_id = " . $valor . " ORDER BY nome";
                    break;
                case "iniciativa" : $st_query = "SELECT DISTINCT iniciativa_id as id,iniciativa_nome as nome FROM acoes WHERE objetivo_id = " . $valor . " ORDER BY nome";
                    break;
                case "acao" :
                    if (is_array($valor)) {
                        $st_query = "SELECT DISTINCT acao_id as id,acao_nome as nome FROM acoes WHERE 1=1 AND ";
                        $condicoes = array();
                        if (isset($valor['perspectiva']) && !empty($valor['perspectiva'])) {
                            $condicoes[] = "perspectiva_id = " . $valor['perspectiva'];
                        }
                        if (isset($valor['tema']) && !empty($valor['tema'])) {
                            $condicoes[] = "tema_id = " . $valor['tema'];
                        }
                        if (isset($valor['objetivo']) && !empty($valor['objetivo'])) {
                            $condicoes[] = "objetivo_id = " . $valor['objetivo'];
                        }
                        if (isset($valor['iniciativa']) && !empty($valor['iniciativa'])) {
                            $condicoes[] = "iniciativa_id = " . $valor['iniciativa'];
                        }
                        $st_query .= implode(" AND ", $condicoes);
                    } else {
                        $st_query = "SELECT DISTINCT acao_id as id, acao_nome as nome FROM acoes ORDER BY id";
                    }
                    break;
            }
        } else {
            $st_query = "SELECT DISTINCT perspectiva_id as id, perspectiva_nome as nome FROM acoes ORDER BY nome";
        }
        //echo $st_query;
        try {
            $o_data = $this->o_db->query($st_query);
            $a_filtros = array();
            while ($o_ret = $o_data->fetchObject()) {
                $a_filtros[] = array("id" => $o_ret->id, "nome" => utf8_encode($o_ret->nome));
            }
            return $a_filtros;
        } catch (PDOException $e) {
            
        }
    }

    /**
     * Retorna os dados de um objetivo referente
     * a um determinado Id
     * @param integer $in_id
     * @return AcoesModel
     */
    public function loadById($acao_id) {
        $v_acoes = array();
        $st_query = "SELECT * FROM acoes WHERE acao_id = $acao_id;
                            ";
        $o_data = $this->o_db->query($st_query);
        $o_ret = $o_data->fetchObject();
        $this->setProjeto_id($o_ret->projeto_id);
        $this->setProjeto_nome($o_ret->projeto_nome);
        $this->setPerspectiva_id($o_ret->perspectiva_id);
        $this->setPerspectiva_nome($o_ret->perspectiva_nome);
        $this->setTema_id($o_ret->tema_id);
        $this->setTema_nome($o_ret->tema_nome);
        $this->setObjetivo_id($o_ret->objetivo_id);
        $this->setObjetivo_nome($o_ret->objetivo_nome);
        $this->setIniciativa_id($o_ret->iniciativa_id);
        $this->setIniciativa_nome($o_ret->iniciativa_nome);
        $this->setAcao_id($o_ret->acao_id);
        $this->setAcao_nome($o_ret->acao_nome);
        $this->setAcao_glossario($o_ret->acao_glossario);
        $this->setAcao_produto($o_ret->acao_produto);
        $this->setAcao_quantidade($o_ret->acao_quantidade);
        $this->setAcao_prazo($o_ret->acao_prazo);
        $this->setStatus_id($o_ret->status_id);
        $this->setStatus($o_ret->status);
        $this->setConclusao($o_ret->conclusao);
        $this->setResponsavel_login($o_ret->responsavel_login);
        $this->setResponsavel_nome($o_ret->responsavel_nome);
        return $this;
    }

    /**
     * Salva dados contidos na instancia da classe
     * na tabela de objetivo. Se o ID for passado,
     * um UPDATE será executado, caso contrário, um
     * INSERT será executado
     * @throws PDOException
     * @return integer
     */
    public function save() {
        if (is_null($this->in_id))
            $st_query = "INSERT INTO acoes
                            (
                            nome,
                            descricao
                            )
                            VALUES
                            (
                            '$this->st_nome',
                            '$this->st_descricao'
                            );
                            ";
        else
            $st_query = "UPDATE
                            acoes
                            SET
                            nome = '$this->st_nome',
                     
                               descricao = '$this->st_descricao'
                            WHERE
                            id = $this->in_id";
        try {

            if ($this->o_db->exec($st_query) > 0)
                if (is_null($this->in_id)) {

                    /*
                     * verificando se o driver usado é sqlite e pegando o ultimo id inserido
                     * por algum motivo, a função nativa do PDO::lastInsertId() não funciona com sq
                        lite
                     */
                    if ($this->o_db->getAttribute(PDO::ATTR_DRIVER_NAME) === 'sqlite') {
                        $o_ret = $this->o_db->query('SELECT last_insert_rowid() AS com_in_id')->fetchObject();
                        return $o_ret->com_in_id;
                    } else
                        return $this->o_db->lastInsertId();
                } else
                    return $this->in_id;
        } catch (PDOException $e) {
            throw $e;
        }
        return false;
    }

    /**
     * Deleta os dados persistidos na tabela de
     * objetivo usando como referencia, o id da classe.
     */
    public function delete() {
        if (!is_null($this->in_id)) {
            $st_query = "DELETE FROM
                            acoes
                            WHERE id = $this->in_id";
            if ($this->o_db->exec($st_query) > 0)
                return true;
        }
        return false;
    }

    /**
     * Cria tabela para armazernar os dados de objetivo, caso
     * ela ainda não exista.
     * @throws PDOException
     */
    /* private function createTableAcao()
      {
      //
      //  No caso do Sqlite, o AUTO_
                        INCREMENT é automático na chave primaria da tabela
      //  No caso do MySQL, o AUTO_INCREMENT deve ser especificado na criação do campo
      //
      if($this->o_db->getAttribute(PDO::ATTR_DRIVER_NAME) === 'sqlite')
      $st_auto_increment = '';
      else
      $st_auto_increment = 'AUTO_INCREMENT';

      $st_query = "CREATE TABLE IF NOT EXISTS acoes
                            (
                            id INTEGER NOT NULL $st_auto_increment,
                            nome CHAR(200),
                            descricao CHAR(100),
                            PRIMARY KEY(id)
                            )";

      //executando a query;
      try
      {
      $this->o_db->exec($st_query);
      }
      catch(PDOException $e)
      {
      throw $e 

                    

                  
                        
                            
                              

                    ;
      }
      } */
}

?>