<?php 
    include "../master/header.php";
    include "../../config/config.php";
    include "../../public/fonts/fonts.php";

    $id = $_GET['eidit']; // রিসিভ ID

    $service_read = "SELECT * FROM services WHERE id='$id'";
    $services = mysqli_fetch_assoc(mysqli_query($conn,$service_read)); 
?>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    New Service
                </div>
                <div class="card-body">
                    <form action="store.php?upid=<?= $services['id'];?>" method="POST"> <!--id transfrom-->
                        <div class="example-content">
                           
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="<?=  $services['title']?>"> <!--রিসিভ ID Value-->

                            <label class="form-label">Description</label>
                            <input type="description" name="description" class="form-control" aria-describedby="emailHelp" value="<?=  $services['description']?>">

                            <label class="form-label">Icons</label>
                            <input type="text" name="icon" class="form-control hudai" aria-describedby="emailHelp" readonly value="<?=  $services['icon']?>">


                            <button type="submit" name="update" class="btn btn-outline-success m-b-xs my-2">Save</button>
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>
    </div>
