<?php

    $db = mysqli_connect('localhost', 'root', '', 'sign-up');

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $del_commission = "DELETE FROM commissions WHERE id =$id";
        mysqli_query($db, $del_commission);

        header('location: 8profile-artist-view.php');

    }

    if (isset($_GET['received'])){
        $id = $_GET['received'];
        $del_commission = "DELETE FROM commissions WHERE id =$id";
        mysqli_query($db, $del_commission);

        header('location: 3commissionlist.php');

    }


    if (isset($_GET['accept'])){
        $id = $_GET['accept'];
        $status = 'on going';
        $going_commission = "UPDATE commissions SET status='$status' WHERE id=$id";
        mysqli_query($db, $going_commission);

        header('location: 8profile-artist-view.php');

    }

    if (isset($_GET['done'])){
        $id = $_GET['done'];
        $status = 'done';
        $done_commission = "UPDATE commissions SET status='$status' WHERE id=$id";
        mysqli_query($db, $done_commission);

        header('location: 8profile-artist-view.php');

    }


?>