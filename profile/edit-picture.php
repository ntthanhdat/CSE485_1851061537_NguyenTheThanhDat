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
                
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="modal-body" >
                    <div class="form-group" >
                        <span class="btn btn-default btn-file">
                            <input type="file" name="file" id="imgInp">
                        </span>
                    </div>
                    <div class="d-flex justify-content-center">
                    <img id="blah" src="#" alt="Your avarta preview goes here!" width="300px" height="360px"  />
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-success">Save</button>
                </div>
            </form>
            </main>




    </body>
    <?php include('../footer.php') ?>
<?php
    mysqli_close($conn);
}
?>