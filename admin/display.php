<?php include('header.php');
include('config.php');
$id = $_GET['id'];
$sql = "select * from users where userid='$id'";
mysqli_set_charset($conn, 'UTF8');
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $post = mysqli_fetch_assoc($result);
}
?>
<div class="clearfix container pt-3 clearfix">
    <div class="row">

        <div class="col-sm-2">
            <?php
            if (empty(trim(base64_encode($post['avatar'])))) {
                echo '<img src ="../asset/no-image-available.png" width = "150px" height = "200px" class="avatar"/>';
            } else {
                echo '<img src = "data:image/png;base64,' . base64_encode($post['avatar']) . '" width = "150px" height = "200px" class="avatar"/>';
            }
            
            ?>
        </div>
        <div class="col-sm-8">
            <h3> <?php echo $post['first_name'] . ' ' . $post['last_name']  ?></h3>
            <h6> User ID: <?php echo $post['userid'] ?> </h6>
            <h6>Email: <?php echo $post['email'] ?></h6>
            <h6>Phone: <?php echo $post['phone'] ?></h6>
            <h6>Address1: <?php echo $post['address1'] ?></h6>
            <h6>Address2: <?php echo $post['address2'] ?></h6>
            <h6>City: <?php echo $post['city'] ?></h6>
            <h6>State country: <?php echo $post['state_country'] ?></h6>
            <h6>Zipcode/Postcode: <?php echo $post['zcode_pcode'] ?></h6>
            <h6> Registration date: <?php echo $post['registration_date'] ?> </h6>
            <h6> User level: <?php echo $post['user_level'] ?> </h6>
            <h6> Class: <?php echo $post['class'] ?> </h6>
            <h6> Paid: <?php echo $post['paid'] ?> </h6>
            <h6> Status: <?php echo $post['status'] ?> </h6>
            <h6> Active code: <?php echo $post['activation_code'] ?> </h6>
        </div>

        <div class="col-sm-2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Change
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="edit.php?id= <?php echo $post['userid'] ?>" class="btn  btn-outline-success m-2">
                            <i class="far fa-edit"></i> &nbsp; Edit
                        </a>
                    </li>
                    <li>
                        <button  type="button" class="btn  btn-outline-success m-2" data-toggle="modal" data-target="#deleteModalCenter">
                            <i class="fas fa-trash-alt"></i> &nbsp; Delete
                        </button>
                    </li>
                </ul>
            </div>
            <div>
                <a class="btn btn-primary mt-3" href="index.php" style="background-color: #17a2bb; width: 98px">Back</a>
            </div>
        </div>
    </div>
</div>

<!-- delete Modal -->
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalCenterTitle">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a  href="delete.php?id= <?php echo $post['userid'] ?>" class="btn btn-primary">Sure</a>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>