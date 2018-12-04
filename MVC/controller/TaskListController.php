<?php

require_once 'BaseController.php';

class TaskListController extends BaseController {

    public function show()
    {
        require_once 'model/TaskList.php';

        $tasklist = new TaskList;
        $tasklist->setTitle('Lista de la compra');
        $tasklist->setDescription('Cosas que debo comprar esta tarde en el super');

        require_once 'view/tasklist/show.php';
    }

    public function create()
    {
        require_once 'view/tasklist/create.php';
    }

    public function getAll()
    {
        require_once 'model/TaskList.php';

        $tasklist = new TaskList;
        $allTaskLists = $taskList->all();

        require_once 'view/tasklist/all.php';
    }
}