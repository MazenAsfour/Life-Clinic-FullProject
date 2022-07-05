<?php 
include 'assignvalues.php';
include "operation.php";
include "profile.php";
session_start();

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
error_reporting(0);



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

//echo strtotime($maxdate);
//echo strtotime("5/4/2022");
//if(strtotime("1/5/2022") >= strtotime($maxdate) ){
 //   echo 'valid';
//}
$sessionexp=explode(" ",$session);
$sucessapp="";
$colorborderfirst="";
$colorbordersecond="";
$colorborderemailapp="";
$colorborderphone="";
$colorborderright="";
$colorborderdoctor="";
$colorborderevent="";
$colorborderfrom='';
$from='';
$warning='';
$colorborderdate="";
$colorborderbirthday="";
$errfirst=$errsecond=$erremailapp=$errphone=$errbirthday=$errsessionapp=
$errdoctor=$errevent=$errright=$errfrom='false';
$errfirst1=$errsecond1=$erremailapp1=$errphone1=$errbirthday1=$errsessionapp1=
$errdoctor1=$errevent1=$errright1='';

$firstname=$secondname=$birthday=$emailapp=$phone=$righttime=$eventtime=
$eventtime=$sessiondate=$choosedoctor='';

if(isset($_GET['app'])){
if(empty($_SESSION['username'])){
    $warning="<div class='error' style='margin-top:4vw'>you must log In first then take appointment!<div> ";}
else{
$firstname=$_GET['first'];
$secondname=$_GET['second'];
$birthday=$_GET['birthday'];
$emailapp=$_GET['email'];
$phone=$_GET['phone'];
$fromvalue=$_GET['from'];

$righttime=$_GET['righttime'];
$eventtime=$_GET['event'];

$sessiondate=$_GET['session'];
$choosedoctor=$_GET['doctor'];
$pattern = "/[0-9]{1,}[a-z]+/i";
//$error=false;
$pattern1 = "/[0-9]{1,}/i";
if(strlen($firstname)<3){
    $errfirst1="you must write your first-name at least 2 character!";
    $errfirst='true';
    $colorborderfirst='1px solid #f10808';
}
if(strlen($secondname)<3){
    $errsecond1="you must write your first-name at least 2 character!";
    $errsecond='true';
    $colorborderfirst='1px solid #f10808';
}
if(preg_match($pattern,$secondname)){
    $errsecond1="your family-name must contain just text!";
    $errsecond='true';
    $colorbordersecond='1px solid #f10808';
}
if(preg_match($pattern,$firstname)){
    $errfirst1="your first-name must contain just text!";
    $errfirst='true';
    $colorborderfirst='1px solid #f10808';
}
if(preg_match($pattern1,$firstname)){
    $errfirst1="your first-name must contain just text!";
    $errfirst='true';
    $colorborderfirst='1px solid #f10808';
}
if(preg_match($pattern1,$secondname)){
    $errsecond1="your family-name must contain just text!";
    $errsecond='true';
    $colorbordersecond='1px solid #f10808';
}
if(strtotime($birthday)<strtotime('12-12-1950')){
    $errbirthday1="you must write valid birthday!";
    $errbirthday='true';
    $colorborderbirthday='1px solid #f10808';
}
if(strtotime($birthday)>strtotime('20-5-2022')){
    $errbirthday1="you must write valid birthday!";
    $errbirthday='true';
    $colorborderbirthday='1px solid #f10808';
}
if(strtotime($sessiondate)<strtotime('20/5/2022')){
    $errsessionapp1="you must choose valid date!";
    $errsessionapp='true';
    $colorborderdate='1px solid #f10808';
}
if(strtotime($sessiondate)>strtotime('1/1/2023')){
    $errsessionapp1="you must choose valid date ,the date you choose after belong period!";
    $errsessionapp='true';
    $colorborderdate='1px solid #f10808';
}
if(empty($firstname)){
    $errfirst1="you must write your first-name it's empty!";
    $errfirst='true';
    $colorborderfirst='1px solid #f10808';
}
if(empty($secondname)){
    $errsecond1="you must write your family-name it's empty!";
    $errsecond='true';
    $colorbordersecond='1px solid #f10808';
}
if(empty($emailapp)){
    $erremailapp1="you must write your email it's empty!";
    $erremailapp='true';
    $colorborderemailapp='1px solid #f10808';
}
if(strlen($phone)!==10){
    $errphone1="you must write valid phone number!";
    $errphone='true';
    $colorborderphone='1px solid #f10808';
}
if(empty($phone)){
    $errphone1="you must write your phone it's empty!";
    $errphone='true';
    $colorborderphone='1px solid #f10808';
}

if(empty($birthday)){
    $errbirthday1="you must write your birthday it's empty!";
    $errbirthday='true';
    $colorborderbirthday='1px solid #f10808';
}
if(empty($sessiondate)){
    $errsessionapp1="you must choose event time for correct apointments!!";
    $errsessionapp='true';
    $colorborderdate='1px solid #f10808';
}
if(empty($righttime)){
    $errright1="you must choose o'clock that suits you!";
    $errright='true';
    $colorborderright='1px solid #f10808';
}
if(empty($fromvalue)){
    $from="you must choose Place of residence!";
    $errfrom='true';
    $colorborderfrom='1px solid #f10808';
}
if(empty($eventtime)){
    $errevent1="you must choose your Acadmic study To make Statistics!";
    $errevent='true';
    $colorborderevent='1px solid #f10808';
}
if(empty($choosedoctor)){
    $errdoctor1="you must choose doctor you want !";
    $errdoctor='true';
    $colorborderdoctor='1px solid #f10808';
}
//echo date("d-m-20y");
$datetime1=new DateTime($sessiondate);
if( strtotime(date("d-m-20y")) > strtotime($sessiondate)){
    $errsessionapp1="you must choose valid date. date you confirm is before the local date! ";
    $errsessionapp='true';
    $colorborderdate='1px solid #f10808';
    
  
}
//echo strtotime($sessiondate);
//echo strtotime(date("d-m-y"));
if( $datetime1 > new DateTime($maxdate) ){
    $errsessionapp1="you must choose date equal or after the local date 
    ".date("d/m/y")." in 5 days !";
    $errsessionapp='true';
    $colorborderdate='1px solid #f10808';
    //echo $sessiondate;
    //echo $maxdate;
}

if($errbirthday=='false'& $errdoctor=='false' & $erremailapp=='false' & $errevent=='false' &
$errfirst=='false' & $errsessionapp=='false' & $errright=='false' & $errsecond=='false' & 
$errphone=='false'){
    $selectdate="SELECT * from appointments";
    $app=mysqli_query($conn,$selectdate);
    $noapp='true';
    
    while($fetchdate=mysqli_fetch_array($app)){
        if(strtotime($sessiondate)==strtotime($fetchdate['sessiondate']) & 
        $righttime==$fetchdate['righttime'] & $choosedoctor==$fetchdate['doctor']){
            //echo 'isset';
            $errright1="the doctor has appointment in this clock,
            plesae choose another clock or another day ";
            $colorborderright='1px solid #f10808';
            $noapp='false';
        }
       
    }
    $ac=$_GET['event'];
    //echo $ac;
    if($noapp=='true'){
   $insertapp="INSERT INTO appointments(firstname,familyname,birthday,email,phone,righttime
   ,eventtime,sessiondate,doctor,place)
   values ('$firstname',
   '$secondname',
   '$birthday',
   '$emailapp',
   '$phone',
   '$righttime',
   '$eventtime',
   '$sessiondate',
   '$choosedoctor',
   '$fromvalue')";
   /*('$firstname','$secondname','$birthday',
   '$emailapp','$phone','$righttime','$eventtime','$sessiondate','$choosedoctor',
   '$fromvalue')"*/
    $insertapp1="INSERT into backupsapp(firstname,familyname,birthday,email,phone,righttime
    ,eventtime,sessiondate,doctor,place)values('$firstname','$secondname','$birthday',
    '$emailapp','$phone','$righttime','$eventtime','$sessiondate','$choosedoctor','$fromvalue')";
    mysqli_query($conn,$insertapp1);
    $a=mysqli_query($conn,$insertapp);
   if(!$a){
       echo mysqli_error($conn);
   }
   $sucessapp="<div class='green' style='width:41vw;margin-top:4vw;margin-bottom:-2vw !important;padding:.5vw'>successfully done choose your appointment 
   ,We are waiting for you</div>";
   header("REFRESH:4;url=app.php");
}
}
}
}



