<?php

           
if (isset($_POST['submit'])) {
  
   $sname=$_SESSION['user']['id'];
   $branch=$_SESSION['user']['branch_id'];  
   //الكلي
   $x=0;
//المزاج الاكتئابي
$a1=0;
//تـأنيب الضمير او الشعور بالذنب
$a2=0;
//الانتحار
$a3=0;
//العمل واهتمامات الحياة
$a4=0;
//التكاسل والتثاقل  ,بطء التفكير والكلام والنشاط ,اللامبالاة والذهول
$a5=0;
//القلق النفسي
$a6=0;
//القلق الجسمي  اعراض معدية معوية: ارياح عسر هضم ,قلبية:خفقان وصداع,تنفسية
$a7=0;
//توهم المرض
$a8=0;
//الارق  في بداية الليل (صعوبةفي الدخول في النوم)
$a9=0;
//الارق في منتصف الليل(نوم متقطع)
$a10=0;
//الارق اخر الليل (الاستيقاظ ابكر من المعتاد,وعدم القدرة على النوم)
$a11=0;
//البلبلة و الارتياح (فرك الأيادي و التمشي جيئة وذهاباً)
$a12=0;
//أعراض جسمية(معدية معويه:فقدان الشهية,الاحساس بثقل في البطن,الامساك)
$a13=0;
//اعراض جسميه عامة(ثقل في الاطراف أو الظهر أو الرأس ,الام غير محددة في الظهر فقدان الحيوية وسهولة التعب)
$a14=0;
//اعراض جنسية (فقدان الرغبة الجنسية ,اضطرابات الطمث)
$a15=0;
//الاستبصار
$a16=0;
//نقص الوزن
$a17=0;

 $res1=$_POST["res1"];
 $res2=$_POST["res2"];
 $res3=$_POST["res3"];
 $res4=$_POST["res4"];
 $res5=$_POST["res5"];
 $res6=$_POST["res6"];
 $res7=$_POST["res7"];
 $res8=$_POST["res8"];
 $res9=$_POST["res9"];
 $res10=$_POST["res10"];
 $res11=$_POST["res11"];
 $res12=$_POST["res12"];
 $res13=$_POST["res13"];
 $res14=$_POST["res14"];
 $res15=$_POST["res15"];
 $res16=$_POST["res16"];
 $res17=$_POST["res17"];
 

 

 
 if($res1=="1"){
	 $x=$x+0;
    $a1=	"لاتوجد اعراض";
    
 }
 else if($res1=="2"){
    $x=$x+1;	
    $a1= "اعراض طفيفه";
 }
 else if($res1=="3"){
    $x=$x+2;	
    $a1="اعراض متوسطه";
 }
 else if($res1=="4"){
    $x=$x+3;
    $a1="اعراض متوسطه";	
 }
 else if($res1=="5"){
   $x=$x+4;	
   $a1= "اعراض حادة";
}



 if($res2=="1"){
    $x=$x+0;
    $a2="لاتوجد اعراض";
 }
 else if($res2=="2"){
    $x=$x+1;
    $a2="اعراض طفيفه";
 }
 else if($res2=="3"){
    $x=$x+2;
    $a2="اعراض متوسطه";
 }
 else if($res2=="4"){
    $x=$x+3;
    $a2="اعراض متوسطه";
 }
 else if($res2=="5"){
   $x=$x+4;
   $a2="اعراض حادة";
}




 if($res3=="1"){
	$x=$x+0;
   $a3 =  "لاتوجد اعراض";
 }
 else if($res3=="2"){
    $x=$x+1;
    $a3="اعراض طفيفه";
 }
 else if($res3=="3"){
    $x=$x+2;
    $a3=	"اعراض متوسطه";
 }
 else if($res3=="4"){
    $x=$x+3;
    $a3="اعراض متوسطه";
 }	
 else if($res3=="5"){
   $x=$x+4;
   $a3=	"اعراض حادة";

}	




  if($res4=="1"){
    $x=$x+0;
    $a4="لاتوجد اعراض";
 }
 else if($res4=="2"){
    $x=$x+1;
    $a4="اعراض طفيفه";
 }
 else if($res4=="3"){
	$x=$x+2;
   $a4="اعراض متوسطه";
 }
 else if($res4=="4"){
    $x=$x+3;
    $a4="اعراض متوسطه";
 }
 else if($res4=="5"){
   $x=$x+4;
   $a4="اعراض حادة";
}




 if($res5=="1"){
    $x=$x+0;
    $a5="لاتوجد اعراض";
 }
 else if($res5=="2"){
    $x=$x+1;
    $a5="اعراض طفيفه";
 }
 else if($res5=="3"){
    $x=$x+2;
    $a5="اعراض متوسطه";
 }
 else if($res5=="4"){
    $x=$x+3;
    $a5="اعراض متوسطه";
 }
 else if($res5=="5"){
   $x=$x+4;	
   $a5="اعراض حادة";
}



  if($res6=="1"){
    $x=$x+0;
    $a6="لاتوجد اعراض";
 }
 else if($res6=="2"){
    $x=$x+1;
    $a6="اعراض طفيفه";
 }
 else if($res6=="3"){
    $x=$x+2;
    $a6="اعراض متوسطه";
 }
else if($res6=="4"){
    $x=$x+3;
    $a6="اعراض متوسطه";
 }
 else if($res6=="5"){
   $x=$x+4;
   $a6="اعراض حادة";
}





 if($res7=="1"){
    $x=$x+0;
    $a7="لاتوجد اعراض";
 }
 else if($res7=="2"){
    $x=$x+1;	
    $a7="اعراض طفيفه";
 }
 else if($res7=="3"){
    $x=$x+2;	
    $a7="اعراض متوسطه";
 }
 else if($res7=="4"){
    $x=$x+3;
    $a7="اعراض متوسطه";
 }
 else if($res7=="5"){
   $x=$x+4;
   $a7="اعراض حادة";
}




 if($res8=="1"){
	$x=$x+0;	
   $a8="لاتوجد اعراض";
 }
 else if($res8=="2"){
    $x=$x+1;
    $a8="اعراض طفيفه";
 }
 else if($res8=="3"){
    $x=$x+2;
    $a8="اعراض متوسطه";
 }
 else if($res8=="4"){
    $x=$x+3;
    $a8="اعراض متوسطه";
 }
 else if($res8=="5"){
   $x=$x+4;
   $a8="اعراض حادة";
}





 if($res9=="1"){
	$x=$x+0;
   $a9="لاتوجد اعراض";
 }
 else if($res9=="2"){
    $x=$x+1;
    $a9="اعراض طفيفه";
 }
 else if($res9=="3"){
    $x=$x+2;
    $a9="توجد اعراض واضحة";
 }




 if($res10=="1"){
    $x=$x+0;
    $a10="لاتوجد اعراض";
 }
 else if($res10=="2"){
    $x=$x+1;
    $a10="اعراض طفيفه";
 }
 else if($res10=="3"){
	$x=$x+2;
   $a10="توجد اعراض واضحة";
 }


 if($res11=="1"){
    $x=$x+0;
    $a11="لاتوجد اعراض";
 }
 else if($res11=="2"){
    $x=$x+1;
    $a11="اعراض طفيفه";
 }
 else if($res11=="3"){
	$x=$x+2;
   $a11="توجد اعراض واضحة";
 }

 


 if($res12=="1"){
    $x=$x+0;	
    $a12="لاتوجد اعراض";
 }
 else if($res12=="2"){
    $x=$x+1;
    $a12="اعراض طفيفه";
 }
 else if($res12=="3"){
	$x=$x+2;
   $a12="توجد اعراض واضحة";
 }

 


 if($res13=="1"){
    $x=$x+0;
    $a13="لاتوجد اعراض";
 }
 else if($res13=="2"){
    $x=$x+1;
    $a13="اعراض طفيفه";
 }
 else if($res13=="3"){
	$x=$x+2;
   $a13="توجد اعراض واضحة";
 }

 


 if($res14=="1"){
    $x=$x+0;	
    $a14="لاتوجد اعراض";
 }
 else if($res14=="2"){
    $x=$x+1;
    $a14="اعراض طفيفه";
 }
 else if($res14=="3"){
	$x=$x+2;
   $a14="توجد اعراض واضحة";
 }



 if($res15=="1"){
    $x=$x+0;	
    $a15="لاتوجد اعراض";
 }
 else if($res15=="2"){
    $x=$x+1;
    $a15="اعراض طفيفه";
 }
 else if($res15=="3"){
	$x=$x+2;
   $a15="توجد اعراض واضحة";
 }



 if($res16=="1"){
    $x=$x+0;
    $a16="لاتوجد اعراض";
 }
 else if($res16=="2"){
    $x=$x+1;
    $a16="اعراض طفيفه";
 }
 else if($res16=="3"){
	$x=$x+2;
   $a16="توجد اعراض واضحة";
 }



 if($res17=="1"){
    $x=$x+0;
    $a17="لاتوجد اعراض";
 }
 else if($res17=="2"){
    $x=$x+1;
    $a17="اعراض طفيفه";
 }
 else if($res17=="3"){
	$x=$x+2;
   $a17="توجد اعراض واضحة";
 }



 if($x>=0 && $x<=7){
   $y="لايوجد اكتئاب";
   }
   else if($x>=8 && $x<=13){
      $y=" اكتئاب بسيط"; 
   }
   else if($x>=14 && $x<=18){
      $y=" اكتئاب متوسط";
   }
   else if($x>=19 && $x<=22){
      $y=" اكتئاب شديد";
   }
   else if($x>=23 ){
      $y=" اكتئاب  شديد جداً";
   }





 





$name=$_POST["name"];

$sql="INSERT INTO hamilton_exam(exam_mark,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,a15,a16,a17,names,branch,sname,all_exam ) VALUES ('$x','$a1','$a2','$a3',
'$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$name','$branch','$sname','$y')";
mysqli_query($con,$sql);
$extra="../";
echo "<script>window.location.href='".$extra."'</script>";















}