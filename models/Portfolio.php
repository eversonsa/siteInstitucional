<?php
/**
 * Description of Portfolio
 *
 * @author everson
 */
class Portfolio extends model{
    
    public function getTrabalhos($n) {
        
        $dados = [];
        
        $sql = "SELECT * FROM portfolio ";
        
        if(!empty($n)){
            $sql .= "LIMIT ".$n;
        }
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }
        return $dados;
    }
}
