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

                <form action="add-process.php" method="post">
                    <div class="form-group" hidden>
                        <label for="">User id</label>
                        <input type="text" name="skillid" id="" class="form-control" value="<?php echo $_SESSION['memberid'] ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><b>Skill Group Name</b></label>
                        <input type="text" name="skillname" id="" class="form-control">
                    </div>
                    <button type=" submit" class="btn btn-success mx-3">Save</button>
                </form>

                <?php
                $sql = 'SELECT * FROM `profile-resume-skill` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_all($result);


                    foreach ($row as $skill) { ?>
                        <div class="skill-group" style="padding: 10px;">
                            <h4>Skill group <?php echo $skill[2]; ?></h4>
                            <h4>Skill id <?php echo $skill[1]; ?></h4>

                                    
                                        <form action="add-process.php" class="form-inline" method="post"> 
                                        
                                        <div class="form-group" hidden>
                                            <label for="">skill id</label>
                                            <input type="text" name="sub-skillid" id="" class="form-control" value="<?php echo $skill[1]; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="">Skill name</label>
                                            <input type="text" name="sub-skillname" id="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label for="">Skill point</label>
                                            <input type="number" name="point" id="" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success mx-3">Save</button>
                                        </form>



                        </div>

                <?php }
                } ?>

                <div class="pt-3 skill-group">
                    <h4>Knowlege</h4>
                    <hr>
                    
                        <form action="add-process.php" method="post">
                            <div class="form-group" hidden>
                                <label for="">know id</label>
                                <input type="text" name="knowlegeid" id="" class="form-control" value="<?php echo  $_SESSION['memberid']; ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Knowlege Name</b></label>
                                <input type="text" name="name" id="" class="form-control" >
                            </div>
                            <button type=" submit" class="btn btn-success mx-3">Save</button>
                        </form>


                </div>


                <div class="d-flex justify-content-left py-3">
                    <a href="add-resume-edu.php" class="btn btn-primary mx-3">Previous</a>
                   </div>

            </div>
        </div>
    </main>



    <?php include('../footer.php') ?>
<?php
    mysqli_close($conn);
}
?>