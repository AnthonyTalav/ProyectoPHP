<?php
class Controllers
{
    public function __construct()
    {
        $this->views = new Views(); //Ya no se hace require ya que se está cargando la clase a partir de index por el spl_autoload_register
        $this->loadModel();
    }

    public function loadModel()
    {

        //HomeModel.php
        $model = get_class($this) . "Model";
        $routClass = "Models/" . $model . ".php";
        if (file_exists($routClass)) {
            require_once($routClass);
            $this->model = new $model();
        }
    }
}
