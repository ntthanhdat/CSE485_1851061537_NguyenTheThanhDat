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

                <?php ?>

                <?php
                $sql = 'SELECT * FROM `profile-resume-skill` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_all($result);
                

                foreach ($row as $skill) { ?>
                    <div class="skill-group">
                        <form action="edit-process.php" method="post">
                            <div class="form-group" hidden>
                                <label for="">User id</label>
                                <input type="text" name="skillid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Skill Group Name</b></label>
                                <input type="text" name="skillname" id="" class="form-control" value="<?php echo $skill[2] ?>">
                            </div>
                            <button type="submit" class="btn btn-success mx-3">Save</button>
                            <a class="btn btn-danger mx-3" href="delete.php?skillid=<?php echo $skill[1] ;?>"> <i class="fas fa-trash-alt"></i>Delete</a>
                        </form>

                        <table class="table table-striped table-inverse " id="tableno1">
                            <thead>
                                <tr>

                                    <th>Skill Name</th>
                                    <th>Point</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php
                                $sql = 'SELECT * FROM `skill-detail` WHERE skillid=' . $skill[1] . ' ';
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $subrow = mysqli_fetch_all($result);
                                

                                foreach ($subrow as $sub_skill) {
                                    echo '<form action="edit-process.php" class="form-inline" method="post"> <tr>'; ?>
                                    <div class="form-group" hidden>
                                        <label for="">subskill id</label>
                                        <input type="text" name="sub-skillid" id="" class="form-control" value="<?php echo $sub_skill[1] ?>">
                                    </div>
                                    <div class="form-group" hidden>
                                        <label for="">skill id</label>
                                        <input type="text" name="skillid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                                    </div>
                                    <td>

                                        <div class="form-group">
                                            <input type="text" name="sub-skillname" id="" class="form-control" value="<?php echo $sub_skill[2] ?>">
                                        </div>


                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" name="point" id="" class="form-control" value="<?php echo $sub_skill[3] ?>">
                                        </div>
                                    </td>
                                    <td><button type="submit" class="btn btn-success mx-3">Save</button>

                                    </td>

                                <?php
                                    echo '<td scope="row" > <a class="btn btn-danger mx-3" href="delete.php?subskillid=' . $sub_skill[1] . '"> <i class="fas fa-trash-alt"></i> Delete</a></td>';
                                    echo '</form> </tr>';
                                }}
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <?php }}else{ echo '<h3>Your work is empty!</h3>';} ?>
                <a href="add-resume-skill.php"  class="btn btn-success mx-3 mt-5">Add</a>
                

                <div class="pt-3 skill-group">
                
                    <h4>Knowlege</h4>
                    <hr>
                    <div class="row">
                    <?php
                    $sql = 'SELECT * FROM `knowlege` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                    

                    foreach ($row as $skill) { ?>
                    <div class="col-sm-3">
                        
                    

                        <form action="edit-process.php" method="post">
                            <div class="form-group" hidden>
                                <label for="">know id</label>
                                <input type="text" name="knowlegeid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Knowlege Name</b></label>
                                <input type="text" name="name" id="" class="form-control" value="<?php echo $skill[2] ?>">
                            </div>
                            <button type="submit" class="btn btn-success mx-3">Save</button>
                        </form>
                        </div>

                        <?php }
                        echo '</div>'; 
                    } 
                    else{ echo '<h3>Your work is empty!</h3>';} ?>
                    </div>
                <a href="add-resume-skill.php"  class="btn btn-success mx-3 mt-5">Add</a>
                
                


                <div class="d-flex justify-content-left py-3">
                    <a href="edit-resume-edu.php" class="btn btn-primary mx-3">Previous</a>
                 </div>

            </div>
        </div>
    </main>



    <?php include('../footer.php') ?>
<?php
    mysqli_close($conn);
}
?>