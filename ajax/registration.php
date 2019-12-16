<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../class/Register.php');
   $rg = new Register();
     if (isset($_POST['action']) && $_POST['action'] == 'additem') { 
             $member = $rg->AddMember($_POST,$_FILES);
       }

        if (isset($_POST['editactionaction']) && $_POST['editactionaction'] == 'edititem') {
           $id = $_GET['id'];
           $member = $rg->UpdateMember($_POST,$_FILES,$id);
       }


       
  

?> 
