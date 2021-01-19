<?php
namespace Valarep\controller;

use Valarep\model\User;
use Valarep\View;

class UserController {

    public static function listUser($page){
        $users = User::getAll();
        View::setTemplate('user');
        View::bindVariable("users", $users);
        View::bindVariable("page", $page);
        View::display();
    }

    public static function profilUser(int $id){
        $user = User::findUser($id);
        View::setTemplate('profil');
        View::bindVariable("user",$user);
        View::display();
    }
}