<?php
namespace Valarep\controller;

use Valarep\View;

class HomeController {
    public static function Home(){
        View::setTemplate('home');
        View::display();
    }
}