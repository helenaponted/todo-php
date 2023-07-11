<?php
function createTask() {
  global $conn;   

  if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];

/*
    INSERT INTO tasks (title, description, priority, )
    VALUES (value1, value2, value3);
*/
    
     /* insert query*/
    $query  = "INSERT INTO tasks";
    $query .= "(title, description, priority, id_user, id_categories) ";
    $query .= "VALUES ('$title', '$description', '$priority', 1, 1)";
 
    $conn->query($query);

   }
}
?>