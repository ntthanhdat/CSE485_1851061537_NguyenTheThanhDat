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
                <h2 class="page-title">Create Topics</h2>
                <form action="create.php" method="post">
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="title" id="" class="text-input">
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input type="text" name="description" id="" class="text-input">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big">Save Topic</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>




<!-- them jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<!-- custom script -->
<script src="../../asset/js/script.js"></script>
</body>
</html>

