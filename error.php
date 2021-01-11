<?php
$error="This page may not be working properly!";
if(isset($_GET['error'])){
    $error=$_GET['error'];
}
//echo "<p class=' text-center col-sm-2' style='color:red'>$error</p>";
?>
<?php include('header.php')?>
<div class="container pt-5 clearfix" style="text-align:center">
    <h1>There are some thing wrong!</h1>
    <h6></h6>
    <?php echo "<p  style='color:red'>$error</p>"; ?>
    <a name="" id="" class="btn  btn-outline-success" href="index.php" role="button">Back to home page</a>
</div>