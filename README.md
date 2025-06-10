This project was made for learning purposes. It's main idea is the manipulation of a JSON array of objects through a command line interface.
OOP principles and PHP's built in JSON manipulation functions were the key features for the creation of this project.
The project has a folder called "Controllers" containing the function's files, they are all used in the "task-cli" file, which is where the 
Task class and it's constructor is declared and also where the 'if' and 'elseif' statements decide what function to call depending on the user
input.

* Commands 
   * php task-cli.php add "text" -> Will create a new task in the json file with "text" as it's description;
     
   * php task-cli.php update 1 "other text" -> Will update a task's description through the given ID (in this case, 1). The third argument in
     quotation marks is the new description;
     
   * php task-cli.php delete 1 -> Will delete a task through the given ID, which is the second argument given;
     
   * php task-cli.php mark-done 1 -> Will change the status of a task to "done" through it's ID;
     
   * php task-cli.php mark-todo 1 -> Will change the status of a task to "todo" through it's ID;
     
   * php task-cli.php mark-in-progress 1 -> Will change the status of a task to "in-progress" through it's ID
     
   * php task-cli.php list -> Will list all the tasks stored in the JSON file;
     
   * php task-cli.php list done -> Will list all the tasks with status "done" stored in the JSON file;
     
   * php task-cli.php list todo -> Will list all the tasks with status "todo" stored in the JSON file;
     
   * php task-cli.php list in-progress -> Will list all the tasks with status "in-progress" stored in the JSON file;
  
* Installation

   * git clone https://github.com/BrenoBevilacqua/TaskTracker.git
