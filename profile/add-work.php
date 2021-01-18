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
                                <label for="">work id</label>
                                <input type="text" name="workid" id="" class="form-control" value="<?php echo $_SESSION['memberid']?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Work Name</b></label>
                                <input type="text" name="name" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for=""><b>Icon for Your Work</b></label>
                                
                                <select name="icon">
                                <option value="0" selected >None</option>
                                    <option value="1">Store</option>
                                    <option value="2">Iphone, pc</option>
                                    <option value="3">pencil</i></option>
                                    <option value="4" >Flag</i></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for=""><b>About</b></label>
                                <input type="text" name="about" id="" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-success mx-3">Save</button>
                        </form>

                        <div class="d-flex justify-content-left py-3">
                            <a href="add-resume-edu.php" class="btn btn-primary mx-3">Next</a>
                        </div>
                        
                    </div>
                </div>
            </main>




        <?php include('../footer.php') ?>
<?php
}
?>