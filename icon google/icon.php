<?php 
    include "../../public/fonts/fonts.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- add thi link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>

    <div class="card-body">
        <form action="store.php" method="POST">
                
                <label class="form-label">Icons</label>
                <input type="text" name="icon" class="form-control hudai" aria-describedby="emailHelp" readonly>


                <div class="card my-3">
                    <div class="card-body" style="overflow-y:scroll;height: 300px;">
                        <div class="fa-2x">
                            <?php foreach($fonts as $font) : ?>
                                <span class="m-2">
                                    <i class="<?= $font?>" onclick="myFun(event)" ></i>
                                </span>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>

                <button type="submit" name="created" class="btn btn-outline-success m-b-xs my-2">Save</button>
        </form> 
    </div>
    
</body>
</html>

<script>
    let hudai = document.querySelector('.hudai');
    function myFun(e){
        hudai.value= e.target.classList.value;
    }
</script>
