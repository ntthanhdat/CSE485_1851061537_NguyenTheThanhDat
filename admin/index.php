<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header('Location:../index.php');
} else {
    if ($_SESSION['role'] == 1) {
        include('header.php');
    } else {
        header('Location:../index.php');
    }
}

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;

$conn = mysqli_connect('localhost', 'root', '', 'blogth4');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

$total_pages_sql = "SELECT COUNT(*) FROM users";
$result = mysqli_query($conn, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM users LIMIT $offset, $no_of_records_per_page";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result);
}
mysqli_close($conn);
?>
<div class="fluid-container pt-3 px-5 clearfix">
<div class="table-title">
				<div class="row">
					<div class="col-sm-9">
						<h2>Manage <b>Users</b></h2>
					</div>
					<div class="col-sm-3">
						<a href="add.php" class="btn btn-success" ><i class="material-icons"></i> <span>Add New Users</span></a>						
					</div>
				</div>
			</div>
            <?php include('view.php'); ?>

</div>
</body>

</html>

<?php include('footer.php') ?>