<?php include('header.php');
include('config.php');
?>
<main class="container pt-3 ">

    <div class="row">
        <div class="col-md-12">
            <form action="add-process.php" method="post">
                
                <div class="form-group">
                  <label for="">First Name</label>
                  <input type="text" name="fname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Last Name</label>
                  <input type="text" name="lname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Email</label><br>
                  <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Password</label><br>
                  <input type="text" name="pasword" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Adress 1</label><br>
                  <input type="text" name="address1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Phone</label><br>
                  <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                
                <!-- role -->
                <div class="form-group">
                    <label for="">User level</label>
                    <select name="user_level" class="form-control"  id="">
                      <option value="0">0</option>  
                      <option value="1">1</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">Member ID</label><br>
                  <input type="text" name="memberid" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="d-flex justify-content-center">
                <a href="index.php" class="btn btn-secondary mx-3" >Close</a>
                  <button type="submit" class="btn btn-success mx-3">Add</button>
                 </div>
            
            </form>
            
        </div>
    </div>
    <div class="py-3"></div>
</main>
<?php include('footer.php') ?>