<?php
require_once 'BaseController.php';
class TasklistController extends BaseController{

    public function show()
    {
        require_once 'model/Tasklist.php';
        $tasklist = new Tasklist;
        $tasklist->setTitle('Lista de la compra');
        $tasklist->setDescription('Cosas que debo comprar esta tarde en el super');
        
        require_once 'view/tasklist/show.php';
    }

    public function create()
    {
        require_once 'view/tasklist/create.php';
    }
}