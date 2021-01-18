<?php session_start();
if (!isset($_SESSION['memberid'])) {

    echo '<h1>Your required profile not exist</h1>';
} else {

        include('header.php');
?>
       


            <main class="container pt-3 clearfix">

                <div class="row">
                    <div class="col-md-12">
                        <form action="add-process.php" method="post">
                            <div class="form-group" hidden>
                                <label for="">member id</label>
                                <input type="text" name="memberid" id="" value="<?php echo $_SESSION['memberid']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Primary Work</label><br>
                                <input type="text" name="work1" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Secondary Work</label><br>
                                <input type="text" name="work2" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label><br>
                                <input type="text" name="phone" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Email</label><br>
                                <input type="email" class="form-control" name="email" id="" >
                            </div>
                            <div class="form-group">
                                <label for="">Facebook link</label><br>
                                <input type="text" name="facebook" id="" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label for="">Age</label><br>
                                <input type="text" class="form-control" name="age" id="" >
                            </div>
                            <div class="form-group">
                                <label for="">Residence </label><br>
                                <input type="text" class="form-control" name="country" id="" >
                            </div>
                            <div class="form-group">
                                <label for="">Address</label><br>
                                <input type="text" class="form-control" name="address" id="">
                            </div>
                            <div class="form-group">
                                <label for="">About</label><br>
                                <input type="text" class="form-control" name="about" >
                            </div>
                            <div class="d-flex justify-content-center py-3">
                                <a href="index.php" class="btn btn-secondary mx-3">Close</a>
                                <button type="submit" class="btn btn-success mx-3">Save</button>
                            </div>


                        </form>

                        <div class="d-flex justify-content-left py-3">
                            <a href="#" class="btn btn-primary mx-3">Previous</a>
                            <a href="add-work.php" class="btn btn-primary mx-3">Next</a>
                        </div>
                        
                    </div>
                </div>
            </main>




        <?php include('../footer.php') ?>
<?php
}
?>