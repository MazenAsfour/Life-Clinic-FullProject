<?PHP 
include 'assignvalues.php';
include "operation.php";
include "profile.php";
$errorlogtest='';
session_start();
///
$displaystart="block";

///
if(!(mysqli_query($conn,"set names utf8"))){
    echo mysqli_error($conn);
};

ini_set('default_charset', 'utf-8');
header('Content-type: text/html; charset=utf-8');
mysqli_set_charset($conn,"utf8");
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET CHARACTER SET utf8');
$session='';
$emailsession='';
$passwordsession='none';
$sessionimage='user.png';
$sessionid='';
$profile='profile';
$log="showlog";
$sign="showsign";
include 'assignvalues.php';
include 'operation.php';
//error_reporting(0);
$links='<a  class="hvr-shrink '. $sign . '">إنشاء حساب </a>
<a class="hvr-shrink '.$log.'">تسجيل الدخول</a>';
if(isset($_SESSION['username'])){
    session_start();
    $session=$_SESSION['username'];
    $emailsession=$_SESSION['email'];
    $passwordsession=sha1($_SESSION['password']);
    
    $querysession="UPDATE users set Status='active' where FullName='$session'";
    $run1=mysqli_query($conn,$querysession);
    if(!$run1){
        echo mysqli_error($conn);
    }
    $links='<a href="index.php?logout"  class="hvr-shrink">تسجيل الخروج</a>
    <a class="hvr-shrink ' . $profile .' ">تعديل الملف الشخصي </a>';
    
}


include 'profile.php';

if(isset($_GET['logout'])){
    $session=$_SESSION['username'];
    $querysession="UPDATE users set Status='unactive' where FullName='$session'";
    $run1=mysqli_query($conn,$querysession);
    if(!$run1){
        echo mysqli_error($conn);
    }
    //echo $_GET['logout'];
    session_destroy();
    //echo 'hay';
    session_unset();
    header("REFRESH:0;url=index.php");
};
$classresult="defultresult";
$displayresult="inline-flex";
$pre='';
$advice1=$advice2=$advice3=$advice4='';
if(isset($_GET['submitquestion'])){
    $displaystart="none";
    if(isset($_SESSION['username']) ){
  
    $errresult1=$errresult2=$errresult3=$errresult4=$errresult5=$errresult6=
    $errresult7=$errresult8=$errresult9=$errresult10="";
    $point1=$_GET['answer1'];
    $point2=$_GET['answer2'];
    $point3=$_GET['answer3'];
    $point4=$_GET['answer4'];
    $point5=$_GET['answer5'];
    $point6=$_GET['answer6'];
    $point7=$_GET['answer7'];
    $point8=$_GET['answer8'];
    $point9=$_GET['answer9'];
    $point10=$_GET['answer10'];
    $errorallresult="false";
    //You must answer the question for the correct health evalution

    if($point1==''){
        $errresult1="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point2==''){
        $errresult2="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point3==''){
        $errresult3="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point4==''){
        $errresult4="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point5==''){
        $errresult5="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point6==''){
        $errresult6="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point7==''){
        $errresult7="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point8==''){
        $errresult8="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point9==''){
        $errresult9="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($point10==''){
        $errresult10="<div class=error style='padding-left:18vw;text-align:center'>You must answer the question for the correct health evalution</div>";
        $errorallresult="true";
    }
    if($errorallresult=="false"){
    $classresult="editresult";
    $points=$point1+$point2+$point3+$point4+$point5+$point6+$point7+$point8+$point9+$point10;
    
    ini_set('default_charset', 'utf-8');
    header('Content-type: text/html; charset=utf-8');
    mysqli_set_charset($conn,"utf8");
    mysqli_query($conn,"SET NAMES 'utf8'");
    $a=mysqli_query($conn,'SET CHARACTER SET utf8');

    $namehealth=$_SESSION['username'];
    $selecthealth="SELECT * from usershealth where name='$namehealth' and
     id=(Select max(id) from usershealth)";
    $runhealth=mysqli_query($conn,$selecthealth);
    $fetchhealth=mysqli_fetch_array($runhealth);
   
    ini_set('default_charset', 'utf-8');
    header('Content-type: text/html; charset=utf-8');
    mysqli_set_charset($conn,"utf8");
    mysqli_query($conn,"SET NAMES 'utf8'");
    $a=mysqli_query($conn,'SET CHARACTER SET utf8');

    

    if(!$a){
        echo mysqli_error($conn);
    }
    if(isset($fetchhealth)){
        $pre=$fetchhealth['health'];
        //echo $fetchhealth['health'];
        $prehealth=" تشخيص حالتك الصحية القديمة هي ".$pre."";
    }
    if($points>=0 & $points<=9){
        $health='لا يوجد اكتئاب';
        $advice1=$resulttest[0][1];
        $advice2=$resulttest[0][2];
        $advice3=$resulttest[0][3];
        $advice4=$resulttest[0][4];
        $displayresult='block !important';
    }

    if($points>=10 & $points<=15){
        $health='اكتئاب بسيط';
        $advice1=$resulttest[1][1];
        $advice2=$resulttest[1][2];
        $advice3=$resulttest[1][3];
        $advice4=$resulttest[1][4];
        $displayresult="block !important";
    }
    if($points >=16 & $points<=23){
        $health='اكتئاب متوسط';
        $advice1=$resulttest[2][1];
        $advice2=$resulttest[2][2];
        $advice3=$resulttest[2][3];
        $advice4=$resulttest[2][4];
    }
    if($points>=24 & $points<=36){
        $health='اكتئاب شديد';
        $advice1=$resulttest[3][1];
        $advice2=$resulttest[3][2];
        $advice3=$resulttest[3][3];
        $advice4=$resulttest[3][4];
    }
    if($points>37 ){
        $health='اكتئاب شديد جدا';
        $advice1=$resulttest[4][1];
        $advice2=$resulttest[4][2];
        $advice3=$resulttest[4][3];
        $advice4=$resulttest[4][4];
        $displayresult="block !important";
    }
    
    date_default_timezone_set("Asia/Jerusalem");
    $date= date('y/m/d h:i:s');
    ini_set('default_charset', 'utf-8');
    header('Content-type: text/html; charset=utf-8');
    mysqli_set_charset($conn,"utf8");
    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET CHARACTER SET utf8');
    $inserttest="INSERT into usershealth(name,email,points,health,date)
    values('$session','$emailsession','$points','$health','$date')";
    $r=mysqli_query($conn,$inserttest);
    if(!$r){
        echo mysqli_error($conn);
    }}
    }
    else if($session==''){
        $errorlogtest="<div class='error1 text-center'> You must be logged in to do the test!</div>";
        //echo $errorlogtest;
       
    }

    ///$headertag="headertag"
}


