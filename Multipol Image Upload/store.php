<?php 
    if(isset($_POST['save'])){
        $image = $_FILES['iamge'];

        $image_name = $_FILES['iamge']['name'];
        $tmp_name =  $_FILES['iamge']['tmp_name'];
        $location = "./image/";

        if($image){
            $num = 1;
            $com_name = "";
            foreach($image_name as $key => $value){

                $explode = explode('.',$value);
                $extrention = end($explode);
                $coustome_name = date("d-M-Y").time()."-".$num ++.".".$extrention;
                $target_path = $location . $coustome_name;

                move_uploaded_file($tmp_name[$key],$target_path);

                $com_name = $com_name ."," .$coustome_name;
            }
            
            $conn = mysqli_connect("localhost","root","","multi_image");

            $insert = "INSERT INTO image(image)VALUE('$com_name')";
            mysqli_query($conn,$insert);
            header("location: http://localhost/Chat%20GPT/Mujltipol%20Image%20Upload/image.php");
        }
        
    }

?>