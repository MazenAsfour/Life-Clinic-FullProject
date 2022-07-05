<?php 
$conn=mysqli_connect('localhost','root','','lifeclinic');
mysqli_query($conn,'SET CHARACTER SET utf8');

$query="SELECT * FROM sliderone where id=1";
$ex1=mysqli_query($conn,$query);
$fetch1=mysqli_fetch_array($ex1);
$query1="SELECT * FROM sliderone where id=2";
$ex2=mysqli_query($conn,$query1);
$fetch2=mysqli_fetch_array($ex2);
$query2="SELECT * FROM sliderone where id=3";
$ex3=mysqli_query($conn,$query2);
$fetch3=mysqli_fetch_array($ex3);
$query3="SELECT * FROM sliderone where id=4";
$ex4=mysqli_query($conn,$query3);
$fetch4=mysqli_fetch_array($ex4);
$query9="SELECT * FROM sliderone where id=5";
$ex10=mysqli_query($conn,$query9);
$fetch5=mysqli_fetch_array($ex10);
$querylog="SELECT * FROM sliderone where id=6";
$exlog=mysqli_query($conn,$querylog);
$fetchlog=mysqli_fetch_array($exlog);
$querysign="SELECT * FROM sliderone where id=7";
$exsign=mysqli_query($conn,$querysign);
$fetchsign=mysqli_fetch_array($exsign);
$querysign1="SELECT * FROM sliderone where id=8";
$exsign1=mysqli_query($conn,$querysign1);
$fetchsign1=mysqli_fetch_array($exsign1);
$editprofile=$fetchsign1['text'];
$editprofiletext=$fetchsign1['image'];
$logheader=$fetchlog['text'];
$logtext=$fetchlog['image'];
$signheader=$fetchsign['text'];
$signtext=$fetchsign['image'];
$slideroneimg1=$fetch1['image'];
$slideronetext1=$fetch1['text'];
$slideroneimg2=$fetch2['image'];
$slideronetext2=$fetch2['text'];
$slideroneimg3=$fetch3['image'];
$slideronetext3=$fetch3['text'];
$sub=$fetch5['text'];
$subtext=$fetch5['image'];
//guidelines
$guideheader=$fetch4['text'];
$guidedes=$fetch4['image'];

//services
$query4="SELECT * FROM services where id=1";
$ex5=mysqli_query($conn,$query4);
$f1=mysqli_fetch_array($ex5);

$query5="SELECT * FROM services where id=2";
$ex6=mysqli_query($conn,$query5);
$f2=mysqli_fetch_array($ex6);

$query6="SELECT * FROM services where id=3";
$ex7=mysqli_query($conn,$query6);
$f3=mysqli_fetch_array($ex7);

$query7="SELECT * FROM services where id=4";
$ex8=mysqli_query($conn,$query7);
$f4=mysqli_fetch_array($ex8);

$query8="SELECT * FROM services where id=5";
$ex9=mysqli_query($conn,$query8);
$f5=mysqli_fetch_array($ex9);


$queryadvance1="SELECT * FROM services where id=6";
$exadvance1=mysqli_query($conn,$queryadvance1);
$fadv1=mysqli_fetch_array($exadvance1);


$queryadvance2="SELECT * FROM services where id=7";
$exadvance2=mysqli_query($conn,$queryadvance2);
$fadv2=mysqli_fetch_array($exadvance2);
$queryadvance3="SELECT * FROM services where id=8";
$exadvance3=mysqli_query($conn,$queryadvance3);
$fadv3=mysqli_fetch_array($exadvance3);
$queryadvance4="SELECT * FROM services where id=9";
$exadvance4=mysqli_query($conn,$queryadvance4);
$fadv4=mysqli_fetch_array($exadvance4);

$serheader=$f1['header'];
$serheadertext=$f1['text'];
$ser1=$f2['header'];
$ser1des=$f2['text'];
$ser2=$f3['header'];
$ser2des=$f3['text'];
$ser3=$f4['header'];
$ser3des=$f4['text'];
$ser4=$f5['header'];
$ser4des=$f5['text'];


