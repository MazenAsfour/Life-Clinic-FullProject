<?php
session_start();
include 'process1.php';
include 'C:\xampp\htdocs\project\assignvalues.php'; 
include 'C:\xampp\htdocs\project\admin\assignvalues.php';

$admin='';

if(isset($_SESSION['adminweb'])){
  $admin=$_SESSION['adminweb'];
}
else{
 die('</body></html>You are not authorized to access this page');
}       
$errname='';
$erremail='';
$errpassword='';
$nameholder=$emailholder=$passholder='';
$error1=$error2=$error3=$error4='false';
$colorfontname="rgb(77, 72, 4)";
$colorbordername="";
$colorfontemail="rgb(77, 72, 4)";
$colorborderemail="";
$colorfontpassword="rgb(77, 72, 4)";
$colorborderpassword="";
$sucess=''; 

if(isset($_GET['addadmin'])){
    
     $nameholder=$fullname=filter_var($_GET['name'],FILTER_SANITIZE_STRING);
    $emailholder=$email=$_GET['email'];
    $passholder=$password=$_GET['password'];
    
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
    if(empty($password)){
        $errpassword="you must write password it's empty";
        $error3='true';
        $colorfontre='#db1414';
        $colorborderre='1px solid #f10808';
    }
    if($error1=='false' && $error2=='false' && $error3=='false'){
        //echo 'valid';
        
        $newemail=sha1($email);
        $newpassword=sha1($password);
        $queryadd="INSERT INTO admins(FullName,Email,Password)
        values('$fullname','$newemail','$newpassword')";
        mysqli_query($conn,$queryadd);
        $success="<div class='green'>A new admin has been added
        </div>";
        header("REFRESH:5;url=adminsite.php");
    }
}
?>

