<?php
namespace App\Core;
abstract class Model implements IModel{

    protected static string $table;
    public function insert(){
        
    }
    public function update(){

    }
    public static function delete(int $id){
        $sql="delete  from".self::$table."where id=$id";
    }
    public function selectAll(){
        $sql="selct * from".self::$table;
    }
    public function selectById(int $id){
        $sql="select *from ".self::$table."where id=$id";
 

    }
    public function selectWhere(string $sql,array $data=[],$single=false){
    }
}