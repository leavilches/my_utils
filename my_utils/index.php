<?php
      //connexion avec la base de données
      $servername = 'localhost';
      $username = 'root';
      $password = 'root';
      $conn = new mysqli($servername, $username, $password);

    if (isset($_POST['submit'])) {
        $task = $_POST['task'];

        mysqli_query($db, "INSERT INTO task task) VALUES ('$task')");
        header('location: index.php');
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="heading">
        <h2>To-Do List</h2>
    </div>

    <form method="POST" action="index.php">
        <input type="text" name="task" class="task_imput">
            <button type="submit" class="add_btn" name="submit">Add Task</button>
    </form>
    <table>
        <thread>
        <tr>
            <th>N</th>
            <th>Task</th>
            <th>Action</th>
        </tr>
    </thread>

    <tbody>
        <tr>
            <td>1</td>
            <td class="task">this is the first task placeholder</td>
            <td class="delete">
                <a href="#">x</a>
            </td>
        </tr>
    </tbody>
    </table>
</body>

</html>