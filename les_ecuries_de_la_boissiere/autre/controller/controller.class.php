<?php

include("model/model.class.php");

class Controller {

    private $unModel;
    
    public function __construct($host, $bdd, $user, $mdp) {
        $this->unModel = new Model($host, $bdd, $user, $mdp);
    }
    
    public function selectAll($table) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectAll();
    }
    
    public function selectAllDistinct($table) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectAllDistinct();
    }

    public function selectAllCount($table) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectAllCount();
    }
    
    public function selectAllWhere($table, $where) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectAllWhere($where);
    }

    public function selectAllWhereDistinct($tab, $table, $where) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectAllWhereDistinct($tab, $where);
    }

    public function selectLastOffer($table, $limit){
        $this->unModel->renseigner($table);
        return $this->unModel->selectLastOffer($limit);
    }
    
    public function selectAllWithFK($table, $tab, $where) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectAllWithFK($tab, $where);
    }

    public function selectChamps($table, $tab) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectChamps($tab);
    }
    
    public function selectWhere($table, $tab, $where) {
        $this->unModel->renseigner($table);
        return $this->unModel->selectWhere($tab, $where);
    }

    public function insert($table, $values) {
        $this->unModel->renseigner($table);
        $this->unModel->insert($values);
    }

    public function update($table, $values, $where) {
        $this->unModel->renseigner($table);
        $this->unModel->update($values,$where);
    }
    
    public function inscription($table, $valuesU, $valuesP) {
        $this->unModel->renseigner($table);
        $this->unModel->inscription($valuesU, $valuesP);
    }

    public function connexion($table, $tab, $where) {
        $this->unModel->renseigner($table);
        $this->unModel->connexion($tab, $where);
    }

}

?>