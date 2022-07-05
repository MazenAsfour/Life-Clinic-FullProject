<?php 
include 'assignvalues.php';
session_start();
//echo $_SESSION['admin'],$_SESSION['username'];


$session='';
$emailsession='';
$passwordsession='none';
$sessionimage='user.png';
$sessionid='';
$profile='profile';
include 'assignvalues.php';
include 'operation.php';

error_reporting(E_WARNING | E_PARSE);
error_reporting(0);
$log="showlog";
$sign="showsign";

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

$successsub='';
date_default_timezone_set("Asia/Jerusalem");
$date= date('y/m/d h:i:s');
if(isset($_GET['submitsub'])){
   $emailsub=$_GET['emailfromindex'];
   $insertsub="INSERT INTO subsucribtion(email,date)
   values('$emailsub','$date')";
   mysqli_query($conn,$insertsub);
   $successsub="<div class='green' style='width:18vw;margin-top:.6vw;margin-bottom:.2vw !important; padding:.4vw'>subscribed seccessfully</div>";
   
   header("REFRESH:5;url=index.php");

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    



<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/design.css">
<link rel="stylesheet" href="css/hover-min.css">
<link rel="stylesheet" href="css/sign.css" class="css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
<style>
.item1{
    background-image:URL("img/<?php echo $slideroneimg1;?>");
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 45vw;
    position: relative;
    opacity: 1;    
    
}
.item2{
    background-image:url('img/<?php echo $slideroneimg2;?>');
    background-size: cover;
    width: 100%;
    height: 45vw;
    background-repeat: no-repeat;
    position: relative;
    top: 0%;
    opacity: 0;
}
.active{
    margin-left: .5vw;
}
.item3{
    background-image:url('img/<?php echo $slideroneimg3;?>');
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    width: 100%;
    
    height: 45vw;
    top: 0%;
    opacity: 0;
}
.team{
   
    background-color: #c0b09a  !important;
    opacity: .8!important;
    

}



.sub{
    background-image: url('img/sub.webp');
    background-size: cover;
    background-repeat: no-repeat;
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
.services{
    background-image: url('img/backgroundser.webp');
    background-repeat: no-repeat;
    background-size: cover;
    padding: 3vw 0;
}
.closeprofile{
    position: relative;
top: 2vw;
font-size: 2vw !important;
color: #523603 !important;
left: -23vw;
font-weight: bold;
border: 2px solid rgb(73, 54, 2);
cursor: pointer;
opacity: .9;
padding: .2vw;
}

.hrright {
    border-bottom: 1px solid rgb(151 119 32);
    display: inline-block;
    /* margin: 45px; */
    width: 14%;
    /* margin: 0 auto; */
    margin-bottom: .85vw !important;
    margin-left: 0.4vw;
    text-align: center;
    
}

.hrleft {
    border-bottom:1px solid rgb(151 119 32);
    display: inline-block;
    /* margin: 45px; */
    width: 14%;
    /* margin: 0 auto; */
    margin-right: 0.5vw;
    margin-bottom: 0.85vw !important;
    text-align: center;
}
.cur{
    display:inline-block
}

</style>
</head>


<body>
    <body>
        <nav class="<?php echo $headertag;;?>">
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
                    <a href="services.php" class="hvr-grow">الخدمات</a>
                    <a href="index.php" class="hvr-grow active">الصفحة الرئيسية</a>
                    
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
   
        <div class="clear headerstags"></div>
       
       
        <section class="slider <?php echo $headertag;?>">
            
                <div class="item1 items " id="#item1">
                 <div class="item ">
                    <p class='lead text-center'><?php echo $slideronetext1;?></p>
                    </p>
                    <img src="assest/divider.svg" alt="">
                   </div>
                </div>
                
                <div class="item2 items ">
                   <div class="item">
                        <p class="lead  text-center">
                        <?php echo $slideronetext2;?>
                        </p>
                        <img src="assest/divider.svg" alt="">
                    </div>
                </div>
                <div class="item3 items">
                  <div class="item">
                    <p class='lead text-center'><?php echo $slideronetext3;?>                                                                                    
                    </p>
                    <img src="assest/divider.svg" alt="">
                   </div>
                </div>
                <div class="control">
                   <span class='slide1' onclick="sliderclear(1)" class="activeslide"></span>
                   <span class="slide2" onclick="sliderclear(2)"></span>
                   <span class='slide3' onclick="sliderclear(3)"></span>
                </div>
                <div class="move">
                    <i class="fa fa-angle-right next hvr-grow" aria-hidden="true" onclick="clearloop(1)"></i>
                    <i class="fa fa-angle-left left hvr-grow" aria-hidden="true" onclick="clearloop(-1)"></i>
                </div>
               
                
        </section>

        <section class="meet <?php echo $headertag;;?> text-center">
            <div class="container"> 
                <span class="hrleft"></span><h1 class="text-center cur"><?php echo $guideheader;?> </h1>
                <span class="hrright"></span>
                <p class="meetparg text-center lead">
                <?php echo $guidedes;?>
                </p>
            </div>
        </section>

   
    <section class="<?php echo $headertag;;?> services">
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="height: 20vw; float: right;">
                    <h1 style="margin: .2vw 0; margin-top: 2vw; color: #745b19; font-size: 1.5vw; text-align: right;">
                    <?php echo $serheader;?>
                    </h1>
                    <div class="line1"></div>
                    <p style="font-size:1.2vw; padding:1vw 0vw .5vw; text-align: right;">
                    <?php echo $serheadertext;?>
                    </p>
                    <img src="assest/divider.svg" alt="">
                </div>
                
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 ser">
                        <h2 class="headerser">  <?php echo $ser1;?> </h2>
                        <div class="line"></div>
                        <p class="pargserv">
                        <?php echo $ser1des;?>
                        </p>
                    </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 ser">
                        <h2 class="headerser"><?php  echo $ser2;?></h2>
                        <div class="line"></div>
                        <p class="pargserv">
                        <?php echo $ser2des;?>
                        </p>
                    </div>
                    </div>
                
                <div class="col-lg-8 col-md-8 col-sm-8  ">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 ser">
                        <h2 class="headerser"><?php echo $ser3;?>  </h2>
                        <div class="line"></div>
                        <p class="pargserv">
                        <?php echo $ser3des;?>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3  ser">
                        <h2 class="headerser"><?php echo $ser4;?> </h2>
                        <div class="line"></div>
                        <p class="pargserv">
                        <?php echo $ser4des;?>
                        </p>
                    </div>
                </div>
               </div>
            
            
        </div>
    </section>
        <section class="<?php echo $headertag;;?>">
            <div class="slider2">  
                <div class="text-center">
               <span class="hrleft text-center"></span> <h1 class="cur text-center"><?php echo $workheader;?>  </h1>
               <span class="hrright text-center"></span></div>
                <p class="text-center workheader"><?php echo $workheadertext;?></p>
                </p>
                <div class="container">
                    <div class="work work1">
                        <div class="text col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="imagesslider">
                                <img src="img/<?php echo $work1img;?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-6"  alt="">
                                
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h2 class="header"><?php echo $work1header;?> 
                            </h2>
                            <p class="parg2">
                                <?php echo $work1des;?>
                            </p>
                            <img src="assest/divider.svg"style="margin-top:1vw"  alt="">
                            </div>
                        </div>
                        
                    
                    <div class="work work2">
                        <div class="imagesslider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img src="img/<?php echo $work2img;?>"  alt="">
                            
                        </div>
                        <div class="text col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h2 class="header"><?php echo $work2header;?></h2>
                            <p class="parg2">
                                <?php echo $work2des;?>
                            </p>
                            <img src="assest/divider.svg" alt="">
                        </div>
                        
                    </div>
                    <div class="work work3">
                        <div class="imagesslider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img src="img/<?php echo $work3img;?>"   alt="">
                        </div>
                        <div class="text col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h1 class="header"><?php echo $work3header;?></h1>
                            <p class="parg2">
                                <?php echo $work3des;?>
                            </p>
                            <img src="assest/divider.svg" alt="">
                        </div>
                       
                    </div>
                    <div class="work work4 ">
                        <div class="imagesslider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <img src="img/<?php echo $work4img;?>"   alt="">
                        </div>
                        <div class="text col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h1 class="header"><?php echo $work4header;?></h1>
                            <p class="parg2">
                                <?php echo $work4des;?>
                            </p>
                            <img src="assest/divider.svg"alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="controlslide2 ">
                    <i class="fa fa-long-arrow-left hvr-grow" onclick="slider2(-1)" aria-hidden="true"></i>
                    <i class="fa fa-long-arrow-right hvr-grow" onclick="slider2(1)" aria-hidden="true"></i>
                </div>
            </div>
        </section>
        
        <div class="clear"></div>
       
        <section class="<?php echo $headertag;;?> sub">
            <div class="container text-center">
                <div class="text-center">
                <span class="hrleft"></span>
                <h1 class="cur text-center"><?php echo $sub;?> </h1> 
                <span class="hrright"></span>   
                </div>
                <?php echo $successsub;?>
                <h3 style="text-align: center;">
                <?php echo $subtext;?>
                </h3>
                    <div class="col-lg-12">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="email"value="<?php echo $emailsession;?>" name="emailfromindex" placeholder="Email" class="form-control formdif1" id="">
                        <span><input type="submit" name="submitsub" value="SubScribe" class="hvr-grow btn subbutton"> </span>
                        </form>
                    </div>
                    

            </div>
        </section>
        <section class="features <?php echo $headertag;;?>">
            <div class="text-center">
            <span class="hrleft"></span>
            <h1 class="cur text-center" style="padding-bottom:.1vw" ><?php echo $featureheader;?> </h1>
            <span class="hrright"></span></div>
            <p class="text-center meetparg">
                <?php echo $featureheadertext;?>
            </p>
            <div class="container">
                <div class="fe col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="img/<?php echo $featureimage;?>" alt="">
                </div>
                <div class="sectionf1">
                <div class="fe col-lg-6 col-md-6 col-sm-6 col-xs-6" style="margin-top: 2vw;">
                    
                        
                        <div class="fes1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            <h2> <?php echo $f1header;?> </h2>
                            <p><?php echo $f1text;?></p>
                        </div>
                        <div class="fes1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h2> <?php echo $f2header;?> </h2>
                            <p><p><?php echo $f2text;?></p></p>
                        </div>
                    </div>   
                    <div class="fe col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="fes1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h2> <?php echo $f3header;?> </h2>
                                <p><?php echo $f3text;?></p>
                        </div>
                        <div class="fes1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <i class="fa fa-road" aria-hidden="true"></i>
                            <h2> <?php echo $f4header;?></h2>
                            <p><p><?php echo $f4text;?></p></p>
                        </div>
                </div>
           
                    <div class="fe col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        
                            <div class="fes1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <i class="fa fa-flask" aria-hidden="true"></i>
                                    <h2> <?php echo $f5header;?></h2>
                                    <p><p><?php echo $f5text;?></p></p>
                            </div>
                            <div class="fes1 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <i class="fa fa-wheelchair-alt" aria-hidden="true"></i>
                                <h2> <?php echo $f6header;?></h2>
                                <p><?php echo $f6text;?></p>
                            </div>
                    </div>
                  
                    </div>
            </div>
        </section>


        <section class="price <?php echo $headertag;;?>">
            <div class="text-center">
            <span class="hrleft" ></span>
            <h1 class="cur curdif1 text-center" ><?php echo $sessionname;?></h1>
            <span class="hrright"></span></div>
            <div class="container">
                <div class="price1 col-lg-4 col-md-4 col-sm-4 col-xs-4 center">
                    <h2 class="headerprice text-center"><?php echo $session1price;?><span >JD</span></h2>
                    <ul >
                        <li class="text-center"><?php echo $session1det1;?></li>
                        <li class="text-center"><?php echo $session2det1;?></li>
                        <li class="text-center"><?php echo $session3det1;?></li>
                        <li class="text-center"><?php echo $session4det1;?></li>
                        <li class="text-center"><?php echo $session5det1;?></li>
                    </ul>
                <a href="app.html" class=" text-center"><button class="btn hvr-grow">احجز موعد الأن
                </a></button>
                </div>
                <div class="price1  pricedif col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h2 class="headerprice text-center borderdif1"><?php echo $session2price;?><span class="difspan">JD</span></h2>
                    <ul>
                    <li class="text-center"><?php echo $session1det2;?></li>
                        <li class="text-center"><?php echo $session2det2;?></li>
                        <li class="text-center"><?php echo $session3det2;?></li>
                        <li class="text-center"><?php echo $session4det2;?></li>
                        <li class="text-center"><?php echo $session5det2;?></li>
                    </ul>
                <button class="btn dif3"><a href="app.html" class=" text-center hvr-grow"> احجز موعد الأن
                </a></button>
                </div>
                <div class="price1 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h2 class="headerprice text-center"><?php echo $session3price;?><span>JD</span></h2>
                    <ul>
                    <li class="text-center"><?php echo $session1det3;?></li>
                        <li class="text-center"><?php echo $session2det3;?></li>
                        <li class="text-center"><?php echo $session3det3;?></li>
                        <li class="text-center"><?php echo $session4det3;?></li>
                        <li class="text-center"><?php echo $session5det3;?></li>
                    </ul>
                    <button class="btn"><a href="app.html" class="text-center hvr-grow">احجز موعد الأن
                </a></button>
            </div>
            </div>
            
        </section>
        <div class="overlay1 <?php echo $headertag;;?>">
        <section class="team <?php echo $headertag;?>">
        
        
            <div class="text-center">
            <span class="hrleft"></span>
            <h1 class="doctor cur doctor"><?php echo $doctorheader;?> </h1>
            <span class="hrright"></span>
            </div>
            <p class="text-center doctor meetparg"><?php echo $doctorheadertext;?></p>
            
            <div class="container">
                <div class="team1 col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
                    <div class="img">
                        <img src="img/<?php echo $doctor1img;?>" alt="">
                    </div>
                    <div class="name">
                        <h2 class="namedoctor"><?php echo $doctor1name;?></h2>
                    </div>
                    <div class="iconsdoctor">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        <i class="fa fa-google" aria-hidden="true"></i>

                    </div>
                    <div class="pargraph text-center">
                    <p>
                    <?php echo $doctor1text;?>
                    </p>
                    </div>
                </div>
                
                    <div class="team1 col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
                        <div class="img">
                            <img src="img/<?php echo $doctor2img;?>" alt="">
                        </div>
                        <div class="name">
                            <h2 class="namedoctor"><?php echo $doctor2name;?></h2>
                        </div>
                        <div class="iconsdoctor">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            <i class="fa fa-google" aria-hidden="true"></i>
    
                        </div>
                        <div class="pargraph">
                        <p>
                        <?php echo $doctor2text;?>
                        </p>

                        </div>
                     </div>
                   
                        <div class="team1 col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
                            <div class="img">
                                <img src="img/<?php echo $doctor3img;?>" alt="">
                            </div>
                            <div class="name">
                                <h2 class="namedoctor"><?php echo $doctor3name;?></h2>
                            </div>
                            <div class="iconsdoctor">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                <i class="fa fa-google" aria-hidden="true"></i>
        
                            </div>
                            <div class="pargraph">
                            <p><?php echo $doctor3text;?></p>

                            </div>
                        </div>
                       
                            <div class="team1 col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
                                <div class="img">
                                    <img src="img/<?php echo $doctor4img;?>" alt="">
                                </div>
                                <div class="name">
                                    <h2 class="namedoctor"><?php echo $doctor4name;?></h2>
                                </div>
                                <div class="iconsdoctor">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                    <i class="fa fa-google" aria-hidden="true"></i>
            
                                </div>
                                <div class="pargraph">
                                    <p><?php echo $doctor1text;?></p>
                                </div>
                            </div>
                    </div>
        </section>
        </div>
        <div class="clear"></div>
      
        <section class="feedback <?php echo $headertag;;?>">
         
             
             <div class="controlpanel2">
                <h2 class="dif5 click1 " onclick=feedback(1)></h2>
                <h2 class="click2" onclick=feedback(2)></h2>
                <h2 class="click3"onclick=feedback(3) ></h2>
                <h2 class="click4" onclick=feedback(4)></h2>
                <h2 class="click5" onclick=feedback(5)></h2>
             </div>
             <div class="qoute">
             <i class="fa fa-quote-right" aria-hidden="true"></i>

             </div>
            <div class="container">
                <p class="text-center pargfeed "><?php echo $feedbackheader;?> </p>
                <div class="text-center">
                <span class="hrleft" style="margin-bottom:.6vw"></span>
                <h1 class="cur text-center headerfeed" style="padding-bottom:1vw"><?php echo $feedtext;?> </h1>
                <span class="hrright" style="margin-bottom:.6vw"></span>
                </div>
                <div class="feedbackuser f1 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="img/<?php echo $fdphoto1;?>" alt="">
                    <div class="nameuser">
                    <?php echo $fdname1;?>
                    </div>
                    <div class="star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="parguser">
                        <p><?php echo $fdtext1;?></p>
                    </div>
                    </div>
                    <div class="feedbackuser f2 feed col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="img/<?php echo $fdphoto2;?>" alt="">
                        <div class="nameuser">
                        <?php echo $fdname2;?>
                        </div>
                        <div class="star">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="parguser">
                        <p><?php echo $fdtext2;?></p>
                        </div>
                        </div>
                        <div class="feedbackuser f3 feed col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="img/<?php echo $fdphoto3;?>" alt="">
                            <div class="nameuser"><?php echo $fdname3;?></div>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="parguser">
                            <p><?php echo $fdtext3;?></p>
                               
                            </div>
                            </div>
                            <div class="feedbackuser f4 feed col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="img/<?php echo $fdphoto4;?>" alt="">
                                <div class="nameuser"><?php echo $fdname4;?></div>
                                <div class="star">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="parguser">
                                <p><?php echo $fdtext4;?></p>
                                </div>
                                </div>
                                <div class="feedbackuser f5 feed col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <img src="img/<?php echo $fdphoto5?>" alt="">
                                    <div class="nameuser"><?php echo $fdname5;?></div>
                                    <div class="star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="parguser">
                                    <p><?php echo $fdtext5;?></p>
                                    </div>
                                </div>
                                </div>
                                
                                        
            </div>
            
        </section>

       
        <div class="sign <?php echo $showsign;?>" >
             
            <div class="container6">
                
                <div class="signleft col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <i class="fa fa-times <?php echo $close;;?> hvr-shrink" aria-hidden="true"></i>
                    <h1>Hello, Dear!</h1>
                    <?php echo $completesign;?>
                    <div class="line" style="width: 10% !important; margin:1 auto;border:1px solid #745b19 !important;margin-bottom: 1vw; "></div>
                    
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
                  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" >
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
    $image='';
    $nameandimage='';
    $selectuser="SELECT * FROM users where FullName='$session'";
     $queryrunuser=mysqli_query($conn,$selectuser);
     $fetchuser=mysqli_fetch_array($queryrunuser);
     $id=$fetchuser['id'];
     $image=$fetchuser['image'];
     if(!(empty($image))){
        $_SESSION['nameimg']="<div class='nameimg'><img width:'2vw' height:'2vw' src='users/".$image."'><span>".$session."</span>
        </div>";
     }
     echo $_SESSION['nameimg'];
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
    <footer class="<?php echo $headertag;;?>">
        <div class="container headerstags">
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
    <script src="jquery.js " type="text/javascript"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://use.fontawesome.com/17edc14b3c.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/process.js"></script>
    <script src="jquery2.js"></script>
    
    <script>
       

    </script>
 <?php include 'assignvalues.php';?>
</body>
</html>