<?php 
    session_start();
    require "../../config/config.php";

    if(isset($_POST['submit'])){

        $id = $_SESSION['auth_id'];

        $facebook = $_POST['facebook'];
        $instragram = $_POST['instragram'];
        $twitter = $_POST['twitter'];
        $telegram = $_POST['telegram'];


        $sql = "INSERT INTO links(user_id,facebook,instragram,twitter,telegram) VALUES('$id','$facebook','$instragram','$twitter','$telegram')";
        mysqli_query($conn,$sql);

        header("location: links.php");
    }
?>