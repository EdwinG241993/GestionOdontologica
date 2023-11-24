<?php

/**
 * Description of ConnectionDB
 *
 * @author Edwin
 */
class ViewModel {
    
    protected function getViewMdl($view) {
        
        $listRoutes = ['home', 'assign', 'manage', 'cancel', 'query'];
        
        if (in_array($view, $listRoutes)) {
            
            $content = "./view/html/". $view ."-action.php";
            
        } elseif ($view == "login" || $view == "index") {
            $content = "login";
        } else {
            $content = "404";
        }
        return $content;
    }
}