<!doctype html>
<html lang="en" >

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Add Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="design.css">
  <link rel="stylesheet" href="style.css">
  <style>
   .btn {
    background: linear-gradient(#3a2602,#745b19);
    margin-top: 1vw;
    width: 10vw; 
    margin: 1.2vw 32vw; 
   
}
  label{
    color:#745b19;
    padding-left:.2vw;
    font-size:1.4vw;
    margin-top:.1vw
  }
  input[type="text"]{
    padding-left:1vw !important;

  }
.err{
    color:red;;
    padding: 0;
    margin:0;
    margin-bottom:1vw;
    padding-top:.2vw;
    font-size:1vw
}
.mazen li a{
  font-size: 1.01vw !important;
  letter-spacing:1px
  
}
html{
  overflow:hidden;
}
.middle{
    width:50%;
    margin:11vw 22vw;
    
    border:1px solid #745b19;
    border-radius:5px
}
.middle form{
    padding: 1vw;
    
}
.green{
    color:green;
    text-align:center;
}
.add{
    background: linear-gradient(#3a2602,#745b19);
    padding:1vw 0;
    color:wheat;
    margin-bottom:1vw
}
  </style>
</head>

<body class="">
  <div class="">
  <div class="sidebar" style="float: right; position: relative;"  >
<div class="logo">
  <a href="http://localhost/project/" class="simple-text logo-mini">
    <img class="text-center "src="img/<?php echo $logo;?>" alt="">
  </a>
  <a href="http://localhost/project/" class="simple-text logo-normal " >
   
   
  </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
  
  <li class="mazen2">
        <a class="">
        <i class="nc-icon nc-diamond"></i>
        <p  class=" mazen1 " id="maz">معلومات الموقع <bold class="a"><</bold></p></a>
        <ul class="mazen" style="display:none">
          <li><a href="adminsite.php" class="list h">أسم العيادة واللوغو</a></li>
          <li><a href="app.php" class="list h">المواعيد</a></li>
          <li><a href="users.php" class="list h"> المستحدمين</a></li>
          <li><a href="msg.php" class="list h"> المسجات</a></li>
          <li><a href="subfromuser.php" class="list h">الأشتراكات</a></li>
          <li><a href="healthuser.php" class="list h">التقييم الصحي للمستخدمين</a></li><li><a href="signadmin.php" class="list h">وصف الخروج والدخول</a></li>
          
        </ul>
    </li>
    <li>
      <a href="javascript:;">
        <i class="nc-icon nc-diamond"></i>
        <p class="cl h">الصفحة الرئيسية <bold class="a"><</bold></p></a>
        <ul class="first " id="one">
          <li><a class="list h  detail1">السلايدر الترحيبي <bold class="ab"><</bold></a>
          <ul class="sliderdetail text-center" style="display:none">
          <li class=""><a href="sliderone.php">تعديل سلايدر الأول</a></li>
          <li class=""><a href="slidertwo.php">تعديل سلايدر الثاني</a></li>
          <li class="" ><a href="sliderthree.php" >تعديل سلايدر الثالث</a></li>
          </ul>
          </li>
          
          
          </li>
          <li><a  class="list h  seredit">خدمات العيادة<bold class="ab"><</bold></a>
          <ul class="services" style="display: none;">
            <li><a href="descriptionser.php">تعديل الوصف</a></li>
            <li><a href="ser1.php">تعديل الخدمة الأولى</a></li>
            <li><a href="ser2.php">تعديل الخدمة الثانية</a></li>
            <li><a href="ser3.php">تعديل الخدمة الثالثة</a></li>
            <li><a href="ser4.php">تعديل الخدمة الرابعة</a></li>
          </ul>
          </li>
          <li><a  class="list h  work1">دليل الوظائف والعمل<bold class="ab"><</bold></a>
          <ul class="work" style="display: none;">
            <li><a href="workdescription.php">تعديل الوصف</a></li>
            <li><a href="work1.php">تعديل الخطوة الاولى</a></li>
            <li><a href="work2.php">تعديل الخطوة الثانية</a></li>
            <li><a href="work3.php">تعديل الخطوة الثالثة</a></li>
            <li><a href="work4.php">تعديل الخطوة الرابعة</a></li>

          </ul>
          </li>
          <li><a  class="list h  fut1">ميزات العيادة  <bold class="ab"><</bold></a>
          <ul class="fut" style="display: none;">
            <li><a href="feuturedesc.php">تعديل الوصف</a></li>
            <li><a href="f1.php">تعديل الميزة الأولى</a></li>
            <li><a href="f2.php">تعديل الميزة الثانية</a></li>
            <li><a href="f3.php">تعديل الميزة الثالثة</a></li>
            <li><a href="f4.php">تعديل الميزة الرابعة</a></li>
            <li><a href="f5.php">تعديل الميزة الخامسة</a></li>
            <li><a href="f6.php">تعديل الميزة السادسة </a></li>
          </ul>
          </li>  
          <li><a  class="list h prices1">اسعار الجلسات  <bold class="ab"><</bold></a>
          <ul class="prices" style="display: none;">
            <li><a href="session1.php">تعديل الجلسة الأولى</a></li>
            <li><a href="session2.php">تعديل الجلسة الثانية</a></li>
            <li><a href="session3.php">تعديل الجلسة الثالثة</a></li>
          </ul>
          </li>  
          <li><a  class="list h doctor1">دليل الدكاترة <bold class="ab"><</bold></a>
          <ul class="doctor" style="display: none;">
          <li><a href="doctordesc.php">تعديل الوصف</a></li>
          <li><a href="doctor1.php">تعديل الدكتور الأول</a></li>
          <li><a href="doctor2.php">تعديل الدكتور الثاني</a></li>
          <li><a href="doctor3.php">تعديل الدكتور الثالث</a></li>
          <li><a href="doctor4.php">تعديل الدكتور الرابع</a></li>
          </ul>
          </li>  
          <li><a  class="list h feedback1">التغذية الراجعة  <bold class="ab"><</bold></a>
          <ul class="feedback" style="display: none;">
            <li><a href="feedbackdesc.php">تعديل الوصف</a></li>
            <li><a href="feed1.php">تعديل التغذية الاولى</a></li>
            <li><a href="feed2.php">تعديل التغذية الثانية</a></li>
            <li><a href="feed3.php">تعديل التغذية الثالثة</a></li>
            <li><a href="feed4.php">تعديل التغذية الرابعة</a></li>
            <li><a href="feed5.php">تعديل التغذية الخامسة</a></li>
          </ul>
          </li>  
          <li><a href="sub.php" class="list h  sub">اشترك معنا  </a></li>  
          <li><a href="guidelines.php" class="list h guide" >ارشادات العيادة</a>
        </ul>
      
    </li>
    <li>
      <a >
        <i class="nc-icon nc-diamond"></i>
        <p  class="cl2">الخدمات <bold class="a"><</bold></p></a>
        <ul class="list2" > 
          <li><a href="ser21.php" class="list" class="h">تعديل الخدمة الأولى</a></li>
          <li><a href="ser22.php" class="list" class="h">تعديل الخدمة الثانية</a></li>
          <li><a href="ser23.php" class="list" class="h">تعديل الخدمة الثالثة</a></li>
          <li><a href="ser24.php" class="list" class="h">تعديل الخدمة الرابعة </a></li>

        </li>

      </ul>
    </li>
    <li>
    <a href="javascript:;">
        <i class="nc-icon nc-diamond"></i>
        <p onclick="show3()" class="cl3 h" >الأعضاء<bold class="a"><</bold></p></a>
        <ul class="list3">
          
          <li><a href="doctor1.php" class="list h">تعديل العضو الأول</a></li>
          <li><a href="doctor2.php" class="list h">تعديل العضو الثاني</a></li>
          <li><a href="doctor3.php" class="list h">تعديل العضو الثالث</a></li>
          <li><a href="doctor4.php" class="list h">تعديل العضو الرابع</a></li>
          
        </ul>
    </li>
    <li>
        <a href="javascript:;">
        <i class="nc-icon nc-diamond"></i>
        <p onclick="show4()" class="cl4 h">معلومات عنا <bold class="a"><</bold></p></a>
        <ul class="list4">
          <li><a href="about.php" class="list h">وصف العيادة والصورة </a></li>
          <li><a href="person.php" class="list h">التقييم النفسي</a></li>
          <li><a href="thera.php" class="list h">جلسات الثيرابيست</a></li>
          <li><a href="sport.php" class="list h">التمارين الرياضية</a></li>
        </ul>
    </li>
    <li>
      <a href="javascript:;">
        <i class="nc-icon nc-diamond "></i></a>
        <p><a class="f h ques1" style="cursor: pointer;">اختبر نفسك</a><bold class="a" style="left:14px"><</bold></p>
         <ul class="ques" style="display: none;">
        <li><a href="qexam.php" >تعديل وصف الدخول الى الاختبار  </a></li>
          <li><a href="q12.php">تعديل السؤال الأول والتاني</a></li>
          <li><a href="q34.php">تعديل السؤال الثالث والرابع</a></li>
          <li><a href="q56.php">تعديل السؤال الخامس والسادس</a></li>
          <li><a href="q78.php">تعديل السؤال السابع والثامن</a></li>
          <li><a href="q910.php">تعديل السؤال التاسع والعاشر</a></li>
        </ul>
      </li>
      <li>
        <a href="">
        <i class="nc-icon nc-diamond"></i></a>
        <p ><a class="f h know1" style="cursor: pointer;">ثقف نفسك<bold class="a" style="left:14px;top:-4px"><</bold></a>
        </p>
        <ul class="know" style="display: none;">
        <li><a href="know1.php">الصورة والوصف والافادة</a></li>
        <li><a href="know2.php">أنواع الاكتئاب</a></li>
        <li><a href="know3.php">ألاسباب وعوامل الخطورة</a></li>
        <li><a href="know4.php">أعراض المرض</a></li>
        <li><a href="know6.php">ارشادات التعامل مع الاكتئاب</a></li>
        <li><a href="know5.php">متى يجب مراجعة الطبيب</a></li>
        
        </ul>
      </li>
      
       <li>
        <a href="javascript:;">
        <i class="nc-icon nc-diamond"></i>
        <p  class="advice h"> تصنيفات الاختبار والنصائح<bold class="a"><</bold></p></a>
        <ul class="advice1" style="display:none">
          <li><a href="advice1.php" class="list h">لا يوجد اكتئاب</a></li>
          <li><a href="advice2.php" class="list h">الاكتئاب البسيط</a></li>
          <li><a href="advice3.php" class="list h">الاكتئاب المتوسط</a></li>
          <li><a href="advice4.php" class="list h">الاكتئاب الشديد</a></li>
    <li><a href="advice5.php" class="list h">الاكتئاب الشديد جدا</a></li>    </ul>
    </li>
        
        <li>
        <a href="about.php">
        <i class="nc-icon nc-diamond"></i></a>
        <p><a href="connect.php" class="f h">اتصل بنا</a></p>
        </li>

      
      <li>
        <a href="">
        <i class="nc-icon nc-diamond"></i></a>
        <p ><a href="footer.php" class="f h">روابط السوشال ميديا</a>
        </p>
        
      </li>

      
  </ul>
</div>
</div>

    <div class="main-panel" style="height: 100vh;text-align: right;width:82% !important;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand header1"style='color:#745b19' > اضافة أدمن جديد  </a><span class="con">              <i class="nc-icon nc-bank"></i>
            </span>
            <h2 class="con1">adminsite of clinic</h2>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      <?php // style="text-align:right"?>
        <div class="middle text-left">
        <h1 style="font-size:2vw" class="text-center add">Add new Admin</h1>
        <?php echo $success;?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="">FullName</label>
          <input type="text" value="<?php echo $nameholder;?>" name="name"style="border:<?php echo $colorbordername;?>"  id=""placeholder="Full-name" class='form-control'>
            <div class="text-center err"><?php echo $errname;?></div>
          <label for="">email </label>
          <input type="email"value="<?php echo $emailholder;?>" name="email" style="border:<?php echo $colorborderemail;?>" id="" placeholder="Email" class='form-control'>
          <div class="text-center err"><?php echo $erremail;?></div>
          <label for="">password</label>
          <input type="password"value="<?php echo $passholder;?>" name="password"style="border:<?php echo $colorborderpassword;?>" id=""placeholder="password"  class='form-control'>
          <div class="text-center err"><?php echo $errpassword;?></div>
          <input type="submit" value="Add Admin" style="float:unset;margin:1.2vw 13vw .5vw" name='addadmin' class='btn btn-success text-center'>
          </form>   
        </div>
      </div>

      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a >life clinic</a></li>
                <li><a href="editadmin.php"><?php echo $admin;?></a></li>
                <li> <a href="addadmin.php" class='addadmin' style="color:#8d5e0a; border:1px solid #8d5e0a">add new admin</a></li>
                <li> <a href="<?php echo $_SERVER['PHP_SELF']?>?logout" class='addadmin'>logout</a></li>

              </ul>
            </nav>
            
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="process.js"></script>
  <script src="jquery.nicescroll.js"></script>
  <script src="jquery.nicescroll.min.js"></script>
  <script>
    $(document).ready(function(){
        $('.html').niceScroll({});
        $('.sidebar ').niceScroll();
        $('.sidebar .sidebar-wrapper, .off-canvas-sidebar .sidebar-wrapper ').niceScroll();    })

</script>
<script src="process2.js"></script>
</body>

</html>