$seradv1=$fadv1['header'];
$seradvimg1=$fadv1['text'];
//print_r($seradvaneimg1,$seradvnace1);
$seradv3=$fadv2['header'];
$seradvimg3=$fadv2['text'];
$seradv4=$fadv3['header'];
$seradvimg4=$fadv3['text'];
$seradv2=$fadv4['header'];
$seradvimg2=$fadv4['text'];

//work
$query10="SELECT * from work where id='1'";
$query11="SELECT * from work where id='2'";
$query12="SELECT * from work where id='3'";
$query13="SELECT * from work where id='4'";
$query14="SELECT * from work where id='5'";
$ex11=mysqli_query($conn,$query10);
$ex12=mysqli_query($conn,$query11);
$ex13=mysqli_query($conn,$query12);
$ex14=mysqli_query($conn,$query13);
$ex15=mysqli_query($conn,$query14);
$fetch6=mysqli_fetch_array($ex11);
$fetch7=mysqli_fetch_array($ex12);
$fetch8=mysqli_fetch_array($ex13);
$fetch9=mysqli_fetch_array($ex14);
$fetch10=mysqli_fetch_array($ex15);
$workheader=$fetch6['header'];
$workheadertext=$fetch6['text'];
$work1header=$fetch7['header'];
$work1des=$fetch7['text'];
$work1img=$fetch7['image'];
$work2header=$fetch8['header'];
$work2des=$fetch8['text'];
$work2img=$fetch8['image'];
$work3header=$fetch9['header'];
$work3des=$fetch9['text'];
$work3img=$fetch9['image'];

$work4header=$fetch10['header'];
$work4des=$fetch10['text'];
$work4img=$fetch10['image'];


//features

$query15="SELECT * from features where id='1'";
$query16="SELECT * from features where id='2'";
$query17="SELECT * from features where id='3'";
$query18="SELECT * from features where id='4'";
$query19="SELECT * from features where id='5'";
$query20="SELECT * from features where id='6'";
$query21="SELECT * from features where id='7'";
$query22="SELECT * from features where id='8'";
$ex16=mysqli_query($conn,$query15);
$ex17=mysqli_query($conn,$query16);
$ex18=mysqli_query($conn,$query17);
$ex19=mysqli_query($conn,$query18);
$ex20=mysqli_query($conn,$query19);
$ex21=mysqli_query($conn,$query20);
$ex22=mysqli_query($conn,$query21);
$ex23=mysqli_query($conn,$query22);
$fetch11=mysqli_fetch_array($ex16);
$fetch12=mysqli_fetch_array($ex17);
$fetch13=mysqli_fetch_array($ex18);
$fetch14=mysqli_fetch_array($ex19);
$fetch15=mysqli_fetch_array($ex20);
$fetch16=mysqli_fetch_array($ex21);
$fetch17=mysqli_fetch_array($ex22);
$fetch18=mysqli_fetch_array($ex23);
$featureimage=$fetch18['header'];
$featureheader=$fetch11['header'];
$featureheadertext=$fetch11['text'];
$f1header=$fetch12['header'];
$f1text=$fetch12['text'];
$f2header=$fetch13['header'];
$f2text=$fetch13['text'];
$f3header=$fetch14['header'];
$f3text=$fetch14['text'];
$f4header=$fetch15['header'];
$f4text=$fetch15['text'];
$f5header=$fetch16['header'];
$f5text=$fetch16['text'];
$f6header=$fetch17['header'];
$f6text=$fetch17['text'];

