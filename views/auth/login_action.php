<?php
require_once __DIR__.'/../../config.php';
require_once __DIR__.'/../../helpers/PersistanceManager.php';
require_once __DIR__.'/../../helpers/SessionManager.php';

$session = new SessionManager();
if ($_SERVER['REQUEST_METHOD']==='POST') {

    $email = trim( $_POST['email']);
    $password =trim($_POST['password']);
  


    if (empty($email)|| empty($password)) {
        echo "<script> alert('invalid details');window.location='login.php'; </script>";
        exit;
    }
     
    
     $prmang = new PersistanceManager ();
     $query = "SELECT * FROM users WHERE email = ?";
    $params = [$email];  
    $user = $prmang->run($query, $params, true);

    if ($user) {
        
        if (password_verify($password,$user['password'])) {

            $session ->setAttribute('user_id',$user['id']);
            $session ->setAttribute('user_name',$user['username']);
            $session ->setAttribute('user_permission',$user['permission']);
            $session ->setAttribute('user_email',$user['email']);
            /* gives only the folder path */

            echo "<script>alert('login successfull');</script>";
       header('Location: ' . dirname($_SERVER['PHP_SELF']) . '/../dashboard/admin_login.php');            
       exit;
        } else {
            echo "<script>alert('incorrect password');</script>";
       header('Location: ' . dirname($_SERVER['PHP_SELF']) . '/login.php'); 
        }


    }else {
       echo "<script>alert('email not found');</script>";
       header('Location: ' . dirname($_SERVER['PHP_SELF']) . '/login.php'); 
    }

    

    

    
}













?>