<?php
    include 'db_connection.php';

    $conn = OpenCon();

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT username FROM users WHERE email='$email' AND password='$pwd'";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();

    if($row != null){
        $results = array('status' => 200, 'username' => implode(',',$row), 'result' => 'success');
        echo(json_encode($results));
    } else {
        $results = array('status' => 404, 'result' => $row);
        echo(json_encode($results));
    }
    $conn->close();
?>