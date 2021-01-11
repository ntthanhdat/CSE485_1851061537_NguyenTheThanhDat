<?php include('header.php');
include('navbar-blank.php');
if(isset($_GET['userid'])){


?>


<div class="container pt-5 clearfix" style="text-align:center">
  <h6>Your account almost done</h6>
  <p>Please click the link in your email and confirm your account! </p>
  <h6>Or</h6>
    
    <form action="controller/process-activate.php" method="get">
    <input type="text" name="userid" id="" value="<?php echo $_GET['userid'] ?>" hidden>
      <label for="">Input code there:</label>
      <input type="text" name="code" id="" class="form-control" required>
      
      <div class="form-group">
      <button type="submit" class="btn btn-success mt-3">Submit</button>
      </div>
    </form>
  <a name="" id="" class="btn  btn-outline-success" href="index.php" role="button">Back to home page</a>
</div>

<?php
}
else{
  $e="Sorry, you've made an invalid request. Please go back!";
  header ("Location:error.php?error=$e");
}