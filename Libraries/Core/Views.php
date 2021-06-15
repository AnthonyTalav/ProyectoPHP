<?php

//La clase no va tener método constructor
class Views{
    function getView($controller,$view,$data=""){
        $controller=get_class($controller);
        if($controller =="Home"){
            $view="Views/".$view.".php";
        }else{
            $view = "Views/".$controller."/".$view.".php";
        }
        
        require_once($view);
    }

}