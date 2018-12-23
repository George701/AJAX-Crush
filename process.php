<?php
echo 'Processing...';

//Connect to a database
$connect = mysqli_connect('localhost', 'root', '', 'ajax_test');
if(isset($_GET['name'])){
    echo 'GET: Your name is '.$_GET['name'];
}

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    echo 'POST: Your name is '.$_POST['name'].'. ';

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($connect, $query)){
        echo 'Success! User Added.';
    }else{
        echo 'ERROR: '.mysqli_error($connect);
    }
}