<?php

function delete($command2){
    if($command2 == ''){
        echo 'ID missing!';
        exit(1);
    }
    
    $tasks = json_decode(file_get_contents("tasks.json"), true);
    $tasks = json_decode(json_encode($tasks), true); // for turning tasks into an array
    $tasks = array_filter($tasks, function($task) use ($command2){
        return isset($task['id']) && $task['id'] != $command2;
    });
    file_put_contents("tasks.json", json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    exit(1);
    }
