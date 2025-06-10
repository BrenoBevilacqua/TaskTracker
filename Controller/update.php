<?php

function update($command2, $command3){
    if($command3 == ''){
        echo "ID missing!";
        exit(1);
    }

    $tasks = json_decode(file_get_contents("tasks.json"), true);
    foreach($tasks as &$task){
        if($task['id'] == $command2 ){
            $task['description'] = $command3;
            $task['updatedAt'] =  date('l jS \of F Y h:i:s A');
            file_put_contents("tasks.json", json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            exit(1);
        }
    }
    echo "No such ID found!";
    exit(1);
}