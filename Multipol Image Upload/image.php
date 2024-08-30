<?php 
    $conn = mysqli_connect("localhost","root","","multi_image");
    $view = "SELECT * FROM image";
    $result = mysqli_query($conn,$view);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="POST" enctype="multipart/form-data">
        <label for="">Image</label>
        <input type="file" name="iamge[]" multiple="">

        <button type="submit" name="save">Upload</button>
    </form>

    <?php foreach($result as $results):
        $explode = explode(',',$results['image']);
        foreach($explode as $image): 
            if(!$image ==','){
            
            }else{
    ?>
    <img src="image/<?php echo $image;?>" alt="" style="width: 100px; height: 100px; margin-top:50px;">
    <?php } endforeach; endforeach;?>

    
</body>
</html>