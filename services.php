<?php 
include "assignvalues.php";
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
?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    
    
<script src="https://use.fontawesome.com/17edc14b3c.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/772b1cd801.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/design.css">
<link rel="stylesheet" href="css/design1.css">
<link rel="stylesheet" href="css/hover-min.css">
<link rel="stylesheet" href="css/sign.css" class="css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
<style>
    .first a img {
    width: 14vw;
    height: 12.5vw;
}
    .active{
        margin-right: -.8vw;
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
                    <a href="app.php" class="hvr-grow"> المواعيد</a>
                    <a href="ourteam.php" class="hvr-grow">الاعضاء</a>
                    <a href="services.php" class="hvr-grow active">الخدمات</a>
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

    <div class="clear"></div>

    <section class="servicessub <?php echo $headertag;;?>">
        <div class="leftlist">
        
            <h1 class="text-center"><i class="fa fa-plus-square" aria-hidden="true"></i><span style="padding:0 .5vw">our services</span><i class="fa fa-plus-square" aria-hidden="true"></i></h1>
            <img src="assest/divider.svg" style="padding-top: .3vw;" alt="">

            
            <ul>
                <li class="showsrv1 activeser activeborder hvr-shrink" onclick="toggleborder(1)"><i class="fa fa-stethoscope sericon sericon1 " aria-hidden="true"></i> <span><?php echo $ser1;?></span></li>
                <li class="showsrv2 hvr-shrink" onclick="toggleborder(2)"><i class="fa fa-h-square sericon1 sericon" aria-hidden="true"></i> <span><?php echo $ser2;?></span> </li>
                <li class="showsrv3 hvr-shrink" onclick="toggleborder(3)"><i class="fa fa-users sericon1 sericon" aria-hidden="true"></i> <span> <?php echo $ser3;?></span></li>
                <li class="showsrv4 dif1 hvr-shrink" onclick="toggleborder(4)"><i class="fa fa-lock sericon1 sericon dif1" aria-hidden="true"></i> <span> <?php echo $ser4;?>
                </span></li>
            </ul>
            <img src="assest/divider.svg" alt="">
        </div>
        <div class="rightservices">
            
            <div class="contentsubser ser1show ">
                <img src="img/<?php echo $seradvimg1;?>" alt="">
                <h4><?php echo $seradv1;?></h4>
            </div>
            <div class="contentsubser ser2show">
            <img src="img/<?php echo $seradvimg2;?>" alt="">
                <h4><?php echo $seradv2;?></h4>
            </div>
            <div class="contentsubser ser3show ">
            <img src="img/<?php echo $seradvimg3;?>" alt="">
                <h4><?php echo $seradv3;?></h4>
            </div>
            <div class="contentsubser ser4show">
            <img src="img/<?php echo $seradvimg4;?>" alt="">
                <h4><?php echo $seradv4;?></h4>
            </div>
            
        </div>
    </section>
    <?php echo $_SESSION['nameimg']?>;
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
    <footer class="headerstags">
        <div class="container">
        <div class="firstfooter">
           <ul>
               <li class="hvr-shrink">
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
