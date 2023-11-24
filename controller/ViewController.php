<?php

/**
 * Description of ConnectionDB
 *
 * @author Edwin
 */
require_once './model/ViewModel.php';

class ViewController extends ViewModel {
    
    public function getTemplateCtr() {
        return require_once './view/template.php';
    }

    public function getViewCtr() {
        if (isset($_GET['action'])) {
            $route = explode('/', $_GET['action']);
            $response = ViewModel::getViewMdl($route[0]);
        } else {         
            $response = "login";
        }
        return $response;
    }
}

