<?php

namespace Valarep\model;

use Valarep\model\dao;
use \PDO;

class User {
    public $id_user;
    public $lastName;
    public $firstName;

    public static function getAll(){
        $dbh = dao::openDatabase();
        $query = "SELECT * FROM `users`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(
            PDO::FETCH_CLASS, // on veut des objets
            "Valarep\\model\\User" // la classe Post complètement qualifiée
        );
        $items = $sth->fetchAll();
        dao::closeDatabase();
        return $items;
    }

    public static function findUser($id){
        $dbh = dao::openDatabase();
        $query = "SELECT * FROM `users` WHERE `id_user`=:id;";
        $sth = $dbh->prepare($query);
        $sth->bindParam(":id",$id);
        $sth->execute();
        $sth->setFetchMode(
            PDO::FETCH_CLASS, // on veut des objets
            "Valarep\\model\\User" // la classe Post complètement qualifiée
        );
        $item = $sth->fetch();
        dao::closeDatabase();
        return $item;
    }
}