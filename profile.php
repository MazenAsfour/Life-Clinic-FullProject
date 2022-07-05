<?php
error_reporting(0); 
 $displaycheck='block';
 $displayeditprofile='none';
 $errorcheck='';
 $close3='closeprofile';
 $displaysectionprofile="none";
 $colorfontname2="rgb(77, 72, 4)";
 $colorbordername2="";
 $colorfontemail2="rgb(77, 72, 4)";
 $colorborderemail2="";
 $colorfontpassword2="rgb(77, 72, 4)";
 $colorborderpassword2="";
 $success='';
 $errname1='';
 $erremail1='';
 $errpassword1='';
 $queryselect="SELECT * from users where FullName='$session'";
 $runselect=mysqli_query($conn,$queryselect);
 $fetchselect=mysqli_fetch_array($runselect);
 if(isset($_GET['check'])){
     $headertag='headertags3';
     
     $check=$_GET['checkpassword'];
     $displaysectionprofile="block";
     $shacheck=sha1($check);
     
     if( $shacheck == $fetchselect['Password']){
         //echo 'valid';
         $colorfontpassword2='';
         $colorborderpassword2='';
         $headertag='headertags3';
         $displaycheck='none';
         $displayeditprofile='block';

    
     }elseif(empty($check)){
         $errorcheck="please write password it's empty";
         $colorfontpassword2='#db1414';
         $colorborderpassword2='1px solid #f10808';
     }
     else{
         $errorcheck='your password not correct';
         $colorfontpassword2='#db1414';
         $colorborderpassword2='1px solid #f10808';
     }
 }
 
 if(isset($_GET['editprofile'])){
   
    //print_r($fetchuser);
    $id=$fetchselect['id'];
    $image=$fetchselect['image'];
    $img=$_GET['photo'];
     if(empty($img)){
         $img=$image;
     }
     $displayeditprofile='block';
     $newpassword=$_GET['newpassword'];
     $newname=$_GET['newname'];
     $newemail=$_GET['newemail'];
     $displaycheck='none';
     $displaysectionprofile='block';
     
     $number = preg_match('/[0-9]/i', $newpassword);
     $uppercase = preg_match('/[A-Z]/', $newpassword);
     $lowercase = preg_match('/[a-z]/', $newpassword);
     $error1=$error2=$error3='false';
     $pattern = "/[0-9]{1,}[a-z]+/i";
     //$error=false;
     $pattern1 = "/[0-9]{1,}/i";
     if(strlen($newpassword)<8){
         $errpassword1='your password must be at least 8 characters ';
         $error3='true';
         $colorfontpassword2='#db1414';
         $colorborderpassword2='1px solid #f10808';
         $headertag4='headertag4';
     }
   
     if(preg_match($pattern1,$newname)){
         $errname1='write your name without digit for safety purpose';
         $error1='true';
         $colorfontname2='#db1414';
         $colorbordername2='1px solid #f10808';
         $headertag4='headertag4';
     }
     if(preg_match($pattern,$newname)){
         $errname1='write your full name without start with a digit';
         $error1='true';
         $colorfontname2='#db1414';
         $colorbordername2='1px solid #f10808';
         $headertag4='headertag4';
     }
    
     if(strlen($newname)< 8){
         $errname1='please ,write your full name(your name and family name)';
         $error1='true';
         $colorfontname2='#db1414';
         $colorbordername2='1px solid #f10808';
         $headertag4='headertag4';
     }
     if(!($number)){
         $errpassword1='password must have at least one digit';
         $error3='true';
         $colorfontpassword2='#db1414';
         $colorborderpassword2='1px solid #f10808';
         $headertag4='headertag4';
     }
     if(!($uppercase)){
         $errpassword1='password must have at least one uppercase';
         $error3='true';
         $colorfontpassword2='#db1414';
         $colorborderpassword2='1px solid #f10808';
         $headertag4='headertag4';
     }
     if(!($lowercase)){
         $errpassword1='password must have at least one lowercase';
         $error3='true';
         $colorfontpassword2='#db1414';
         $colorborderpassword2='1px solid #f10808';
         $headertag4='headertag4';
     } 
     if(empty($newpassword)){
         $errpassword1="you must write password it's empty";
         $error3='true';
         $colorfontre2='#db1414';
         $colorborderre2='1px solid #f10808';
         $headertag4='headertag4';
     }
     if(empty($newname)){
         $errname1="please ,write your full name it's empty!";
         $error1='true';
         $colorfontname2='#db1414';
         $colorbordername2='1px solid #f10808';
         $headertag4='headertag4';
     }
     if(empty($newemail)){
         $erremail1="you must write your email it's empty!";
         $error2='true';
         $colorfontemail2='#db1414';
         $headertag4='headertag4';
         $colorborderemail2='1px solid #f10808';
     }

 if($error1=='false' & $error2=='false' & $error3=='false'){
     //echo '$validtion complete';
     session_start();
     $shanewpass1=sha1($newpassword);
     //echo $shanewpass1;
     $headertag4='headertag4';
     $_SESSION['img']=$image;
     $updateuser="UPDATE users SET FullName='$newname',
     Email='$newemail',Password='$shanewpass1', image='$img' where id='$id'";
     mysqli_query($conn,$updateuser);
     $passwordsession=$shanewpass1;
     //echo "<script>window.location.href='index.php';</script>";
     header("REFRESH:2;url=index.php");
     $success="<div class='green' style='width:55% ;margin-top:1vw'>complete change of your information ,thank you</div>";

     
 }


}
if(isset($_GET['headertag4'])){
    $headertag='headertag4';
}
if(isset($_GET['headertag5'])){
    $headertag='headertag5';
}


?>