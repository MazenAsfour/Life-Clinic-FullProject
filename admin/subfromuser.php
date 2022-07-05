<?php

include 'process1.php';
session_start(); $admin='';

if(isset($_SESSION['adminweb'])){
  $admin=$_SESSION['adminweb'];
}
else{
 die('</body></html>You are not authorized to access this page');
}
include 'C:\xampp\htdocs\project\assignvalues.php'; 
include 'C:\xampp\htdocs\project\admin\assignvalues.php';


if(isset($_GET['deletecontact'])){
  $id=$_GET['id'];
  $query="DELETE from subsucribtion where id='$id'";
  mysqli_query($conn,$query);
  header("REFRESH:0;url=subfromuser.php");
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
   Subscriptions From Users
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
  <link rel="stylesheet" href="design2.css">
  <link rel="stylesheet" href="style.css">
  <style>
 
  label{
    color:#745b19;
    padding-right:.2.5vw;
    font-size:1.4vw;
  }
  input[type="text"]{
    padding-left:1vw !important;

  }

.mazen li a{
  font-size: 1.01vw !important;
  letter-spacing:1px
  
}

.btn {
    float: none; 
    margin-right: 0vw; 
    padding:.7vw .3vw;
    margin-bottom:.8vw;
  
}
html{
  overflow:hidden;
}
.edittable{
width:70%;
float:left;   
}
th{
    padding:0;
    width: 10vw;
    padding: 0;
    box-sizing:unset;

}
td{
  padding:0 0.1vw;
  box-sizing:unset;
  border:.1px solid #d7b67b;
  
}
tr{
  box-sizing:unset
}
.main-panel > .content {
    padding: 0;
    min-height: calc(100vh - px);
    margin-top: 110px;
    box-sizing:unset
}
.headertable{
  background:linear-gradient(#523603,#886a16 ) ;
  color:#f1e8d8
 
}
.submitcontact{
  background:linear-gradient(#523603,#886a16 ) ;
}
.submitcontact:hover{
  background-color:#886a16
}
.headertable th{
  padding:1vw 0 
}
table{
  background-color:beige !important;
  width:41vw
}
th{
  border:1px solid #895b09;
   
}
.contacttable{
  background-color:blue;
}
.active1,.unactive1{
  border:1px solid beige;
  padding:.01vw .7vw;
  margin-right:.2vw;
  border-radius: 100%;
  
}

.active1 {
    color: green;
    background-color: #039b03;   
}
.unactive1{
  background-color:#d93807
}
.msgwidth{
  width:125vw !important
}
.col-lg-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    width: 53%;
    display: table-cell;
}
  </style>
</head>

<body class="">
  <div class="">
  <div class="sidebar" style="float: right; position: relative;"  >
<div class="logo">
  <a href="http://localhost/project/" class="simple-text logo-mini">
    <img src="img/<?php echo $logo;?>" alt="">
  </a>
  <a href="http://localhost/project/" class="simple-text logo-normal " >
   
   
  </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
  
  <li class="mazen2">
        <a class="">
        <i class="nc-icon nc-diamond"></i>
        <p  class=" mazen1 active" id="maz">معلومات الموقع <bold class="a active"><</bold></p></a>
        <ul class="mazen" style="display:none">
          <li><a href="adminsite.php" class="list h ">أسم العيادة واللوغو</a></li>
          <li><a href="app.php" class="list h">المواعيد</a></li>
          <li><a href="users.php" class="list h"> المستحدمين</a></li>
          <li><a href="msg.php" class="list h "> المسجات</a></li>
          <li><a href="subfromuser.php" class="list h active">الأشتراكات</a></li>
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

    <div class="main-panel" style="height: 400vh;text-align: right;width:82% !important;">
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
            <a class="navbar-brand header1"style='color:#745b19' > معلومات الموقع </a><span class="con">              <i class="nc-icon nc-bank"></i>
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
                  <i class="nc-icon nc-zoom-split"onclick="searchdate()"></i>
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      <div class="container" style="">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <table>
        <tr class="headertable">
          
          <th>Email</th>
          <th style="box-sizing:unset; width:14vw;padding:0">Date Of Subscrition</th>
          <th colspan='2' style="width:10%;padding-right:.5vw">Action</th>
        </tr>
      <?php 
        
        $tableuser="SELECT * from subsucribtion";
        $tableuserrun=mysqli_query($conn,$tableuser) ;
        /*
        if($fetchtable1['Status'] == "active"){
          $active='active<span class="active"></span>';
        }
        else{
            $active='unactive<span class="unactive"></span>';
        }*/
       
        $email='';
        while($fetchtable=mysqli_fetch_array($tableuserrun)){
          $email=$fetchtable['email'];
            echo "<tr><td class=email style='width:23vw !important'>".$fetchtable['email']."
            </td><td class=date>".$fetchtable['date']."</td><td style='display:flex;margin-right:1.2vw; 
            border-bottom:none;border-left:none; margin-right:-.03vw' >
            <form action='subfromuser.php'>
            <input type='submit' class='btn btn-info contactable'
             name='contact'value=contact '>
             <input type='hidden' value=".$fetchtable['id']." name='id'>

             </form>
             <form action='subfromuser.php'><input type='submit' class='btn btn-danger deletetablebtn'
             name='deletecontact'value='delete' id='".$fetchtable['id']."'>
             <input type='hidden' value=".$fetchtable['id']." name='id'>
             </form></td></tr>
            ";
        }
        if(isset($_GET['contact'])){
          $id=$_GET['id'];
          
          $select="SELECT * from subsucribtion where id='$id'";
          $queryemailsub=mysqli_query($conn,$select);
          $emailsub=mysqli_fetch_array($queryemailsub);
          $emailnow=$emailsub['email'];
          //echo $emailnow;
        }
        
       
      
      ?>
      </table>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" style="position:fixed;margin-left:-1vw">
        <label for="" style="float:left; padding-left:.1vw">Email</label>
        <input type="email" name="emailsub" value="<?php echo $emailnow;?>" class="form-control" placeholder="Email" id="">
        <label for="" style="float:left; padding-left:.1vw">Massege</label>
        <textarea name="msg" id="" cols="30" placeholder="Your Massege"
        class="form-control " style="padding-left:.5vw" rows="40"></textarea>
        <input type="submit" name="sendmsg"value="Send Massege to <?php echo $emailnow;?>" class="submitcontact hvr-shrink btn btn-success">
        <input type="submit" name="sendmsg"value="Send Massege to all users" class="submitcontact hvr-shrink btn btn-success">

      </form>
      </div>
      </div>
   
    </div>

      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a >life clinic</a></li>
                <li><a href="editadmin.php"><?php echo $admin;?></a></li>                      <li> <a href="addadmin.php" class='addadmin'>add new admin</a></li>
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
        $('html').niceScroll({});
$('.sidebar ').niceScroll();
        $('.sidebar .sidebar-wrapper, .off-canvas-sidebar .sidebar-wrapper ').niceScroll();    })

