<?php 
namespace App\Core;
abstract class Role{

    public static function isConnect():bool{
       return Session::userExist();
    }

    public static function isRP():bool{
        return Session::userExist() && Session::getUser()['role']==ROLE_RP;
    }
    public static function isProfesseur():bool{
        return Session::userExist() && Session::getUser()['role']==ROLE_PROFESSEUR;
    }

    public static function isGranted(string $role):bool{
        return Session::userExist() && Session::getUser()['role']==$role;
    }
  
}