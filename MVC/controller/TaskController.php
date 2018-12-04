<?php

require_once 'BaseController.php';

Class TaskController extends BaseController {

    public function show()
    {
        require_once 'model/Task.php';

        $task = new Task;
        $task->setDescription("Pan de molde.");
        $task->setPriority("Media");

        require_once 'view/task/show.php';
    }
}