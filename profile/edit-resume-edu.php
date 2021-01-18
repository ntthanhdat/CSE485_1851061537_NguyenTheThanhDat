<?php 
session_start();
if (!isset($_SESSION['memberid'])) {

    echo '<h1>Your required page not exist</h1>';
} else {

    include('../admin/config.php');
    include('header.php');
?>

        <main class="container pt-3 clearfix" style="min-height: calc(100vh - 245px);">

            <div class="row">
                <div class="col-md-12">

                    <h6>Education</h6>

                   
                        <?php
                    $sql = 'SELECT * FROM `profile-resume-education` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                    

                    foreach ($row as $skill) { ?>
                        <div class="skill-group">
                            <form action="edit-process.php" method="post">
                                <div class="form-group" hidden>
                                    <label for="">Edu id</label>
                                    <input type="text" name="eduid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Year</b></label>
                                    <input type="text" name="year" id="" class="form-control" value="<?php echo $skill[2] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Program</b></label>
                                    <input type="text" name="pro" id="" class="form-control" value="<?php echo $skill[4] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Major</b></label>
                                    <input type="text" name="major" id="" class="form-control" value="<?php echo $skill[5] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>About</b></label>
                                    <input type="text" name="about" id="" class="form-control" value="<?php echo $skill[6] ?>" >
                                </div>
                                <button type="submit" class="btn btn-success mx-3">Save</button>
                            </form>

                         
                            </div>
                            <?php }}else{ echo '<h3>Your Education is empty!</h3>';} ?>
                <a href="add-resume-edu.php"  class="btn btn-success mx-3 mt-5">Add </a>
                
                        <hr>
                        <h6>Experience</h6>
                        <?php
                    $sql = 'SELECT * FROM `profile-resume-exp` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                    

                    foreach ($row as $skill) { ?>
                        <div class="skill-group">
                            <form action="edit-process.php" method="post">
                                <div class="form-group" hidden>
                                    <label for="">Car id</label>
                                    <input type="text" name="expid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Year</b></label>
                                    <input type="text" name="year" id="" class="form-control" value="<?php echo $skill[2] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Company Name</b></label>
                                    <input type="text" name="company" id="" class="form-control" value="<?php echo $skill[3] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Job Name</b></label>
                                    <input type="text" name="name" id="" class="form-control" value="<?php echo $skill[4] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>About</b></label>
                                    <input type="text" name="about" id="" class="form-control" value="<?php echo $skill[5] ?>" >
                                </div>
                                <button type="submit" class="btn btn-success mx-3">Save</button>
                            </form>

                         
                            </div>
                            <?php }}else{ echo '<h3>Your Experience is empty!</h3>';} ?>
                <a href="add-resume-edu.php"  class="btn btn-success mx-3 mt-5">Add </a>
                

                        <hr>
                        <h6>Certificates</h6>
                        <?php
                    $sql = 'SELECT * FROM `certificate` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                    

                    foreach ($row as $skill) { ?>
                        <div class="skill-group">
                            <form action="edit-process.php" method="post">
                                <div class="form-group" hidden>
                                    <label for="">Car id</label>
                                    <input type="text" name="cenid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Name</b></label>
                                    <input type="text" name="name" id="" class="form-control" value="<?php echo $skill[2] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Year</b></label>
                                    <input type="text" name="date" id="" class="form-control" value="<?php echo $skill[3] ?>" >
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Picture Link</b></label>
                                    <input type="text" name="picture" id="" class="form-control" value="<?php echo $skill[4] ?>" >
                                </div>
                                <button type="submit" class="btn btn-success mx-3">Save</button>
                            </form>

                         
                            </div>
                            <?php }}else{ echo '<h3>Your Certificates is empty!</h3>';} ?>
                <a href="add-resume-edu.php"  class="btn btn-success mx-3 mt-5">Add </a>
                
                        
                        <div class="d-flex justify-content-left py-3">
                            <a href="edit-work.php" class="btn btn-primary mx-3">Previous</a>
                            <a href="edit-resume-skill.php" class="btn btn-primary mx-3">Next</a>
                        </div>

                </div>
            </div>
        </main>



    <?php include('../footer.php') ?>
<?php
    mysqli_close($conn);
}
?>