//session prices
$query23="SELECT * from prices where id='1'";
$query24="SELECT * from prices where id='2'";
$query25="SELECT * from prices where id='3'";
$query26="SELECT * from prices where id='4'";
$ex24=mysqli_query($conn,$query23);
$ex25=mysqli_query($conn,$query24);
$ex26=mysqli_query($conn,$query25);
$ex27=mysqli_query($conn,$query26);
$fetch19=mysqli_fetch_array($ex24);
$fetch20=mysqli_fetch_array($ex25);
$fetch21=mysqli_fetch_array($ex26);
$fetch22=mysqli_fetch_array($ex27);
$sessionname=$fetch19['price'];

$session1price=$fetch20['price'];
$session1det1=$fetch20['time'];
$session2det1=$fetch20['des1'];
$session3det1=$fetch20['des2'];
$session4det1=$fetch20['des3'];
$session5det1=$fetch20['des4'];

$session2price=$fetch21['price'];
$session1det2=$fetch21['time'];
$session2det2=$fetch21['des1'];
$session3det2=$fetch21['des2'];
$session4det2=$fetch21['des3'];
$session5det2=$fetch21['des4'];

$session3price=$fetch22['price'];
$session1det3=$fetch22['time'];
$session2det3=$fetch22['des1'];
$session3det3=$fetch22['des2'];
$session4det3=$fetch22['des3'];
$session5det3=$fetch22['des4'];

//doctors

$query27="SELECT * from doctors where id='1'";
$query28="SELECT * from doctors where id='2'";
$query29="SELECT * from doctors where id='3'";
$query30="SELECT * from doctors where id='4'";
$query31="SELECT * from doctors where id='5'";
$ex28=mysqli_query($conn,$query27);
$ex29=mysqli_query($conn,$query28);
$ex30=mysqli_query($conn,$query29);
$ex31=mysqli_query($conn,$query30);
$ex32=mysqli_query($conn,$query31);
$fetchdoctor1=mysqli_fetch_array($ex28);
$fetchdoctor2=mysqli_fetch_array($ex29);
$fetchdoctor3=mysqli_fetch_array($ex30);
$fetchdoctor4=mysqli_fetch_array($ex31);
$fetchdoctor5=mysqli_fetch_array($ex32);

$doctorheader=$fetchdoctor1['img'];
$doctorheadertext=$fetchdoctor1['name'];
$doctor1img=$fetchdoctor2['img'];
$doctor1name=$fetchdoctor2['name'];
$doctor1text=$fetchdoctor2['text'];
$doctor1age=$fetchdoctor2['age'];
$doctor1des=$fetchdoctor2['description'];

$doctor2img=$fetchdoctor3['img'];
$doctor2name=$fetchdoctor3['name'];
$doctor2text=$fetchdoctor3['text'];
$doctor2age=$fetchdoctor3['age'];
$doctor2des=$fetchdoctor3['description'];
$doctor3img=$fetchdoctor4['img'];
$doctor3name=$fetchdoctor4['name'];
$doctor3text=$fetchdoctor4['text'];
$doctor3age=$fetchdoctor4['age'];
$doctor3des=$fetchdoctor4['description'];
$doctor4img=$fetchdoctor5['img'];
$doctor4name=$fetchdoctor5['name'];
$doctor4text=$fetchdoctor5['text'];
$doctor4age=$fetchdoctor5['age'];
$doctor4des=$fetchdoctor5['description'];

//feedback

$queryfeed1="SELECT * FROM feedback where id='1'";
$queryfeed2="SELECT * FROM feedback where id='2'";
$queryfeed3="SELECT * FROM feedback where id='3'";
$queryfeed4="SELECT * FROM feedback where id='4'";
$queryfeed5="SELECT * FROM feedback where id='5'";
$queryfeed6="SELECT * FROM feedback where id='6'";
$exfeed1=mysqli_query($conn,$queryfeed1);
$exfeed2=mysqli_query($conn,$queryfeed2);
$exfeed3=mysqli_query($conn,$queryfeed3);
$exfeed4=mysqli_query($conn,$queryfeed4);
$exfeed5=mysqli_query($conn,$queryfeed5);
$exfeed6=mysqli_query($conn,$queryfeed6);
$fetchfeed1=mysqli_fetch_array($exfeed1);
$fetchfeed2=mysqli_fetch_array($exfeed2);
$fetchfeed3=mysqli_fetch_array($exfeed3);
$fetchfeed4=mysqli_fetch_array($exfeed4);
$fetchfeed5=mysqli_fetch_array($exfeed5);
$fetchfeed6=mysqli_fetch_array($exfeed6);