?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    
    
<script src="https://use.fontawesome.com/17edc14b3c.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/772b1cd801.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/design.css">
<link rel="stylesheet" href="css/hover-min.css">
<link rel="stylesheet" href="css/sign.css" class="css">
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->


<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
<style>

.active{
margin-left: 1vw !important;
}
.appointment .form-control{
    width: 100%;
    padding: 1.5vw;
    margin:.2vw;
    border-radius: 12px;

}
label{
    margin-top: 3vw;
    padding-left: .7vw;
    color: #665116;
    text-align: right !important;
}
.first a img {
    width: 14vw;
    height: 12.5vw;
}
select[size]{
    height: 3.23vw;
    padding: .1vw 1vw;
}
.form-control{
    z-index: 1 !important;
}
button, html input[type="button"], input[type="reset"], input[type="submit"]{
    background:linear-gradient(#3a2602,#745b19);
    margin: 2vw 0;
    font-size: 1.2vw;
    color: white;
    width: 18%;
    height: 3.4vw;
    text-align: center !important;
    }
.submitapp{
    width: 100%;
}

.headerapp p{
    font-size: 1.5vw;
    padding: .2vw;
    font-family: math;
}
.dif16 {
    left: -14.1vw !important;
    top: -5.2vw;
}

.dif7 {
    left: -14.1vw !important;
    top: -5.2vw;
}
.btn{
    color: white;
}
.btn:hover{
    color: white;
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
    .nameimg img{
    height:2vw;
    width:2vw;
    border-radius:100%
    }
    .error{
        text-align:center
    }
    .errorwarning {
    color: #f10808;
    padding: .5vw 0vw 0;
   
    background-color: #e9d8d8;
    font-size: 1.1vw;
    margin: 1vw auto;
    padding: 0.5vw;
}
</style>
</head>

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
                    <a href="test.php" class="hvr-grow">اختبر نفسك</a>
                    <a href="contact.php" class="hvr-grow">اتصل بنا</a>
                    <a href="about.php" class="hvr-grow">معلومات عنا</a>
                    <a href="app.php" class="hvr-grow active"> المواعيد</a>
                    <a href="ourteam.php" class="hvr-grow">الاعضاء</a>
                    <a href="services.php" class="hvr-grow">الخدمات</a>
                    <a href="index.php" class="hvr-grow ">الصفحة الرئيسية</a>
                    
                </li>
                </ul>
                </div>
                <div class="third">
                    <h1>healthy thinking clinic safe with a results.</h1>
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
<?php    












?>;
<section class="<?php echo $headertag;;?> appointment">
<div class="container ">
    <?php echo $_SESSION['nameimg'];?>
    <div class="headerapp text-center">
        <h1>Take appointment!</h1>
        <p>
                    اجعل المواعيد أسرع. حدد موعدًا سريعًا مع طبيبك ، أو تواصل بسهولة مع خبير رعاية صحية جديد.

        </p>
        <img src="assest/divider.svg" alt="">
        <?php echo $sucessapp;?>
        <?php echo $warning;
         
        ?>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <div class="col-lg-12">
        <div class="col-1g-6 col-md-6 col-sm-12 col-xs-12">
            <label for="" class="difapp" >first name</label>
            <input type="text"value="<?php echo $sessionexp[0];?>" readonly name="first"style="border:<?php echo $colorborderfirst;?>" class="form-control" placeholder="First-Name" id="">
            <div class="error"><?php echo $errfirst1;?></div>
        </div>
        <div class="col-1g-6 col-md-6 col-sm-12 col-xs-12">
            <label for="" class="difapp">family Name</label>
            <input type="text"value="<?php echo $sessionexp[1];?>" readonly name="second"style="border:<?php echo $colorbordersecond;?>" placeholder="Fmaily-name" class="form-control" id="">
            <div class="error"><?php echo $errsecond1;?></div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-1g-4 col-md-4 col-sm-12 col-xs-12">
            <label for="">Birthday</label>
            <input type="date"value="<?php echo $birthday;?>" style="border:<?php echo $colorborderbirthday;?>" name="birthday" class="form-control" id="">
            <div class="error"><?php echo $errbirthday1;?></div>
        </div>
        <div class="col-1g-4 col-md-4 col-sm-12 col-xs-12">
            <label for="">Email</label>
            <input type="email"value="<?php echo $emailsession;?>" readonly style="border:<?php echo $colorborderemailapp;?>" name="email" placeholder="Email" class="form-control" id="">
            <div class="error"><?php echo $erremailapp1;?></div>
        </div>
        <div class="col-1g-4 col-md-4 col-sm-12 col-xs-12">
            <label for="">Phone Number</label>
            <input type="number" value="<?php echo $phone;?>" style="border:<?php echo $colorborderphone;?>" name="phone" placeholder="+962" class="form-control" id="">
            <div class="error"><?php echo $errphone1;?></div>
        </div>
    </div>
    
    <div class="col-lg-12">
    <div class="col-1g-4 col-md-4 col-sm-12 col-xs-12">
            <label for="">Academic qualifications</label>
            <select name="event"  class="form-control" value="<?php echo $eventtime;?>" size="1"style="padding: .1vw 1vw;border:<?php echo $colorborderevent;?>" id="" >
                <option value="">--</option>
                <option value="I didn't study">I did not study</option>
                <option value="Tawgihi">Tawgihi</option>
                <option value="diploma certificate">diploma certificate</option>
                <option value="Bachelor's degree">Bachelors degree</option>
                <option value="Master's degree">Masters degree</option>
            </select>
            <div class="error"><?php echo $errevent1;?></div>
         </div>
        <div class="col-1g-4 col-md-4 col-sm-12 col-xs-12">
            <label for="">The right time for the session</label>
            <select name="righttime" placeholder="hello" value="<?php echo $righttime;?>" id="" size="1" class="form-control" style="padding: .1vw 1vw;border:<?php echo $colorborderright;?>">
                <option value="">--</option>
                <option value="8 Am - 10 Am">8 Am - 10 Am</option>
                <option value="8 Am - 10 Am">10 Am - 12 Pm</option>
                <option value="12 Pm - 2 Pm">12 Pm - 2 Pm</option>
                <option value="2 Pm - 4 Pm">2 Pm - 4 Pm</option>
                <option value="2 Pm - 4 Pm">4 Am - 5 Pm</option>
            </select>
            <div class="error"><?php echo $errright1;?></div>
        </div>
       
        <div class="col-1g-4 col-md-4 col-sm-12 col-xs-12">
            <label for="">session date </label>
            <input type="date" value="<?php echo $sessiondate;?>"   name="session" class="form-control" id=""  style="border:<?php echo $colorborderdate;?>">
            <div class="error"><?php echo $errsessionapp1;?></div>

        </div>
        <div class="col-lg-12">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="">Choose a Doctor</label>
            <select name="doctor"value="--"  id="" size="1" class="form-control" style="padding: .1vw 1vw;border:<?php echo $colorborderdoctor;?>">
                <option value="">--</option>
                <option value="<?php echo $doctor1name;?>"><?php echo $doctor1name;?></option>
                <option value="<?php echo $doctor2name;?>"><?php echo $doctor2name;?></option>
                <option value="<?php echo $doctor3name;?>"><?php echo $doctor3name;?></option>
                <option value="<?php echo $doctor4name;?>"><?php echo $doctor4name;?></option>
            </select>
            <div class="error"><?php echo $errdoctor1;?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="">From </label>
            <select name="from" placeholder="hello" value="<?php echo $fromvalue;?>" id="" size="1" class="form-control" style="padding: .1vw 1vw;border:<?php echo $colorborderfrom;?>">
                <option value="">--</option>
                <option value="Amman">Amman</option>
                <option value="Zarqa">Zarqa</option>
                <option value="Irbid">Irbid</option>
                <option value="Ajluan">Ajluan</option>
                <option value="Jarash">Jarash</option>
                <option value="Aqaba">Aqaba</option>
                <option value="Mafraq">Mafraq</option>
                <option value="Maan">Maan</option>
                <option value="Maan">Other</option>
            </select>
            <div class="error"><?php echo $from;?></div>
            </div>
        </div>
        <div class="col-lg-12 submitapp text-center">
            <input type="submit" value="Make Appointment" name="app" class="submitapp hvr-shrink btn ">
        </div>
        </form>
    </div>
</div>
</section>
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
                  <p class="account dif14">don't have account! <a href="index.php?headertag5">Sign up </a>
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
<!--<div class="scr">
    <i class="fa fa-chevron-up scroll hvr-grow" aria-hidden="true"></i>
</div>-->
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
            </li>
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
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



