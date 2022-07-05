<?php
$conn=mysqli_connect('localhost','root','','lifeclinic');
include 'C:\xampp\htdocs\project\assignvalues.php'; 


if(isset($_GET['infowebsite'])){
    $logo=$_GET['logo'];
    $lifeclinic=$_GET['name'];
    $process="UPDATE details SET nameclinic='$lifeclinic',
    logo='$logo'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error(!$conn);
    }    
    header('REFRESH:0;url=adminsite.php');
}
if(isset($_GET['signadmintext'])){
    $sign=$_GET['sign'];
    $signtext=$_GET['signtext'];
    $log=$_GET['log'];
    $logtext=$_GET['logtext'];
    $edit=$_GET['edit'];
    $edittext=$_GET['edittext'];
    $process="UPDATE sliderone SET text='$log',
    image='$logtext' where id='6'";
    $process1="UPDATE sliderone SET text='$sign',
    image='$signtext' where id='7'";
    $process2="UPDATE sliderone SET text='$edit',
    image='$edittext' where id='8'";
    $n=mysqli_query($conn,$process);
    $n1=mysqli_query($conn,$process1);
    $n2=mysqli_query($conn,$process2);

    if(!$n){
        echo mysqli_error(!$conn);
    }    
    header('REFRESH:0;url=signadmin.php');
}
if(isset($_GET['sliderone'])){
    $a=$_GET['img'];
    $b=$_GET['text'];
    if(empty($_GET['img'])){
        $a=$slideroneimg1;
    }
    $process="UPDATE sliderone SET text='$b',
    image='$a' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=sliderone.php');
}
if(isset($_GET['sub'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    
    $process="UPDATE sliderone SET text='$a',
    image='$b' WHERE id='5'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=sub.php');
}
if(isset($_GET['guide'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    
    $process="UPDATE sliderone SET text='$a',
    image='$b' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=guidelines.php');
}
if(isset($_GET['slidertwo'])){
    $a=$_GET['img'];
    $b=$_GET['text'];
    if(empty($_GET['img'])){
        $a=$slideroneimg2;
    }
    $process="UPDATE sliderone SET text='$b',
    image='$a' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=slidertwo.php');
}
if(isset($_GET['sliderthree'])){
    $a=$_GET['img'];
    $b=$_GET['text'];
    if(empty($_GET['img'])){
        $a=$slideroneimg3;
    }
    $process="UPDATE sliderone SET text='$b',
    image='$a' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=sliderthree.php');
}

if(isset($_GET['descriptionser'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=descriptionser.php');
}
if(isset($_GET['ser1'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser1.php');
}
if(isset($_GET['ser2'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser2.php');
}
if(isset($_GET['ser3'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser3.php');
}
if(isset($_GET['ser4'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='5'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser4.php');
}
if(isset($_GET['editworkdes'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE work SET header='$a',
    text='$b' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=workdescription.php');
}
if(isset($_GET['work1'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$work1img;
    }
    $process="UPDATE work SET header='$a',
    text='$b', image='$img' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=work1.php');
}
if(isset($_GET['work2'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$work2img;
    }
    $process="UPDATE work SET header='$a',
    text='$b', image='$img' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=work2.php');
}
if(isset($_GET['work3'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$work3img;
    }
    $process="UPDATE work SET header='$a',
    text='$b', image='$img' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=work3.php');
}
if(isset($_GET['work4'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$work4img;
    }
    $process="UPDATE work SET header='$a',
    text='$b', image='$img' WHERE id='5'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=work4.php');
}
if(isset($_GET['f1'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=f1.php');
}
if(isset($_GET['f2'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=f2.php');
}
if(isset($_GET['f3'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=f3.php');
}
if(isset($_GET['f4'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='5'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=f4.php');
}
if(isset($_GET['f5'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='6'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=f5.php');
}
if(isset($_GET['f6'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='7'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=f6.php');
}
if(isset($_GET['editfeature'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$featureimage;
    }
    $process="UPDATE features SET header='$a',
    text='$b' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    $process1="UPDATE features SET header='$img'
     WHERE id='8'";
    $n1=mysqli_query($conn,$process1);
    if(!$n1){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=feuturedesc.php');
}

if(isset($_GET['session1'])){
    $name=$_GET['name'];
    $price=$_GET['price'];
    $time=$_GET['time'];
    $a1=$_GET['text1'];
    $a2=$_GET['text2'];
    $a3=$_GET['text3'];
    $a4=$_GET['text4'];
    $process="UPDATE prices SET
    price='$price',
    time='$time',des1='$a1',des2='$a2',des3='$a3',des4='$a4'
    WHERE id='2'";
    $process1="UPDATE prices set price='$name' where id='1'";
    $n=mysqli_query($conn,$process1);
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=session1.php');
}
if(isset($_GET['session2'])){
    
    $price=$_GET['price'];
    $time=$_GET['time'];
    $a1=$_GET['text1'];
    $a2=$_GET['text2'];
    $a3=$_GET['text3'];
    $a4=$_GET['text4'];
    $process="UPDATE prices SET
    price='$price',
    time='$time',des1='$a1',des2='$a2',des3='$a3',des4='$a4'
    WHERE id='3'";
  
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=session2.php');
}
if(isset($_GET['session3'])){
  
    $price=$_GET['price'];
    $time=$_GET['time'];
    $a1=$_GET['text1'];
    $a2=$_GET['text2'];
    $a3=$_GET['text3'];
    $a4=$_GET['text4'];
    $process="UPDATE prices SET
    price='$price',
    time='$time',des1='$a1',des2='$a2',des3='$a3',des4='$a4'
    WHERE id='4'";
    
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=session3.php');
}
if(isset($_GET['editdoctor'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE doctors SET img='$a',
    name='$b' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=doctordesc.php');
}
if(isset($_GET['doctor1'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    $process="UPDATE doctors SET img='$a',
    name='$b' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=doctordesc.php');
};

if(isset($_GET['doctor11'])){
    $name=$_GET['name'];
    $age=$_GET['age'];
    $text=$_GET['text'];
    $textextra=$_GET['textextra'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$doctor1img;
    }
    $process="UPDATE doctors SET img='$img',
    name='$name',age='$age',text='$text',description='$textextra' WHERE id='2'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=doctor1.php');
}
if(isset($_GET['doctor2'])){
    $name=$_GET['name'];
    $age=$_GET['age'];
    $text=$_GET['text'];
    $textextra=$_GET['textextra'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$doctor2img;
    }
    $process="UPDATE doctors SET img='$img',
    name='$name',age='$age',text='$text',description='$textextra' WHERE id='3'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=doctor2.php');
}
if(isset($_GET['doctor3'])){
    $name=$_GET['name'];
    $age=$_GET['age'];
    $text=$_GET['text'];
    $textextra=$_GET['textextra'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$doctor3img;
    }
    $process="UPDATE doctors SET img='$img',
    name='$name',age='$age',text='$text',description='$textextra' WHERE id='4'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=doctor3.php');
}
if(isset($_GET['doctor4'])){
    $name=$_GET['name'];
    $age=$_GET['age'];
    $text=$_GET['text'];
    $textextra=$_GET['textextra'];
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$doctor4img;
    }
    $process="UPDATE doctors SET img='$img',
    name='$name',age='$age',text='$text',description='$textextra' WHERE id='5'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=doctor4.php');
}
if(isset($_GET['editfeed'])){
    $header=$_GET['header'];
    $text=$_GET['text'];
    
    $process="UPDATE feedback SET image='$header',
    name='$text' where id='1'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=feedbackdesc.php');
}
if(isset($_GET['feed1'])){
    $name=$_GET['name'];
    $comment=$_GET['comment'];
   
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$fdphoto1;
    }
    $process="UPDATE feedback SET image='$img',
    name='$name' ,text='$comment' WHERE id='2'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=feed1.php');
}
if(isset($_GET['feed2'])){
    $name=$_GET['name'];
    $comment=$_GET['comment'];
   
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$fdphoto2;
    }
    $process="UPDATE feedback SET image='$img',
    name='$name' ,text='$comment' WHERE id='3'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=feed2.php');

}
if(isset($_GET['feed3'])){
    $name=$_GET['name'];
    $comment=$_GET['comment'];
   
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$fdphoto3;
    }
    $process="UPDATE feedback SET image='$img',
    name='$name' ,text='$comment' WHERE id='4'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=feed3.php');
}
if(isset($_GET['feed4'])){
    $name=$_GET['name'];
    $comment=$_GET['comment'];
   
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$fdphoto4;
    }
    $process="UPDATE feedback SET image='$img',
    name='$name' ,text='$comment' WHERE id='5'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=feed4.php');
}
if(isset($_GET['feed5'])){
    $name=$_GET['name'];
    $comment=$_GET['comment'];
   
    $img=$_GET['img'];
    if(empty($_GET['img'])){
        $img=$fdphoto5;
    }
    $process="UPDATE feedback SET image='$img',
    name='$name' ,text='$comment' WHERE id='6'";
    $n=mysqli_query($conn,$process);
     
    header('REFRESH:0;url=feed5.php');
}
if(isset($_GET['ser21'])){
    $a=$_GET['text'];
    $b=$_GET['img'];
    if(empty($_GET['img'])){
        $b=$seradvimg1;
    }
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='6'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser21.php');
}
if(isset($_GET['ser22'])){
    $a=$_GET['text'];
    $b=$_GET['img'];
    if(empty($_GET['img'])){
        $b=$seradvimg2;
    }
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='7'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser22.php');
}
if(isset($_GET['ser23'])){
    $a=$_GET['text'];
    $b=$_GET['img'];
    if(empty($_GET['img'])){
        $b=$seradvimg3;
    }
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='8'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser23.php');
}
if(isset($_GET['ser24'])){
    $a=$_GET['text'];
    $b=$_GET['img'];
    if(empty($_GET['img'])){
        $b=$seradvimg4;
    }
    $process="UPDATE services SET header='$a',
    text='$b' WHERE id='9'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=ser24.php');
}
if(isset($_GET['about'])){
    $a=$_GET['text'];
    $b=$_GET['img'];
    if(empty($_GET['img'])){
        $b=$aboutimg1;
    }
    $process="UPDATE aboutus SET header='$a',
    img='$b' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=about.php');
}
if(isset($_GET['person'])){
    $text=$_GET['text'];
    $photo=$_GET['img'];
    $header=$_GET['header'];
    if(empty($_GET['img'])){
        $b=$aboutimg2;
    }
    $process="UPDATE aboutus SET header='$header',
    img='$photo',text='$text' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
  header('REFRESH:0;url=person.php');
}
if(isset($_GET['thera'])){
    $a=$_GET['header'];
    $b=$_GET['text'];
    
    $process="UPDATE aboutus SET header='$a',
    text='$b' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=thera.php');
}
if(isset($_GET['sport'])){
    $text=$_GET['text'];
    $photo=$_GET['img'];
    $header=$_GET['header'];
    if(empty($_GET['img'])){
        $b=$aboutimg4;
    }
    $process="UPDATE aboutus SET header='$header',
    img='$photo',text='$text' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=sport.php');
}
if(isset($_GET['social'])){
    $email=$_GET['email'];
    $face=$_GET['face'];
    $insta=$_GET['insta'];
    $tele=$_GET['tele'];
    $tw=$_GET['tw'];
    $process1="UPDATE details SET email='$email' WHERE id='1'";
    $process="UPDATE socialmedia SET facebook='$face',
    instagram='$insta',telegram='$tele',telegram='$tele' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    $n=mysqli_query($conn,$process1);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=footer.php');
}
if(isset($_GET['connect'])){
    $tm=$_GET['tm'];
    $tmar=$_GET['tmar'];
    $l=$_GET['l'];
    $lr=$_GET['lar'];
    $n=$_GET['n'];
    $nar=$_GET['nar'];
    $process="UPDATE details SET timeopen='$tm',timeopenar='$tmar',
    location='$l',locationar='$lr',number='$n',numberar='$nar' WHERE id='1'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=connect.php');
}
if(isset($_GET['q1'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='1'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q12.php');
}
if(isset($_GET['q2'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='2'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q12.php');
}
if(isset($_GET['q3'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='3'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q34.php');
}
if(isset($_GET['q4'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='4'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q34.php');
}
if(isset($_GET['q5'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='5'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q56.php');
}
if(isset($_GET['q6'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='6'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q56.php');
}
if(isset($_GET['q7'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='7'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q78.php');
}
if(isset($_GET['q8'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='8'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=q78.php');
}
if(isset($_GET['q9'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='9'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=qq910.php');
}
if(isset($_GET['q10'])){
    $q1=$_GET['q11'];
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE questions SET question='$q1',
    answer1='$a1',answer2='$a2',answer3='$a3',answer4='$a4' WHERE id='10'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=qq910.php');
}
if(isset($_GET['qexam'])){
    
    $a1=$_GET['a11'];
    $a2=$_GET['testname'];
    $a3=$_GET['bek'];
    $a4=$_GET['bektext'];
    
    $process="UPDATE questions SET question='$a1',
    answer1='$a3',answer2='$a4',answer3='$a2' WHERE id='11'";
    $n=mysqli_query($conn,$process);
   
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=qexam.php');
}
if(isset($_GET['know1'])){
    
    $a=$_GET['text'];
    $b=$_GET['img'];
    if(empty($_GET['img'])){
        $b=$knowimg;
    }
    $process="UPDATE types SET header='$b',
    text='$a' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=know1.php');
}
if(isset($_GET['know2'])){
    
    $header=$_GET['header'];
    $text=$_GET['text'];
    $h1=$_GET['h1'];
    $t1=$_GET['t1'];
    $h2=$_GET['h2'];
    $t2=$_GET['t2'];
    $h3=$_GET['h3'];
    $t3=$_GET['t3'];
    $h4=$_GET['h4'];
    $t4=$_GET['t4'];
    $h5=$_GET['h5'];
    $t5=$_GET['t5'];
    $count=2;
  
        $process="UPDATE types SET header='$header',
        text='$text' WHERE id='2'";
        $process1="UPDATE types set header='$h1',text='$t1' WHERE id='3'";
        $process2="UPDATE types set header='$h2',text='$t2' WHERE id='4'";
        $process3="UPDATE types set header='$h3',text='$t3' WHERE id='5'";
        $process4="UPDATE types set header='$h4',text='$t4' WHERE id='6'";
        $process5="UPDATE types set header='$h5',text='$t5' WHERE id='7'";
       $run=mysqli_query($conn,$process);
       $run1=mysqli_query($conn,$process1);
       $ru2=mysqli_query($conn,$process2);
       $ru3=mysqli_query($conn,$process3);
       $ru4=mysqli_query($conn,$process4);
       $ru5=mysqli_query($conn,$process5);


    header('REFRESH:0;url=know2.php');
}
if(isset($_GET['know3'])){
    
    $header=$_GET['header'];
    $r1=$_GET['r1'];
    $r2=$_GET['r2'];
    $r3=$_GET['r3'];
    $r4=$_GET['r4'];
    $process="UPDATE reasons SET reason='$header',
    reason1='$r1',reason2='$r2',reason3='$r3',reason4='$r4' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=know3.php');
}
if(isset($_GET['know4'])){
    
    $header=$_GET['header'];
    $r1=$_GET['r1'];
    $r2=$_GET['r2'];
    $r3=$_GET['r3'];
    $r4=$_GET['r4'];
    $r5=$_GET['r5'];
    $process="UPDATE reasons SET reason='$header',
    reason1='$r1',reason2='$r2',reason3='$r3',reason4='$r4',reason5='$r5' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=know4.php');
}
if(isset($_GET['know5'])){
    
    $header=$_GET['header'];
    $r1=$_GET['r1'];
    $r2=$_GET['r2'];
    $r3=$_GET['r3'];
    
    $process="UPDATE reasons SET reason='$header',
    reason1='$r1',reason2='$r2',reason3='$r3' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=know5.php');
}
if(isset($_GET['know6'])){
    
    $header=$_GET['header'];
    $r1=$_GET['r1'];
    $r2=$_GET['r2'];
    $r3=$_GET['r3'];
    
    $process="UPDATE reasons SET reason='$header',
    reason1='$r1',reason2='$r2',reason3='$r3' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=know6.php');
}

if(isset($_GET['advice1'])){
    
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE tips SET advice1='$a1',
    advice2='$a2',advice3='$a3',advice4='$a4' WHERE id='1'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=advice1.php');
}

if(isset($_GET['advice2'])){
    
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE tips SET advice1='$a1',
    advice2='$a2',advice3='$a3',advice4='$a4' WHERE id='2'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=advice2.php');
}

if(isset($_GET['advice3'])){
    
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE tips SET advice1='$a1',
    advice2='$a2',advice3='$a3',advice4='$a4' WHERE id='3'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=advice3.php');
}
if(isset($_GET['advice4'])){
    
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE tips SET advice1='$a1',
    advice2='$a2',advice3='$a3',advice4='$a4' WHERE id='4'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=advice4.php');
}
if(isset($_GET['advice5'])){
    
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    
    $process="UPDATE tips SET advice1='$a1',
    advice2='$a2',advice3='$a3',advice4='$a4' WHERE id='5'";
    $n=mysqli_query($conn,$process);
    if(!$n){
        echo mysqli_error($conn);
    }    
    header('REFRESH:0;url=advice5.php');
}
if(isset($_GET['logout'])){
   
    session_destroy();
    //echo 'hay';
    session_unset();
    header("REFRESH:0;url=http://localhost/project/");
};
?>

