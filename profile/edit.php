<?php session_start();
if (!isset($_SESSION['memberid'])) {

    echo '<h1>Your required profile not exist</h1>';
} else {

    include('../admin/config.php');
    $sql = "SELECT * FROM profile where memberid= $_SESSION[memberid]";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $pro5 = mysqli_fetch_assoc($result);
        include('header.php');
?>
       


            <main class="container pt-3 clearfix">

                <div class="row">
                    <div class="col-md-12">
                        <form action="edit-process.php" method="post">
                            <div class="form-group" hidden>
                                <label for="">member id</label>
                                <input type="text" name="memberid" id="" class="form-control" value="<?php echo $pro5['memberid'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control" value="<?php echo $pro5['name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Primary Work</label><br>
                                <input type="text" name="work1" id="" class="form-control" value="<?php echo $pro5['work1'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Secondary Work</label><br>
                                <input type="text" name="work2" id="" class="form-control" value="<?php echo $pro5['work2'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label><br>
                                <input type="text" name="phone" id="" class="form-control" value="<?php echo $pro5['phone'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label><br>
                                <input type="email" class="form-control" name="email" id="" value="<?php echo $pro5['email'] ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Age</label><br>
                                <input type="text" class="form-control" name="age" id="" value="<?php echo $pro5['age'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Residence </label><br>
                                <input type="text" class="form-control" name="country" id="" value="<?php echo $pro5['country'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label><br>
                                <input type="text" class="form-control" name="address" id="" value="<?php echo $pro5['address'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">About</label><br>
                                <input type="text" class="form-control" name="about" id="" value="<?php echo $pro5['about'] ?>">
                            </div>
                            <div class="d-flex justify-content-center py-3">
                                <a href="index.php" class="btn btn-secondary mx-3">Close</a>
                                <button type="submit" class="btn btn-success mx-3">Save</button>
                            </div>


                        </form>
                        <div class="d-flex justify-content-left py-3">
                            <a href="#" class="btn btn-primary mx-3">Previous</a>
                            <a href="edit-resume-skill.php" class="btn btn-primary mx-3">Next</a>
                        </div>

                    </div>
                </div>
            </main>




        <?php include('../footer.php') ?>
<?php
        mysqli_close($conn);
    } else {
        echo '<h1>Your required profile not exist</h1>';
    }
}
?>