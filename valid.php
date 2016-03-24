<?php
//$name=$_POST['name']; 
//$password=$_POST['password'];
//if(name==$name&&password==$password)
//{
//	header('Location: index.php');
//}
//else
//{
//	echo 'Username/Password not match';
//	header('Location: login.php');
//}
?>
<?php

    session_start();
    $hostname = 'localhost';
    $dbname   = 'demo';
    $username = 'ikol'; 
    $password1 = 'ikol';

    mysql_connect($hostname, $username, $password1) or DIE('Connection to host isailed, perhaps the service is down!');
    mysql_select_db($dbname) or DIE('Database name is not available!');

    $name=mysql_real_escape_string($_POST['name']); 
    $passWord=sha1(mysql_real_escape_string($_POST['password'])); 
    $query = "SELECT id FROM registration WHERE name='$name' and  password='$passWord'";
    $res = mysql_query($query);
    $rows = mysql_num_rows($res);
    if ($rows==1) 
    {
        $_SESSION['userName'] = $_POST['name'];
        header("Location: index.php");
    }
    else 
    {
        echo "user name and password not found";
        header("Location: login.php");
    }
	?>