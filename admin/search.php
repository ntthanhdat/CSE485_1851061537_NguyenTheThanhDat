<?php
include('header.php');
if (isset($_GET['search'])) {
    $name = $_GET['search'];
    include('config.php');

?>
<div class="container pt-1 clearfix">
    <div class="row">
        <div class="col">
        <div class="table-title">
				<div class="row">
					<div class="col-sm-9">
						<h2> <b>Search Result for: </b>&nbsp;<?php echo $_GET['search']; ?> </h2>
					</div>
					<div class="col-sm-3">
						<a href="index.php" class="btn btn-success" ><i class="material-icons"></i> <span>Back to list</span></a>						
					</div>
				</div>
			</div>
            <?php

                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 20;
                $offset = ($pageno - 1) * $no_of_records_per_page;

                $total_pages_sql = "SELECT COUNT(*) from users where first_name like '%$name%' or last_name like '%$name%';";
                $result = mysqli_query($conn, $total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $sql = "select * from users where first_name like '%$name%' or last_name like '%$name%' or email like '%$name%' LIMIT $offset, $no_of_records_per_page; ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_all($result);
                
                mysqli_close($conn);
                ?>
            <?php include('view.php');?>
    <?php }else{ echo '<h3 style="text-align:center">Not found anything</h3>'; } ?>
    
            </body>

            </html>
        </div>
    </div>
</div>
<?php }
else{
    ?>
    
<div class="container pt-5 clearfix" style="text-align:center">
<h1>Sorry, you have made an invalid request. Please go back!</h1>
    <a name="" id="" class="btn  btn-outline-success" href="index.php" role="button">Back to home page</a>
</div>
    <?php
}
include('footer.php');
 ?>
