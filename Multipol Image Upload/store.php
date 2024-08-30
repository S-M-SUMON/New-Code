<?php 
    if(isset($_POST['save'])){
        $image = $_FILES['iamge'];

        $image_name = $_FILES['iamge']['name'];
        $tmp_name =  $_FILES['iamge']['tmp_name'];
        $location = "./image/";

        if($image){

            foreach($image_name as $key => $value){
                $target_path = $location . $value;
                move_uploaded_file($tmp_name[$key],$target_path);
            }       
        }    
    }
?>