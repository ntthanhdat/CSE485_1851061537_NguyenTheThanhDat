<?php
session_start();
if (!isset($_SESSION['memberid'])) {

    echo '<h1>Your required profile not exist</h1>';
} else {

    include('../admin/config.php');
    include('header.php');
?>

    <main class="container pt-3 clearfix" style="min-height: calc(100vh - 245px);">

        <div class="row">
            <div class="col-md-12">

                <?php
                $sql = 'SELECT * FROM `profile-detail-work` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_all($result);
                

                foreach ($row as $skill) { ?>
                    <div class="skill-group">
                        <form action="edit-process.php" method="post">
                            <div class="form-group" hidden>
                                <label for="">work id</label>
                                <input type="text" name="workid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Work Name</b></label>
                                <input type="text" name="name" id="" class="form-control" value="<?php echo $skill[2] ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Icon for Your Work</b></label>
                                
                                <select name="icon">
                                <option value="0" selected >------</option>
                                    <option value="1">Store</option>
                                    <option value="2">Iphone, pc</option>
                                    <option value="3">pencil</i></option>
                                    <option value="4" >Flag</i></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for=""><b>About</b></label>
                                <input type="text" name="about" id="" class="form-control" value="<?php echo $skill[4] ?>">
                            </div>
                            <button type="submit" class="btn btn-success mx-3">Save</button>
                            <a class="btn btn-danger mx-3" href="delete.php?workid=<?php echo $skill[1] ;?>"> <i class="fas fa-trash-alt"></i>Delete</a>
                        </form>


                    </div>
                <?php }}else{ echo '<h3>Your work is empty!</h3>';} ?>
                <a href="add-work.php"  class="btn btn-success mx-3 mt-5">Add Work</a>
                


                <div class="d-flex justify-content-left py-3">
                    <a href="edit.php" class="btn btn-primary mx-3">Previous</a>
                    <a href="edit-resume-edu.php" class="btn btn-primary mx-3">Next</a>
                </div>

            </div>
        </div>
    </main>



    <?php include('../footer.php') ?>
<?php
    mysqli_close($conn);
}
?>