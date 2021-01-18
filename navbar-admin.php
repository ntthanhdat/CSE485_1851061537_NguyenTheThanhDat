<!-- lam change profile -->
<!-- Nav tabs -->
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #235555;">
    <a class="navbar-brand" href="#">NukeHanda</a>
    <button class="navbar-toggler d-lg-none openbtn" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>


    <div class="collapse navbar-collapse " id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin/index.php">Administration</a>
            </li>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-white pr-2">Your CV</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" target="_blank" href="profile/index.php?memberid=<?php echo $_SESSION['memberid']; ?>">View CV</a>
                    <a class="dropdown-item"  href="profile/edit.php">Edit CV</a>
                </div>
            </div>


        </ul>
        <div class="my-2 my-lg-0">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-white pr-2">Wellcom <?php echo  $_SESSION['name']  ?> </span></a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="profile.php">Your profile</a>

                    <a class="dropdown-item" href="controller/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>