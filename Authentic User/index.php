<?php 
    if(isset($_POST["submit"])){
        include("config.php");

        $fname = mysqli_real_escape_string($conn, $_POST['fast_name']);
        $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
        $uname = mysqli_real_escape_string($conn, $_POST['user_name']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $urole = mysqli_real_escape_string($conn, $_POST['user_role']);

        

        $sql = "SELECT username FROM users WHERE  username = '{$uname}'";

        $result = mysqli_query($conn, $sql) or die("query failed.");

        if(mysqli_num_rows($result) > 0){
            echo "<p style='color:red;'>UserName already Exissts. </p>";
        }else{
            $sqlInst = "INSERT INTO users(first_name,last_name,username,password,role) 
            VALUES('{$fname}','{$lname}','{$uname}','{$password}','{$urole}')";

           if (mysqli_query($conn, $sqlInst)){
            header("location: http://localhost/try/admin/users.php");

           }
        }
    }
?>