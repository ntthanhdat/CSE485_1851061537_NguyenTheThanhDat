<?php 
session_start();
if (!isset($_SESSION['memberid'])) {

    echo '<h1>Your required profile not exist</h1>';
} else {

    include('../admin/config.php');
    include('../header.php');
?>

    <body>
        <main class="container pt-3 clearfix" style="min-height: calc(100vh - 245px);">

            <div class="row">
                <div class="col-md-12">

                    <?php ?>

                    <?php
                    $sql = 'SELECT * FROM `profile-resume-skill` WHERE memberid=' . $_SESSION['memberid'] . ' ';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                    }

                    foreach ($row as $skill) { ?>
                        <div class="skill-group">
                            <form action="edit-process.php" method="post">
                                <div class="form-group" hidden>
                                    <label for="">User id</label>
                                    <input type="text" name="skillid" id="" class="form-control" value="<?php echo $skill[1] ?>">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Skill Group Name</b></label>
                                    <input type="text" name="skillname" id="" class="form-control" value="<?php echo $skill[2] ?>" >
                                </div>
                                <button type="submit" class="btn btn-success mx-3">Save</button>
                            </form>

                            <table class="table table-striped table-inverse " id="tableno1">
                                <thead>
                                    <tr>

                                        <th>Skill Name</th>
                                        <th>Point</th>
                                        <th scope="col" >Edit</th>
                                        <th scope="col" >Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                                    $sql = 'SELECT * FROM `skill-detail` WHERE skillid=' . $skill[1] . ' ';
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        $subrow = mysqli_fetch_all($result);
                                    }

                                    foreach ($subrow as $sub_skill) {
                                        echo '<form action="edit-process.php" class="form-inline" method="post"> <tr>'; ?>
                                        <div class="form-group" hidden>
                                            <label for="">subskill id</label>
                                            <input type="text" name="sub-skillid" id="" class="form-control" value="<?php echo $sub_skill[1] ?>">
                                        </div>
                                        <div class="form-group" hidden>
                                            <label for="">skill id</label>
                                            <input type="text" name="skillid" id="" class="form-control" value="<?php echo $skill[1]?>">
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
                                        echo '<td scope="row" > <a class="btn btn-danger mx-3" href="delete.php?id=' . $sub_skill[1] . '"> <i class="fas fa-trash-alt"></i> Delete</td>';
                                        echo '</form> </tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        <?php } ?>

                        
                        <div class="d-flex justify-content-left py-3">
                            <a href="#" class="btn btn-primary mx-3">Previous</a>
                            <a href="edit-picture.php" class="btn btn-primary mx-3">Next</a>
                        </div>

                </div>
            </div>
        </main>




    </body>
    <?php include('../footer.php') ?>
<?php
    mysqli_close($conn);
}
?>