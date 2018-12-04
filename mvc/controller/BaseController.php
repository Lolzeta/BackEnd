<?php

class BaseController{
    public function getAll()
    {
        require_once 'model/TaskList.php';

        $tasklist = new Tasklist;
        $allTaskLists = $tasklist->all();

        require_once 'view/tasklist/all.php';
    }
}