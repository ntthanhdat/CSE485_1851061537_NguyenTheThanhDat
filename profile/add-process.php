<?php

include('../admin/config.php');
if (isset($_POST['memberid']) && isset($_POST['work1'])) {
    $id = $_POST['memberid'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $work1 = $_POST['work1'];
    $work2 = $_POST['work2'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    $add = $_POST['address'];
    $about = $_POST['about'];
    $facebook = $_POST['facebook'];
    $sql1 = "select * from profile where memberid='$id'";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        $e = 'This profile already exist.';
        header("Location:../error.php?error=$e");
    } else {

        $sql = "insert into profile (memberid, name, facebook, about, phone, email, age, country, address, work1, work2)
    values ($id, '$name', '$facebook', '$about' ,   '$phone',  '$email', '$age', '$country', '$add', '$work1', '$work2')";
        echo $sql;
        mysqli_set_charset($conn, 'UTF8');
        if (mysqli_query($conn, $sql)) {
            header("Location:add-work.php");
        } else {
            $e = mysqli_error($conn);
            echo $e;
        }
    }
} else
if (isset($_POST['workid'])) {  //update work detail
    $id = $_POST['workid'];
    $name = $_POST['name'];

    $icon = $_POST['icon'];
    $about = $_POST['about'];
    $sql = "insert into `profile-detail-work`   (workname, about, icon, memberid ) values ('$name',  '$about', $icon, $id) ";
    echo $sql;
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:add-work.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else
if (isset($_POST['eduid']) && isset($_POST['major'])) { //update education
    $id = $_POST['eduid'];
    $year = $_POST['year'];
    $pro = $_POST['pro'];
    $major = $_POST['major'];
    $about = $_POST['about'];
    $sql = "insert into `profile-resume-education`  (year, term, majorname, `major-about`, memberid) values ('$year',  '$pro', '$major', '$about', '$id') ";
    echo $sql;
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:add-resume-edu.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else

if (isset($_POST['expid'])) {  //update exp
    $id = $_POST['expid'];
    $year = $_POST['year'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $about = $_POST['about'];

    $sql = "insert into `profile-resume-exp`  (`exp-year`,`exp-company`,`exp-name`,`exp-about`, memberid)  values ('$year', '$company',   '$name', '$about' ,$id) ";
    echo $sql;
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:add-resume-edu.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else
if (isset($_POST['cenid'])) {  //update certificate
    $id = $_POST['cenid'];
    $year = $_POST['date'];
    $name = $_POST['name'];
    $picture = $_POST['picture'];

    $sql = "insert into `certificate` (date,picture,name, memberid) values( '$year',  '$picture',    '$name' , $id) ";
    echo $sql;
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:add-resume-edu.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else
 if (isset($_POST['skillid']) && isset($_POST['skillname'])) { //insert into skill
    $id = $_POST['skillid'];
    $name = $_POST['skillname'];
    $sql = "insert into `profile-resume-skill` (name, memberid) values('$name'  ,$id) ";

    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:add-resume-skill.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else if (isset($_POST['sub-skillid']) && isset($_POST['sub-skillname'])) { //insert into sub-skill
    $id = $_POST['sub-skillid'];
    $skillid = $_POST['skillid'];
    $name = $_POST['sub-skillname'];
    $point = $_POST['point'];
    $sql = "insert into `skill-detail` (skillname='$name', point ='$point' where skillid=$id ";
    echo $sql;
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:add-resume-skill.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else 
 
if (isset($_POST['knowlegeid'])) { //insert into knowlege
    $id = $_POST['knowlegeid'];
    $name = $_POST['name'];

    $sql = "insert into `knowlege` ( name ='$name' where knowlegeid=$id ";
    echo $sql;
    mysqli_set_charset($conn, 'UTF8');
    if (mysqli_query($conn, $sql)) {
        header("Location:edit-resume-skill.php");
    } else {
        $e = mysqli_error($conn);
        echo $e;
    }
} else
    header("Location:../error.php?error=$e");
