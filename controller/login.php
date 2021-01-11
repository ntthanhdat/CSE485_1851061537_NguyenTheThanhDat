<?php
include('config.php');
$email = trim($_POST['email']);
if (empty($email)) {
    $errors = 'You forgot to enter your email address.';
}
$password = trim($_POST['password']);
if (empty($password)) {
    $errors .= '<br>You forgot to enter your password.';
}
$sql1 = "select * from users where email='$email'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) < 1) {
    $errors .= '<br>Your email address is not registed.';
} else {
    $user = mysqli_fetch_assoc($result);
}
// Check for a password and match against the confirmed password:

if (empty(trim($errors))) {


    if (password_verify($password, $user['password'])) {
        if ($user['status'] != 1) {

            $message = '<br>Your account is not activated. <br> <a class="btn  btn-outline-success my-2" href="activate.php?userid=' . $user['userid'] . '" role="button">Activate now?</a>';
            header("Location:../error.php?error=$message");
        } else {
            session_start();
            // Ensure that the user level is an integer. 
            $_SESSION['userid'] = $user['userid'];
            $_SESSION['user_name'] = $user['email'];
            $_SESSION['role'] = $user['user_level'];
            $_SESSION['name'] = $user['first_name'] . ' ' . $user['last_name'];
            header('Location: ../index.php');
        }
    } else {

        $message = "Your email or password may be incorrect!";
        header("Location:../error.php?error=$message");
    }
} else {

    header("Location:../error.php?error=$errors");
}