</script>
<script src="process2.js"></script>
</body>
<script>
const search=document.querySelector('.navbar .form-group.no-border .form-control, .navbar .input-group.no-border .form-control');
 const email1=document.querySelectorAll(' .email');
 const date1=document.querySelectorAll(' .date');
 function searchdate(){
 for(i=0;i<date1.length;i++){
    date1[i].style.background='none';
    var a=search.value;
    var b=date1[i].textContent;
    //console.log(a,a.includes("22/04/23"));
    if(a.replace(/\s+/g, '') == b.replace(/\s+/g, '') ){
    //alert('valid');
    date1[i].style.backgroundColor='rgb(229 206 44)';
    date1[i].scrollIntoView()
    //window.scroll(0,findPos(date1[i]));
    body.style.scrollBehavior='smooth';
  }}
  for(i=0;i<date1.length;i++){
  date1[i].style.background='none';
  var a=search.value;
  var b=date1[i].textContent;
  //console.log(a,a.includes("22/04/23"));
  if(b.includes(a) ){
  //alert('valid');
  date1[i].style.backgroundColor='rgb(229 206 44)';
  date1[i].scrollIntoView()
//window.scroll(0,findPos(date1[i]));
body.style.scrollBehavior='smooth';
}}
for(i=0;i<email1.length;i++){
    email1[i].style.background='none';
    var a=search.value;
    var b=email1[i].textContent;
    if(a.replace(/\s+/g, '') == b.replace(/\s+/g, '') ){
      //alert('valid');
      email1[i].style.backgroundColor='rgb(229 206 44)';
      email1[i].scrollIntoView();
      //window.scroll(0,findPos(date1[i]));
      body.style.scrollBehavior='smooth';
    }}
  }
</script>
</html>
