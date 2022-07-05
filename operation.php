<?php
        $conn=mysqli_connect('localhost','root','','lifeclinic');
        $_SESSION['admin']='';
        $showsign='signup';
        $headertag='headerstags';
        $close='close';
        $nameholder='';
        $emailholder='';
        $passholder="";
        $repassholder='';
        $colorfontname="rgb(77, 72, 4)";
        $colorbordername="";
        $colorfontemail="rgb(77, 72, 4)";
        $colorborderemail="";
        $colorfontpassword="rgb(77, 72, 4)";
        $colorborderpassword="";
        $colorfontre="rgb(77, 72, 4)";
        $colorborderre="";
        $errname='';
        $erremail='';
        $errpassword='';
        $errrepassword='';
        $error1=$error2=$error3=$error4='false';
        $completesign='';
        if(isset($_GET['signup'])){
                $sign="showsign1";
               $nameholder=$fullname=filter_var($_GET['name'],FILTER_SANITIZE_STRING);
                $emailholder=$email=$_GET['email'];
                $passholder=$password=$_GET['password'];
                $repassholder=$repassword=$_GET['repassword'];
                $complete='';
                $pattern = "/[0-9]{1,}[a-z]+/i";
                //$error=false;
                $pattern1 = "/[0-9]{1,}/i";
              
               
                $number = preg_match('/[0-9]/i', $password);
                $uppercase = preg_match('/[A-Z]/', $password);
                $lowercase = preg_match('/[a-z]/', $password);
                
                if(!($number)){
                    $errpassword='password must have at least one digit';
                    $error3='true';
                    $colorfontpassword='#db1414';
                    $colorborderpassword='1px solid #f10808';
                }
                if(!($uppercase)){
                    $errpassword='password must have at least one uppercase';
                    $error3='true';
                    $colorfontpassword='#db1414';
                    $colorborderpassword='1px solid #f10808';
                }
                if(!($lowercase)){
                    $errpassword='password must have at least one lowercase';
                    $error3='true';
                    $colorfontpassword='#db1414';
                    $colorborderpassword='1px solid #f10808';
                }   
                if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
                    $erremail="your email not valid, rewiter email!";
                    $error2='true';
                    $colorfontemail='#db1414';
                    $colorborderemail='1px solid #f10808';
                }
                if(strlen($fullname)< 8){
                    $errname='please ,write your full name(your name and family name)';
                    $error1='true';
                    $colorfontname='#db1414';
                    $colorbordername='1px solid #f10808';
                }
                if(empty($fullname)){
                    $errname="please ,write your full name it's empty!";
                    $error1='true';
                    $colorfontname='#db1414';
                    $colorbordername='1px solid #f10808';
                }
                if(preg_match($pattern,$fullname)){
                    $errname='write your full name without start with a digit';
                    $error1='true';
                    $colorfontname='#db1414';
                    $colorbordername='1px solid #f10808';
                }
                if(preg_match($pattern1,$fullname)){
                    $errname='write your name without digit for safety purpose';
                    $error1='true';
                    $colorfontname='#db1414';
                    $colorbordername='1px solid #f10808';
                }
                if(empty($email)){
                    $erremail="you must write your email it's empty!";
                    $error2='true';
                    $colorfontemail='#db1414';
                    $colorborderemail='1px solid #f10808';
                }
                if(empty($password)){
                    $errepassword="please ,you must write your password it's empty";
                    $error3='true';
                    $colorfontpassword='#db1414';
                    $colorborderpassword='1px solid #f10808';
                }
            
                if(strlen($password)<8){
                    $errpassword='your password must be at least 8 characters ';
                    $error3='true';
                    $colorfontpassword='#db1414';
                    $colorborderpassword='1px solid #f10808';
                }
               
                if(!($repassword===$password)){
                    $errrepassword='Repassword does not match the current password ';
                    $error4='true';
                    $error3='true';
                    $colorfontre='#db1414';
                    $colorborderre='1px solid #f10808';
                }
                if($repassword==$password){
                    $errrepassword=' ';
                    //$error4='false';
                    $colorfontre='';
                    $colorborderre='';
                }
                if(empty($password)){
                    $errpassword="you must write password it's empty";
                    $error3='true';
                    $colorfontre='#db1414';
                    $colorborderre='1px solid #f10808';
                }
                if(empty($repassword)){
                    $errrepassword='Re-Password is empty ,complete!';
                    $error4='true';
                    $colorfontre='#db1414';
                    $colorborderre='1px solid #f10808';
                    $error4='true';
                }
                //echo $error4;
                $showsign='signup1';
                $close='close1';
                $headertag='headertags1';
                if($error1=='false' && $error2=='false' && $error3=='false' && $error4 =='false')
                {   $passwordafter=sha1($password);
                    session_start();
                    $_SESSION['username']=$fullname;
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$passwordafter;
                    $_SESSION['img']='user.png';
                    /*date("Y/m/d")*/
                    $date=date('y/m/d');
                    $completesign="<div class='green' ><span><i class='fa fa-check' aria-hidden='true'></i>
                    </span>Account created successfully</div>";

                    $querysign="INSERT INTO users(FullName,Email,Password,DateOfJoin,Status,image)
                    values('$fullname','$email','$passwordafter','$date','unactive','user.png')";
                    mysqli_query($conn,$querysign);
                    header("REFRESH:1;url=index.php");
                    
                }
            }

            /////////


