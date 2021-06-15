<?php

class Home extends Controllers
{

    public function __construct()
    {
        parent::__construct(); //Ejecuta el método constructor de la clase que se está heredando

    }

    public function home()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Home";
        $data['page_title'] = "Página principal";
        $data['page_name'] = "home";
        $data['page_content'] = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam atque ut minus architecto neque, consequatur sed aliquam omnis tenetur doloremque similique veniam, magni distinctio ullam ducimus magnam? Dolores, at nesciunt!";

        $this->views->getView($this, "home", $data);
    }


}
