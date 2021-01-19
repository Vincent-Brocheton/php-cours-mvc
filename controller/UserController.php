<?php
namespace Valarep\controller;

use Valarep\model\User;
use Valarep\View;

class UserController {

    public static function listUser(){
        $users = User::getAll();
        View::setTemplate('user');
        View::bindVariable("users", $users);
        View::display();
    }
}