$feedbackheader=$fetchfeed1['image'];
$feedtext=$fetchfeed1['name'];

$fdname1=$fetchfeed2['name'];
$fdtext1=$fetchfeed2['text'];
$fdphoto1=$fetchfeed2['image'];

$fdname2=$fetchfeed3['name'];
$fdtext2=$fetchfeed3['text'];
$fdphoto2=$fetchfeed3['image'];

$fdname3=$fetchfeed4['name'];
$fdtext3=$fetchfeed4['text'];
$fdphoto3=$fetchfeed4['image'];

$fdname4=$fetchfeed5['name'];
$fdtext4=$fetchfeed5['text'];
$fdphoto4=$fetchfeed5['image'];

$fdname5=$fetchfeed6['name'];
$fdtext5=$fetchfeed6['text'];
$fdphoto5=$fetchfeed6['image'];

//contact
$querycontact="SELECT * from details where id='1'";
$querycontactex=mysqli_query($conn,$querycontact);
$querycontactdata=mysqli_fetch_array($querycontactex);
$location=$querycontactdata['location'];
$locationar=$querycontactdata['locationar'];
$email=$querycontactdata['email'];
$timeopen=$querycontactdata['timeopen'];
$timeopenar=$querycontactdata['timeopenar'];
$number=$querycontactdata['number'];
$numberar=$querycontactdata['numberar'];;
$logo=$querycontactdata['logo'];
$lifeclinic=$querycontactdata['nameclinic'];
$maxdate=$querycontactdata['maxdate'];

//questions in test

$queryinsideloop="SELECT * from questions";
$exqus=mysqli_query($conn,$queryinsideloop);
$outputq=mysqli_fetch_all($exqus);
//print_r($outputq);

$q1=$outputq[0][1];
$q11=$outputq[0][2];
$q12=$outputq[0][3];
$q13=$outputq[0][4];
$q14=$outputq[0][5];

$q2=$outputq[1][1];
$q21=$outputq[1][2];
$q22=$outputq[1][3];
$q23=$outputq[1][4];
$q24=$outputq[1][5];

$q3=$outputq[2][1];
$q31=$outputq[2][2];
$q32=$outputq[2][3];
$q33=$outputq[2][4];
$q34=$outputq[2][5];

$q4=$outputq[3][1];
$q41=$outputq[3][2];
$q42=$outputq[3][3];
$q43=$outputq[3][4];
$q44=$outputq[3][5];

$q5=$outputq[4][1];
$q51=$outputq[4][2];
$q52=$outputq[4][3];
$q53=$outputq[4][4];
$q54=$outputq[4][5];

$q6=$outputq[5][1];
$q61=$outputq[5][2];
$q62=$outputq[5][3];
$q63=$outputq[5][4];
$q64=$outputq[5][5];

$q7=$outputq[6][1];
$q71=$outputq[6][2];
$q72=$outputq[6][3];
$q73=$outputq[6][4];
$q74=$outputq[6][5];

$q8=$outputq[7][1];
$q81=$outputq[7][2];
$q82=$outputq[7][3];
$q83=$outputq[7][4];
$q84=$outputq[7][5];

$q9=$outputq[8][1];
$q91=$outputq[8][2];
$q92=$outputq[8][3];
$q93=$outputq[8][4];
$q94=$outputq[8][5];

$q10=$outputq[9][1];
$q101=$outputq[9][2];
$q102=$outputq[9][3];
$q103=$outputq[9][4];
$q104=$outputq[9][5];

