<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="POST" enctype="multipart/form-data"> <!-- image upload korar jonno enctype="multipart/form-data"-->

            <label class="form-label">Image</label>
            <input  type="file" name="image">

            <button type="submit" name="port_created" class="btn btn-outline-success m-b-xs my-2">Save</button>
    </form> 
</body>
</html>