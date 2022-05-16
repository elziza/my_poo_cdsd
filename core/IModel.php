<?php
namespace App\Core;
interface IModel{
    public function insert();
    public function update();
    public static function delete(int $id);
    public function selectAll();
    public function selectById(int $id);
    public function selectWhere(string $sql,array $data=[],$single=false);
    //select * from classe where niveau like "L1"
    //select * from user where login like 'ziz' and password like "ziz"

    // methodes instances => s'applique sur un objet et utilise l'etat de l'objet
    // $classe=new Classe();
    // $classe->setLibelle("L2 GLRS");
    // $classe->insert() //insert into classe (libelle) values("L2 GLRS")
    // $classe->setId(1)
    // $classe->delete() // delete from classe where id=1
    // methodes statiques => s'aplique sur une classe et n'utilise pas l'etat de l'objet
    /**
    * classe::methode();
    * classe::delete(1);
    * classe::selectAll():select * from classe
     */
}