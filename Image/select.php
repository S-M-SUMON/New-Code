<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="POST" enctype="multipart/form-data"> <!-- image upload korar jonno enctype="multipart/form-data"-->

        <picture>
            <img id="port_image" src="../../public/defualt/defualt.jpg" alt="" style="width:100%; height: 200px; object-fit:contain;">
        </picture><br>

        <label class="form-label">Image</label>
        <input onchange="document.getElementById('port_image').src =window.URL.createObjectURL(this.files[0]) " type="file" name="image" class="form-control hudai" aria-describedby="emailHelp">
    </form> 
</body>
</html>