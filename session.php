<?php
session_start();
require 'connection.php';
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];    

    //admin
    $sql1="SELECT * FROM `pengguna` where email='$email' and password='$password' and role=1"; 
    $result1 = $con->query($sql1);
    
    //user
    $sql2="SELECT * FROM `pengguna` where email='$email' and password='$password' and role=0"; 
    $result2 = $con->query($sql2);


    if(mysqli_num_rows($result1)==1){        
        $_SESSION['email'] = $email;
        header('location: pages/admin/admin.php');
    }else if(mysqli_num_rows($result2)==1){        
        $_SESSION['email'] = $email;
        header('location: pages/event.php');
    }else{
        header('location: salah.php');
    }
}
else if(isset($_POST['signup'])){
    $nama=$_POST['nama'];
    $telpon=$_POST['telpon'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    $sql4="INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `telpon`, `bio`, `foto`, `role`) VALUES (NULL, '$nama', '$email', '$password', '$telpon', '', '', '')";
    if (mysqli_query($con, $sql4)) { 
        echo "DATA ENTRY COMPLETE";
        header('Refresh: 0');
    }
    else { 
        echo "DATA ENTRY FAILED"; 
    }
}



?>