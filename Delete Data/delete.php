<?php 
    if(isset($_GET['deleit_ID'])){ // a ট্যাগ এর মাধমে ডাটা রিছিভ 
        $id = $_GET['deleit_ID'];
        $servises_query = "DELETE FROM services WHERE id = $id";
        mysqli_query($conn,$servises_query);
        header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");
    }

?>