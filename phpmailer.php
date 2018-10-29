<?php
require 'vendor/autoload.php';


 if ($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST["email"];
        $subject = $_POST['subject'];
        $mailmessage = $_POST['mailmessage'];
        sendemail($email, $subject, $mailmessage);
    } 
?>
<link rel="stylesheet" href =".\css\bootstrap.min.css">
<form method="POST" action="">
<div class="container">
    <div class="col-lg-5">
        <div class="form-group">
            <label>Email</label>
            <textarea type="text" class="form-control" rows="4" cols="50" name="email"><?php


$UM=new UserManager();
$users=$UM->getAllUsers();
if(isset($users)){
    foreach ($users as $user) {
        if($user!=null){
 
echo "$user->email, ";      
        }
    }
}    
?></textarea>
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject">
        </div>
        <div class="form-group">
            <label>Message: </label>
            <textarea class="form-control" rows="4" cols="50" type="text" name="mailmessage"></textarea>
        </div>
        <div>
            <input type="submit">
        </div>  
    </div>  
   </div>
</div>
                   
</form>