<?php
    include 'db_connection.php';
 
    $conn = OpenCon();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $phone = $_POST['phone'];
 
    $sql = "INSERT INTO `users`(`email`, `username`, `phone`, `password`) VALUES ('$email','$username',$phone,'$password')";

    $json = array();

    if($conn->query($sql) === TRUE){
        $result = array('status' => 200,'result' => 'success');
        array_push($json,$result);
    }
    else{
        $result = array('status' => 404,'result' => $conn->error);
        array_push($json,$result);
    }

    echo(json_encode($json));

    CloseCon($conn);

?>