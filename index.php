<?php include('header.php')?>

       

        <!-- xac minh dang nhap -->
 <?php      
session_start() ;
if ( !isset( $_SESSION[ 'userid' ] ) ){
    include('navbar-login.php');
}else{
    if($_SESSION['role']==1){
        include('navbar-admin.php');
    }else{
        include('navbar-user.php');
    }
    
}
?>
<div class="container pt-3 clearfix">
    
</div>
<?php
include('footer.php')?>