$welcometest=$outputq[10][1];
$bek=$outputq[10][2];
$bektext=$outputq[10][3];
$testname=$outputq[10][4];


//about
$querycontact="SELECT * from aboutus";
$exabout=mysqli_query($conn,$querycontact);
$outputabout=mysqli_fetch_all($exabout);

$aboutimg1=$outputabout[0][1];
$aboutheader1=$outputabout[0][2];
$abouttext1=$outputabout[0][3];

$aboutimg2=$outputabout[1][1];
$aboutheader2=$outputabout[1][2];
$abouttext2=$outputabout[1][3];

$aboutimg3=$outputabout[2][1];
$aboutheader3=$outputabout[2][2];
$abouttext3=$outputabout[2][3];

$aboutimg4=$outputabout[3][1];
$aboutheader4=$outputabout[3][2];
$abouttext4=$outputabout[3][3];

//socialmedia

$querysocial="SELECT * from socialmedia";
$exsocial=mysqli_query($conn,$querysocial);
$fetchsocail=mysqli_fetch_all($exsocial);

$facebook=$fetchsocail[0][1];
$instagram=$fetchsocail[0][2];
$twitter=$fetchsocail[0][3];
$telegram=$fetchsocail[0][4];

//knowledge

$querytypes="SELECT * FROM types";
$extypes=mysqli_query($conn,$querytypes);
$fetchtypes=mysqli_fetch_all($extypes);

$knowimg=$fetchtypes[0][1];
$knowtext=$fetchtypes[0][2];

$typedes=$fetchtypes[1][1];
$lastdif=$fetchtypes[1][2];

$typeheader1=$fetchtypes[2][1];
$typetext1=$fetchtypes[2][2];

$typeheader2=$fetchtypes[3][1];
$typetext2=$fetchtypes[3][2];

$typeheader3=$fetchtypes[4][1];
$typetext3=$fetchtypes[4][2];

$typeheader4=$fetchtypes[5][1];
$typetext4=$fetchtypes[5][2];

$typeheader5=$fetchtypes[6][1];
$typetext5=$fetchtypes[6][2];

$reasonquery="SELECT * from reasons";
$exreason=mysqli_query($conn,$reasonquery);
$fetchreason=mysqli_fetch_all($exreason);

$reason=$fetchreason[0][1];
$reason1=$fetchreason[0][2];
$reason2=$fetchreason[0][3];
$reason3=$fetchreason[0][4];
$reason4=$fetchreason[0][5];

$marks=$fetchreason[1][1];
$mark1=$fetchreason[1][2];
$mark2=$fetchreason[1][3];
$mark3=$fetchreason[1][4];
$mark4=$fetchreason[1][5];
$mark5=$fetchreason[1][6];

$when=$fetchreason[2][1];
$when1=$fetchreason[2][2];
$when2=$fetchreason[2][3];
$when3=$fetchreason[2][4];

$how=$fetchreason[3][1];
$how1=$fetchreason[3][2];
$how2=$fetchreason[3][3];
$how3=$fetchreason[3][4];

$querytest="SELECT * from tips";
$runtest=mysqli_query($conn,$querytest);
$resulttest=mysqli_fetch_all($runtest);

$advice11=$resulttest[0][1];
$advice12=$resulttest[0][2];
$advice13=$resulttest[0][3];
$advice14=$resulttest[0][4];


$advice21=$resulttest[1][1];
$advice22=$resulttest[1][2];
$advice23=$resulttest[1][3];
$advice24=$resulttest[1][4];


$advice31=$resulttest[2][1];
$advice32=$resulttest[2][2];
$advice33=$resulttest[2][3];
$advice34=$resulttest[2][4];

$advice41=$resulttest[3][1];
$advice42=$resulttest[3][2];
$advice43=$resulttest[3][3];
$advice44=$resulttest[3][4];

$advice51=$resulttest[4][1];
$advice52=$resulttest[4][2];
$advice53=$resulttest[4][3];
$advice54=$resulttest[4][4];




?>