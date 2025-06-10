<?php
    include "Controller/add.php";
    include "Controller/update.php";
    include "Controller/delete.php";
    include "Controller/status.php";
    include "Controller/listing.php";
    

class Task{
    public $id;
    public $status = "todo";
    public $createdAt;
    public $updatedAt = "Not updated yet!";
    public function __construct(string $description, int $id){
        $this->id = $id;
        $this->description = $description;
        $this->createdAt = date('l jS \of F Y h:i:s A');
    }
}

$command = $argv[1] ?? '';
$command2 = $argv[2] ?? '';
$command3 = $argv[3] ?? '';

if($command == "add"){
    add($command2);
}

elseif($command == "update"){
    update($command2, $command3);
}

elseif($command == "delete"){
    delete($command2);
}

elseif($command == "mark-done" || $command == "mark-in-progress" || $command == "mark-todo"){
    status($command, $command2);
}

elseif($command == "list"){
    listing($command2);
}