?>



<!DOCTYPE html>
<html lang="en" class="html">

<head>
    
<meta charset="utf-8">
<script src="https://use.fontawesome.com/17edc14b3c.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/772b1cd801.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/design.css">
<link rel="stylesheet" href="css/hover-min.css">
<link rel="stylesheet" href="css/sign.css" class="css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
<style>

.active{
margin-left: 1vw !important;
}
.first a img {
    width: 14vw;
    height: 12.5vw;
}
li{
  list-style-type: none;
}
.dep h1{
    margin: 0;
    padding: 0.5vw .2vw;
    color:#745b19;
    font-size: 2vw;
}
.dep h3{
    font-size: 1.5vw;
    margin: 0;
    padding: 0.7vw .2vw;
}
.dep p,.dep li{
    font-size: 1.2vw;
    padding: .1vw .2vw;
    margin: 0;
}
.onereasons{
    margin-top: .2vw;
    border-bottom: 1px solid #745b19;
    padding-bottom: .3vw;
}
.submitcontact {
    width: 11%;
    background: linear-gradient(#3a2602,#745b19);
    padding: .2vw .4vw;
    font-size: 1.2vw;
    color: white;
    border-radius: 6px;
    text-align: center;
    height: 3.4vw;
    margin: 0px 32vw;
}
.test p{
    display: inline;
}
.headerq{
    margin: 0vw 0 2vw ;
}
hr {
    /* margin-top: 20px; */
    /* margin-bottom: 20px; */
    border: 0;
    width: 44%;
    border-top: 1.5px solid rgb(126 83 19);
    margin: 1vw 31vw;
}

.lead {
    /* font-size: 21px; */
    font-size: 1.7vw;
    margin: 0;
    padding-bottom: .5vw;
    color:#745b19
}
.nameimg {
    position: absolute;
    top: 0.2vw;
    left: 24.7vw;
    color: #dfd2b9;
    padding: 0.1vw .4vw 0;
    border: 1px solid wheat;
}
.nameimg span{
    padding-left:.255vw
}
.healthpre{
    text-align: center;
    margin-top: -1vw;
    margin-bottom: .5vw;
    font-size: 1.4vw;
    color: #765634;
}
    .nameimg img{
    height:2vw;
    width:2vw;
    border-radius:100%
    }
.test span{
    padding-left: .3vw;
}
.test p{
    font-size: 1.4vw;
}
.error1 {
    color: #f10808;
    padding: .5vw 0vw;
    font-size: 1.2vw;
    width: 36vw;
    border: 1px solid red;
    background-color: #efe2e2;
    margin: 0vw 30vw .5vw;
}
.headerbek{
    margin: 0;
    margin-top: 2vw;
    font-size: 1.8vw;
    padding: 0;
    color:#553c0d;
    border:1px solid #6b4909;
    padding: .5vw;
    width: 20vw;
    margin:2vw auto .5vw
}


.he {
    width: 2.5%;
    opacity: .9;
    position: fixed;
    top: 0vw;
    /* background: linear-gradient(#3a2602,#745b19); */
    z-index: -1;
    height: 56vw;
    color: #7e550a;
    font-size: 9vw !important;
    padding-left: 2vw;
}

.he h6{
    padding-top:10vw;
    font-size:1.2vw
}
.he h6 div{
    margin-top:2.2vw;
    border: 1px solid #745b19;
    padding:.3vw;
    padding-left:.4vw
}
.difhe{
   
    float: right !important;
    right: 0px;
    /* margin: -1vw; */
    /* text-align: right; */
    position: fixed;
    right: 2vw;
    font-size:1.2vw

}
input[type="radio"], input[type="checkbox"]{
    cursor: pointer;
}
.resultleft ul li {
    font-size: 1.3vw;
    display: <?php echo $displayresult;?>;
}
.defultresult{
    display:none
}

</style>
</head>
<?php 


mysqli_set_charset($conn,"utf8");




?>
<body>

    <nav class="headerstags">
        <div class="container">
           
        <div class="first" >
                   <a href="index.php" > <img src="img/<?php echo $logo;?>" alt="" style='text-align: left;'class="logo"></a>
                </div>
                
                <div class="height">
                <div class="second">
                    <ul class="menunav">
                    <li>
                    <a href="knowledge.php" class="hvr-grow">ثقف نفسك</a>
                    <a href="test.php" class="hvr-grow active">اختبر نفسك</a>
                    <a href="contact.php" class="hvr-grow">اتصل بنا</a>
                    <a href="about.php" class="hvr-grow">معلومات عنا</a>
                    <a href="app.php" class="hvr-grow"> المواعيد</a>
                    <a href="ourteam.php" class="hvr-grow">الاعضاء</a>
                    <a href="services.php" class="hvr-grow">الخدمات</a>
                    <a href="index.php" class="hvr-grow ">الصفحة الرئيسية</a>
                    
                </li>
                </ul>
                </div>
                <div class="third">
                    <h1>healthy thinking clinic Safe with a results.</h1>
                </div>
            </div>
            <div class="four">
                <ul>
                    <li>
                    <?php echo $links;?>
                    </li>
                </ul>
            </div>
            </div>
    </nav>
    <div class="icon headerstags">
        <svg class='bars'xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="100" height="100"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M164.83333,0h-157.66667c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v28.66667c0,3.956 3.21067,7.16667 7.16667,7.16667h157.66667c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-28.66667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667zM164.83333,64.5h-157.66667c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v28.66667c0,3.956 3.21067,7.16667 7.16667,7.16667h157.66667c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-28.66667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667zM164.83333,129h-157.66667c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v28.66667c0,3.956 3.21067,7.16667 7.16667,7.16667h157.66667c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-28.66667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667z"></path></g></g></svg>   
    </div>
    <?php echo $_SESSION['nameimg'];?>
<section class="intro">
    <div class="container">
        <h1 class="lead text-center headerbek" ><?php echo $bek;?> </h1>
        <h1 class="lead text-center " style="margin-top: .2vw; font-size: 1.6vw;"><?php echo $bektext;?>
        <img src="assest/divider.svg" style="width: 60%; margin: 1vw 5vw 0;" alt="">
    </div>
</section>

<?php 

?>
<section class="<?php echo $headertag;;?> test">

    <div class="container text-right" style="margin: 1vw;padding-right: 0;">
        <h1 class="lead text-center headerbek" style="margin: -.5vw 38vw .5vw;"> <?php echo $testname;?> </h1>
        <?php echo $errorlogtest;?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                     <?php echo $q1;?>                  
                    <span style="float: right;">-1</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q11;?></p>
                <input type="radio" name="answer1" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q12;?></p>
                <input type="radio" name="answer1" value='1' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q13;?></p>
                <input type="radio" name="answer1" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q14;?>
                </p>
                <input type="radio" name="answer1" value='3' id="">
            </div>
            
        </div>
        <?php echo $errresult1;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q2;?>               
                    <span style="float: right;">-2</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q21;?>
                </p>
                <input type="radio" name="answer2" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q22;?>
                </p>
                <input type="radio" name="answer2" value='1' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q23;?>
                </p>
                <input type="radio" name="answer2" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q24;?></p>
                <input type="radio" name="answer2" value='3' id="">
            </div>

        </div>
        <?php echo $errresult2;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q3;?>                 
                    <span style="float: right;">-3</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                 <p><?php echo $q31;?></p>
                <input type="radio" name="answer3" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q32;?>
                </p>
                <input type="radio" name="answer3" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <input type="radio" name="answer3" style="float: right; margin-left: .4vw;" value='4' id="">
                <p><?php echo $q33;?></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q34;?>
                </p>
                <input type="radio" name="answer3" value='6' id="">
            </div>

        </div>
        <?php echo $errresult3;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q4;?>                     
                    <span style="float: right;">-4</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q41;?></p>
                <input type="radio" name="answer4" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q42;?>         
                </p>
                <input type="radio" name="answer4" value='1' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q43;?>
                </p>    
                <input type="radio" name="answer4" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q44;?>
                </p>
                <input type="radio" name="answer4" value='3' id="">
            </div>

        </div>
        <?php echo $errresult4;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q5;?>          
                    <span style="float: right;">-5</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q51;?> </p> 
                <input type="radio" name="answer5" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q52;?></p>
                <input type="radio" name="answer5" value='1' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q53;?>
                <p>
                <input type="radio" name="answer5" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q54;?>
                </p>
                <input type="radio" name="answer5" value='3' id="">
            </div>

        </div>
        <?php echo $errresult5;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q6;?>
                    <span style="float: right;">-6</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q61;?></p>
                <input type="radio" name="answer6" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q62;?></p>
                <input type="radio" name="answer6" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <input type="radio" name="answer6" style="float: right; margin-left: .4vw;" value='4' id="">
                <p><?php echo $q63;?></p>
                
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <input type="radio" name="answer6" style="float: right; margin-left: .4vw;" value='6' id="">
                <p>
                <?php echo $q64;?></p>
            </div>

        </div>
        <?php echo $errresult6;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
            <?php echo $q7;?>
                    <span style="float: right;">-7</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q71;?></p>
                <input type="radio" name="answer7" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <input type="radio" name="answer7" value='2' style="float: right; margin-left: .4vw;" id="">
               <p><?php echo $q72;?></p>
                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <input type="radio" name="answer7" value='4'style="float: right; margin-left: .4vw;" id="">
                <p><?php echo $q73;?></p>
                
        </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">

                <p><?php echo $q74;?></p>
                <input type="radio" name="answer7" value='6' id="">
            </div>

        </div>
        <?php echo $errresult7;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                 <p><?php echo $q8;?></p>
                    <span style="float: right;">-8</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q81;?></p>
                <input type="radio" name="answer8" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
               <p><?php echo $q82;?></p>
                <input type="radio" name="answer8" value='1' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p><?php echo $q83;?></p>
                <input type="radio" name="answer8" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q84;?></p>
                <input type="radio" name="answer8" value='3' id="">
            </div>

        </div>
        <?php echo $errresult8;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q9;?>
                    <span style="float: right;">-9</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p>
                <?php echo $q91;?>
                </p>
                <input type="radio" name="answer9" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                 <?php echo $q92;?></p>
                <input type="radio" name="answer9" value='1' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q93;?></p>
                <input type="radio" name="answer9" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q94;?></p>
                <input type="radio" name="answer9" value='3' id="">
            </div>

        </div>
        <?php echo $errresult9;?>
        <hr>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 headerq">
            <h1 class="lead question">
                    <?php echo $q10;?>
                    <span style="float: right;">-10</span>
            </h1>  
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
               <p><?php echo $q101;?></p>
                <input type="radio" name="answer10" value='0' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p>
                <?php echo $q102;?></p>
                <input type="radio" name="answer10" value='2' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                <p><?php echo $q103;?></p>
                <input type="radio" name="answer10" value='4' id="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 answers">
                
                <p><?php echo $q104;?></p>
                <input type="radio" name="answer10" value='6' id="">
            </div>
            <?php echo $errresult10;?>
        </div>

    
            <input type="submit" name="submitquestion" value="Submit" class="submitcontact hvr-shrink">
            </form>
    </div>
</section>    


<div class="he">
  
    <h6 style="float:left;"><div>l</div><div>i</div><div>f</div><div>e</div><div style="">c</div>
    <div>l</div><div>i</div><div>n</div><div>i</div><div>c</div> <div>c</div></h6>
    <h6 style="float:right;"class="difhe"><div>l</div><div>i</div><div>f</div><div>e</div>
    <div style="">c</div><div>l</div><div>i</div><div>n</div><div>i</div><div>c</div> <div>c</div></h6>

</div>
<div class="result <?php echo $classresult;?> text-center">
    <div class="container">
    <i class="fa fa-times closeresult hvr-shrink" aria-hidden="true"></i>

    <div class="col-lg-12">
    
    <img src="img/<?php echo $logo;?>" alt="">
    <div class="text-center healthpre"><?php echo $prehealth;?></div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 resultleft text-right">
        
        <h2>
        تشخيص حالتك الصحية
        <i class="fa fa-arrow-left" aria-hidden="true" style="font-size:1.4vw"></i>
            <span style="border:1px solid #745b19;padding:.3vw"><?php echo $health;?></span>
        </h2>
        <h1>:
        درجة الاكتئاب لدى صحتك هي        
           <span style="border:1px solid #745b19;padding:.3vw"><?php echo $points;?>/42</span>
            يجب عليك   

        </h1>
        
        <p>
        <ul>
            <li> <?php echo $advice1;?> <span class="numberresult"> -1</span></li>
            <li><?php echo $advice2;?><span class="numberresult" > -2</span></li>
            <li><?php echo $advice3;?><span class="numberresult" > -3</span></li>
            <li><?php echo $advice4;?><span class="numberresult"> -4</span></li>
        </ul>

        </p>
        <div class="buttonresult">
            <a href="test.php" claas="btn submitcontact hvr-shrink">restart quiz</a>
            <a href="app.php" claas="btn submitcontact hvr-shrink ">take appointment</a>
            <a href="contact.php" claas="btn submitcontact hvr-shrink">send massege</a>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:2vw;">
        <div style="background:linear-gradient(#3a2602,#745b19);padding:.7vw 1.9999vw;
        position:relative; right:-.7vw;margin:0 1vw"><a href="" claas=" hvr-shrink another" style="width:100%;;
    margin-top: 4vw;
    padding: .7vw 1.9999vw;
    font-size: 1vw;
    color: white;
    margin-left:1.1vw;
    height: 3.4vw;">print medical examination</a></div>

        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 resultright">
    <h2 class="lead text-center headerbek" style="margin-bottom:-.5vw"><?php echo $bek;?> </h2>

    <h1>
    إنّ طبيعة الاختبار تتكون من مجموعة أسئلة يتم الإجابة عليها بأحد أربع درجات تتراوح من (0-3) حسب الخطورة إذ أنّ رقم صفر يدل على أن العرض غير موجود ورقم 3 على أن العرض شديد،
    ,
    يتم تجميع انقاط لتشيكل الدرجة الكلية لكافة الأسئلة وتصنف العلامة لتشخيص الحالة حسب الجدول الآتي:
    </h1>
    <table>
        <tr>
            <th>حالة الاكتئاب</th>
            <th>النقاط</th>
            
        </tr>
        <tr>
             <td>لا يوجد اكتئاب</td> 
            <td>0-9</td>
            
        </tr>
        <tr>
            <td>اكتئاب بسيط</td>
            <td>10-15</td>
            
        </tr>
        <tr>
            <td>اكتئاب متوسط</td>
            <td>23-16</td>
            
        </tr>
        <tr>
            <td>اكتئاب شديد  </td>
            <td>24-36</td>
          
        </tr>
        <tr>
        <td>اكتئاب شديد جدا</td>
            <td>37 فما فوق</td>
            
        </tr>
    </table>
        
    </div>
</div>
</div>

<div class="start" style="display:<?php echo $displaystart;?>">
    <div class="container text-center">
    <img src="img/<?php echo $logo;?>" width="40%" style="margin: 8vw auto .5vw; height: 25vw;display: block;" alt="">
    <img src="assest/divider.svg" width="35%" style="margin: .5vw auto 0;opacity: .5;" alt="">
    <p><?php echo $welcometest;?></p>
    </div>
</div>
<div class="sign <?php echo $showsign;?>" >
             
            <div class="container6">
                
                <div class="signleft col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <i class="fa fa-times <?php echo $close;;?> hvr-shrink" aria-hidden="true"></i>
                    <h1>Hello, Dear!</h1>
                    <div class="line" style="width: 10% !important; margin:1 auto;border:1px solid #745b19 !important;margin-bottom: 1vw; "></div>
                    <?php echo $completesign;?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
                    <div >
                    <i class="fa fa-user iconsign" aria-hidden="true" style="color:<?php echo $colorfontname;?>"></i>   
                  <input type="text" style="text-transform: capitalize; border:<?php echo $colorbordername;?>" value='<?php echo $nameholder;?>' name='name' placeholder='Full-Name' style="border:<?php echo $colorbordername;?>" style="inline"class="text form-control">
                  <div class="error"><?php echo $errname;?></div>
                  <div></div>
                    </div>
                    <div style="margin-top:1vw">
                    <i class="fa fa-envelope iconsign"style="color:<?php echo $colorfontemail;?>" aria-hidden="true"></i>
                  <input type="email"name='email'value='<?php echo $emailholder?>' placeholder="E-mail"style="border:<?php echo $colorborderemail;?>" name="email" id="" class="form-control">
                  <div class="error"><?php echo $erremail;?></div>
                    </div>
                    <div style="margin-top:1vw">
                    <i class="fa fa-lock iconsign"style="color:<?php echo $colorfontpassword;?>" aria-hidden="true"></i>
                  <input type="password"name='password'value='<?php echo $passholder?>'style="border:<?php echo $colorborderpassword;?>" placeholder='Password'name="Password" class='form-control' id="">
                  <div class="error"><?php echo $errpassword;?></div>
                  
                </div>
                    <div style="margin-top:1vw">
                    <i class="fa fa-lock  iconsign"style="color:<?php echo $colorfontre;?>"  aria-hidden="true"></i>    
                  <input type="password"value='<?php echo $repassholder?>' name='repassword' class='form-control'style="border:<?php echo $colorborderre;?>" placeholder="Re-Enter Pssword" name="repassword" id="">
                  <div class="error"><?php echo $errrepassword;?></div>
                    </div>
                  <input type="submit" name='signup' class="submit btn submitsign" value="Create Account">
                  </form>
                  <p class="account">Or already have an acount! <a href="index.php">Log In </a></p>
                </div>
                <div class="signright col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="content4">
                    <h1 style="padding-top: 16vw !important"><?php echo $signheader;?></h1>
                    <p class="lead text-center">
                        <?php echo $signtext;?>
                    </p>
                    <img src="assest/divider.svg" style="opacity: .5; width: 80%; margin:0 auto;" alt="">
              </div></div>
            </div>
        </div> 


        
        <div class="sign <?php echo $login;?>" style="display:<?php echo $displaylog;?> ">
            

            <div class="container6">
                
                <div class="signleft col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <i class="fa fa-times <?php echo $close2;?> hvr-shrink" aria-hidden="true"></i>
                    <h1 class="text-center dif13" style="padding-top:9vw !important"><i class="fa fa-user dif10" aria-hidden="true"></i></h1>
                  <form action="<?php echo $_SERVER['PHP_SELF']?>"method="post">
                  <div style="margin-top:1vw">
                  <i class="fa fa-envelope iconsign"style="color:<?php echo $colorfontemail1;?>" aria-hidden='true'></i>
                  <input type='email'  placeholder="E-mail" style="border:<?php echo $colorborderemail1;?>;" value="<?php echo $email1;?>"
                  name="email" id="" class="form-control">
                  <div class="error"><?php echo $erroremail1;?></div>

                  </div>
                  <div style="margin-top:1vw">
                  <i class="fa fa-lock iconsign "style="color:<?php echo $colorfontpassword1;?>" aria-hidden="true"></i>
                  <input type="password" placeholder='Password'name="pass"
                   class='form-control' id=""value="<?php echo $password1;?>" style="border:<?php echo $colorborderpassword1;?>;";>
                   <div class="error"><?php echo $err;?></div>

                  
                  </div>
                  
                  
      
                  <input type="submit" class="submit btn submitsign submitsign1 dif11"name='login' value="Log In">
                  </form>
                  <p class="account dif14">don't have account! <a href="index.html?headertag5">Sign up </a>
                    <br> <hr> <p class="dif14">or log in with </p></p>
                  <div class="iconslog">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-google" aria-hidden="true"></i>
                    <i class="fa fa-telegram" aria-hidden="true"></i>

                  </div>
                </div>
                <div style="height:57vw" class="signright  col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="content4 dif15">
                    <h1 style="padding-top:14vw !important"><?php echo $logheader;?></h1>
                    <p class="lead">
                    <?php echo $logtext;?>
                    </p>
                    <img src="assest/divider.svg" style="opacity: .5; width: 80%; margin:0 auto;" alt="">

                </div></div>
            </div>
        </div>
        
    <?php     
    $selectuser="SELECT * FROM users where FullName='$session'";
     $queryrunuser=mysqli_query($conn,$selectuser);
     $fetchuser=mysqli_fetch_array($queryrunuser);
     $id=$fetchuser['id'];
     $image=$fetchuser['image'];
    ?>

        <!--edit profile-->
        <div class="sign editprofile" style="display:<?php echo $displaysectionprofile;?>;">
            

            <div class="container6">
                
            <div class="signleft col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
            <div class="edit2" style="display:<?php echo $displaycheck;?>">
            <i class="fa fa-times <?php echo $close3;;?> hvr-shrink" aria-hidden="true"></i>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get" style="padding-top:12vw">
            <img src="img/<?php echo $logo?>" class="dif20" style="border-radius:59%;height:16vw; width:17vw;margin-bottom:-11vw" alt="">
            <h1 style="font-size:1.5vw;"> يجب عليك اعادة كتابة كلمة السر لتعديل بياناتك الشخصية</h1>
            <div style="margin-top:1vw"></div>
            <i class="fa fa-lock  iconsign"style="color:<?php echo $colorfontpassword2;?>"  aria-hidden="true"></i>    
            
            <input type="password" name='checkpassword' class='form-control'style="border:<?php echo $colorborderpassword2;?>" placeholder="Re-Enter Pssword" name="repassword" id="">
            <div class="error"><?php echo $errorcheck;?></div>
            <input type="submit" style="padding:.8vw 1.3vw;margin:1vw 1.5vw 1vw 1vw" name='check' class="submit btn submitsign" value="check password">
            </form>
        </div>
        
        <div class="edit1" style='display:<?php echo $displayeditprofile;?>'>
        <i class="fa fa-times <?php echo $close3;;?> hvr-shrink" aria-hidden="true"></i>

        <img src="users/<?php echo $image;?>" alt="">
                <?php echo $success;?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
            <div>
            <label for=""class="labeldif">Change Photo</label>
            <input type="file"name='photo' class='form-control file' id="">
            
            </div>
                <div style="margin-top:1vw">
                <label for=""class="labeldif"style="margin-left:-14.6vw">Change Full-Name</label>
                <i class="fa fa-user iconsign" aria-hidden="true" style="color:<?php echo $colorfontname2;?>"></i>   
                  <input type="text" style="text-transform: capitalize; border:<?php echo $colorbordername2;?>" value='<?php echo $session;?>' name='newname' placeholder='Full-Name' style="border:<?php echo $colorbordername2;?>" style="inline"class="text form-control">
                  <div class="error"><?php echo $errname1;?></div>   
            </div>
                
                <div style="margin-top:1vw">
                <label for=""class="labeldif">Change Emial</label>
                <i class="fa fa-envelope iconsign"style="color:<?php echo $colorfontemail2;?>" aria-hidden="true"></i>
                <input type="email"name='newemail'value='<?php echo $emailsession?>' placeholder="E-mail"style="border:<?php echo $colorborderemail2;?>" name="email" id="" class="form-control">
                <div class="error"><?php echo $erremail1;?></div>
                </div>    
                <div style="margin-top:1vw">
                <label for=""class="labeldif" style="padding-left:.8vw">New Password</label>
                <i class="fa fa-lock  iconsign"style="color:<?php echo $colorfontpassword2;?>"  aria-hidden="true"></i>    
                <input type="password"value='' name='newpassword' class='form-control'style="border:<?php echo $colorborderpassword2;?>" placeholder="New Password" name="repassword" id="">
                <div class="error"><?php echo $errpassword1;?></div>
                </div>
                <input type="hidden" name="headertag4">
                  <input type="submit"style="padding:.8vw 1.3vw;margin:1vw 1.5vw 1vw 1vw" name='editprofile' class="submitprofile btn submitsign" value="Edit Profile">
                  </form>
                </div>
                </div>
                <div style="height:60vw !important" class="signright  col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="content4 dif15">
                    <h1 style="padding-top:14vw !important">  <?php echo $editprofile?></h1>
                    <p class="lead">
    <?php echo $editprofiletext;?> </p>
                    <img src="assest/divider.svg" style="opacity: .5; width: 80%; margin:0 auto;" alt="">

                </div>
            </div>
            </div>
        </div>
<div class="scr">
    <i class="fa fa-chevron-up scroll hvr-grow" aria-hidden="true"></i>
</div>
    <div class="clear"></div>
    <footer class="headerstags">
        <div class="container">
        <div class="firstfooter">
           <ul>
           <li class="hvr-bounce fo">
               <a href="<?php echo $facebook;?>"  class="hvr-grow">Facebook</a></li>
                <li><a href="">|</a></li>
                <li><a href="<?php echo $instagram;?>"class="hvr-grow" >instagram</a></li>
                <li><a href="">|</a></li>
                <li><a href="<?php echo $twiter;?>" class="hvr-grow">twitter</a></li>
                <li><a href="">|</a></li>
                <li><a href="<?php echo $email;?>" class="hvr-grow">Gmail</a></li>
                <li><a href="">|</a></li>
                <li><a href="<?php echo $telegram;?>" class="hvr-grow">Telegram</a>
           </ul>
        </div> 
    
        <div class="footerdis"></div>
        <div class="secondfooter">
            <p class="adress phone"><bold>العنوان <bold>:</bold></bold> <?php echo $locationar;?>
            </p>
            <p class="phone"><bold>اوقات العيادة <bold>:</bold></bold> <?php echo $timeopenar;?> </p>
            <p class="phone"><bold>هاتف <bold>: </bold></bold><?php echo $numberar;?> </p>
            

        </div>
        </div>
    </footer>
    <script src="js/subpages.js " type="text/javascript"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.js "></script>
    <script src="jquery2.js "></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>

    <script>
        
        const sers=document.querySelectorAll('.leftlist li');
        function toggleborder(a){
            for(var i=0;i<sers.length;i++){
                sers[i].classList.remove('activeser');
            }
            sers[a-1].classList.add('activeser');
        
        }
    </script>
    <script>
        $(document).ready(function(){
            $('.html').niceScroll({});
        })
    </script>
    
</body>
</html>



