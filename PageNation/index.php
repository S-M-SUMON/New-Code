<?php 
    $limit = 3;

    if(isset($_GET['page'])){

        $page = $_GET['page'];
    }else{
        $page  =1;
    }

    $offset = ($page - 1) * $limit;

    $sql = "SELECT * FROM users ORDER BY user_id LIMIT {$offset},{$limit}";
    $result = mysqli_query($conn,$sql) or die("Connection Failed");

    if(mysqli_num_rows($result) > 0 ){
        while($row  = mysqli_fetch_assoc($result)){

        }
    }

?>



<?php 
    $sql1 = "SELECT * FROM users";
    $result1 = mysqli_query($conn,$sql1) or die("Suery failed");


    if($page > 1){
        echo '<a href="users.php?page='.($page - 1).'">prev</a>';
    }

    if(mysqli_num_rows($result1) > 0){
        $total_records = mysqli_num_rows($result1);
        $total_pages = ceil($total_records / $limit);

        for ($i = 1; $i <= $total_pages; $i++ ){
            
            if($i == $page){
                $active = "activedddd";
            }else{
                $active = "";
            }
        echo " <a class='{$active}' href='users.php?page={$i}'>$i</a> " ;
        
        }
        if($total_pages > $page){
            echo '<a  href="users.php?page='.($page + 1).'">Next</a>';
        }
    }
?>