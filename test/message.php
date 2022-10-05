<?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_password = 'Zhiyun2017~';
    $mysql_database = 'messageboard';
    // connect db with mysqli
    $conn = new mysqli($mysql_host, $mysql_user, $mysql_password);
    
    // check if connection is successful or not
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    echo "Connected sucessfully";

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $ip = $_SERVER['REMOTE_ADDR'];
        $sql = "insert into messages values (null, '$email', '$title', '$content', '$ip', now(),". floor(rand()*mysql_insert_id()).")";
        mysql_query($sql) or die($sql.mysql_error());
    }
?>