<?php

function status($command, $command2){
    if($command2 == ''){
        echo "ID missing!";
        exit(1);
    }

    switch ($command){
        case 'mark-done':
            $status = 'done';
            break;
        case 'mark-in-progress':
            $status = 'in-progress';
            break;
        case 'mark-todo':
            $status = 'todo';
            break;
    }

    $tasks = json_decode(file_get_contents("tasks.json"), true);
    foreach ($tasks as &$task) {
        if ($task['id'] == $command2) {
            $task['status'] = $status;
            $task['updatedAt'] =  date('l jS \of F Y h:i:s A');
            file_put_contents("tasks.json", json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            break;
        }
    }
}