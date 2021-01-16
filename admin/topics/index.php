<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/97b890027e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="../../asset/css/admin.css">
	<title>Admin-Manage Topics</title>
</head>
<body>

<?php include('../header.php');?>

    <!-- admin page wrapper -->
    <div class="admin-wrapper">
        <!-- left side bar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="../posts/index.php">Manage posts</a></li>
                <li><a href="../index.php">Manage users</a></li>
                <li><a href="../topics/index.php">Manage topics</a></li>
            </ul>
        </div>
        <!-- admin content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Topics</h2>
                <table>
                    <thead>
                        <th>N</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                    <?php 
                    include('../config.php');
                    $sql = "SELECT * FROM topic";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                    }
                    mysqli_close($conn);
                foreach ($row as $post) {
                    echo '<tr>';
                    echo '<td>'.$post[0].'</td>';
                    echo '<td>'.$post[1].'</td>';
                    echo '<td><a href="edit-topic.php?id='.$post[0].'" class="edit">edit</a></td>';
                    echo '<td><a href="delete-topic.php?id='.$post[0].'" class="delete">delete</a></td>';
                    echo '</tr>';
                }?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>




<!-- them jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<!-- custom script -->
<script src="../../asset/js/script.js"></script>
</body>
</html>