$complete='';
///$session='';




//$closelog='closelog';
$email1='';
$password1='';
$err='';
$erroremail1='';
$errorpassword1='';
$colorfontemail1="rgb(77, 72, 4)";
$colorborderemail1="";
$colorfontpassword1="rgb(77, 72, 4)";
$colorborderpassword1="";
$errpasslog=$erremaillog='false';
$login='login';
$close2="closelog";
if(isset($_POST['login'])){

    $login="login1";
    $close2='closelog1';
    $headertag="headertags2";
    $log="showlog1";
    $email1=$_POST['email'];
    $password1=$_POST['pass'];
    
    if(empty($email1)){
        $erroremail1="you must write your email it's empty!";
        $erremaillog='true';
        $colorfontemail1='#db1414';
        $colorborderemail1='1px solid #f10808';
    }
   
    if(!(filter_var($email1,FILTER_VALIDATE_EMAIL))){
        $erroremail1="your email not valid, rewiter email!";
        $erremaillog='true';
        $colorfontemail1='#db1414';
        $colorborderemail1='1px solid #f10808';
    }
    if(strlen($password1)<8){
        $err='your password must be at least 8 characters ';
        $errpasslog='true';
        $colorfontpassword1='#db1414';
        $colorborderpassword1='1px solid #f10808';
    }
    if(empty($password1)){
        $err="you must write your password it's empty!";
        $errpasslog='true';
        $colorfontpassword1='#db1414';
        $colorborderpassword1='1px solid #f10808';
    }
    if($errpasslog == 'false' & $erremaillog == 'false'){
        $emailsha=sha1($email1);
        //echo $email1;
        $queryadmin="SELECT * from admins where Email='$emailsha'";
        $queryreturn="SELECT * from users where Email='$email1'";
        $resultadmin=mysqli_query($conn,$queryadmin);
        $resultreturn=mysqli_query($conn,$queryreturn);
        $fetchsha=mysqli_fetch_array($resultadmin);
        $fetchnosha=mysqli_fetch_array($resultreturn);
        
        //print_r($fetchnosha);
        if(isset($fetchsha['Email'])){
            $passwordwithsha=sha1($password1);
            //echo $passwordwithsha.'<br>';
            //echo $fetchsha['Password'];
            $validpass=$fetchsha['Password'];
            
            //echo ($passwordwithsha===$validpass);
            if($passwordwithsha === $validpass){
                //session_start();
                $_SESSION['username']=$fetchsha['FullName'];
                $_SESSION['email']=$fetchsha['Email'];
                $_SESSION['password']=$fetchsha['Password'];
                $_SESSION['adminweb']=$fetchsha['FullName'];
                session_save_path('localhost/project/admin/adminsite.php');
                $_SESSION['admin']="active";
                //echo $_SESSION['username'];
                //echo "<script>window.location.href='admin/adminsite.php';</script>";
                header("REFRESH:1;url=admin/adminsite.php?nameadmin=".$_SESSION['username']."");
            
            }else{
                $err="your password not correct!";
                $colorfontpassword1='#db1414';
                $colorborderpassword1='1px solid #f10808';
                
            }
        }
        else if(isset($fetchnosha['FullName'])){
            $passwordwithsha=sha1($password1);
            if($fetchnosha['Password']===$passwordwithsha){
                session_start();
                $_SESSION['username']=$fetchnosha['FullName'];
                $_SESSION['email']=$fetchnosha['Email'];
                $_SESSION['password']=$fetchnosha['Password'];
               
                ///echo $_SESSION['username'];
                echo "<script>window.location.href='index.php';</script>";
            

            }else{
                $err="your password not correct!";
                $colorfontpassword1='#db1414';
                $colorborderpassword1='1px solid #f10808';
            }
        }else
        {
            $erroremail1='email not Found please check your data';
        }
    
    }
    
}
///////profile user


if($_SESSION['admin']=='active'){
    $_SESSION['nameimg']="<div class='nameimg' style='padding:.3vw .1vw'><a  href='admin/adminsite.php' style='color:wheat;padding:.5vw .2vw'>Admin : ".$_SESSION['username']."
    </a></div>";}
   
    
    
?> 