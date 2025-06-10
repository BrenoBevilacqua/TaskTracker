<?php


 function add($command2){
    if ($command2 === '') {
        echo "ID missing!";
        exit(1);
    }

    if(!file_exists('tasks.json')){
        $task = new Task($command2, 1);
        $tasks[] = $task;
        file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
        echo "Inserted successfully!";
        exit(1);
    }

    $tasksJson = file_get_contents("tasks.json") ?: '[]';
    $tasks = json_decode($tasksJson, true);
    if (!is_array($tasks)) {
        $tasks = [];
    }

    // A simple loop for iterating the tasks ID
    $maxId = 0;
    foreach($tasks as $t){
        if(isset($t['id']) && $t['id'] > $maxId){
            $maxId = $t['id'];
        }
    }
    $nextId = $maxId + 1;

    $task = new Task($command2, $nextId);
    $tasks[] = $task;
    file_put_contents("tasks.json", json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo "Inserted successfully!";
    exit(1);
}
