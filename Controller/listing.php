<?php
function listing($command2){
    $list = [];
    $tasks = json_decode(file_get_contents("tasks.json"), true);

    switch($command2){
        case "":
            foreach($tasks as $task){
                array_push($list, $task);
            }
        print_r($list);
        exit(1);
    }

    foreach($tasks as $task){
        if($task['status'] == $command2){
            array_push($list, $task);
        }
    }
    print_r($list);
    exit(1);
 }