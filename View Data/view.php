<?php 
    $portfolio_read = "SELECT * FROM portfolio";
    $portfolios = mysqli_query($conn,$portfolio_read);
    $portfolio = mysqli_fetch_assoc($portfolios);

    

?>

<?php if($portfolio == 0):?>

    <tr>
        <td colspan="5" style="text-align:center; color:red;">No Data Found</td>
    </tr>


    <?php endif; $count= 1; foreach($portfolios as $portfolio) :?>
    <tr>
        <p><?=$portfolio['name']; ?></p>
    </tr>

<?php endforeach;?>