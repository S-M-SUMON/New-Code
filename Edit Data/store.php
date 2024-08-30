<?php 

    if(isset($_GET['upid'])){
        $id = $_GET['upid'];
    
        $title = $_POST['title'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
    
        $update = "UPDATE services SET title='$title', description='$description', icon='$icon' WHERE id='$id'";
        mysqli_query($conn,$update);
        header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");
    }

?>