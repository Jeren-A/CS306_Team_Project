<?php

include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $sql_statement = "DELETE FROM `problem` WHERE problem.problem_id = $id";
        echo $sql_statement;
        $result = mysqli_query($db, $sql_statement);
        if ($result) {
            echo "<a href=\"/sabanciathome/problems.php\">Return to Problem</a>";
        }
    }
}
