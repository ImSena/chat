<?php

namespace App\Core;

abstract class Controller{

    protected function render($dir,$view){
        require_once VIEW_DIR . "$dir/$view.html";
    }

    protected function redirect($url){
        header('Location: '.$url);
        exit;
    }

}