<?php
namespace Valarep\controller;

use Valarep\View;

class HomeController {
    public static function home(){
        View::setTemplate('home');
        View::display();
    }
}