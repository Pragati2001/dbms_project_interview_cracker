<?php 
session_start(); 
$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "login_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
else echo "Conection established";

$uname = $_POST['uname'];
$pass = $_POST['password'];

if (empty($uname)) {
    header("Location: index.php?error=User Name is required");
    exit();
}else if(empty($pass)){
    header("Location: index.php?error=Password is required");
    exit();
}else{
    
    $pass=md5($pass);
    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $uname && $row['password'] === $pass) {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../main_page.php");
            exit();
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }else{
        header("Location: index.php?error=Incorect User name or password");
        exit();
    }
}

