<?php
   
//求和函数--------------------------------------------------------
    function s($x){
        $sum = 0;
        while ( $x > 0 ) 
        { 
            $sum += $x % 10;
            $x /= 10;
         }
        return $sum;    
    }

//递归
    function s_2($x){
        
        while($sum_2 = s($x)){
           if (strlen($sum_2)>1){
               $x= $sum_2;
                continue;
           }
            else 
                break;
                  }
        return $sum_2;
    }

//---------------------------------------------------------------
   
    if(!isset($_POST['ssub']))
        $f1=$f2=$f3=$f4=$d1=$d2=$d3=$d4=$m=$d=$y="?";
    else{
         $f1=$f2=$f3=$f4=$d1=$d2=$d3=$d4=$m=$d=$y=0;

         $mon = $_POST['mon'];
         $day = $_POST['day'];
         $year = $_POST['year'];
         
         $m = s_2($mon); 
         $d = s_2($day);
         $y = s_2($year);
        
         $f3 = s_2($m+$d);
         $f4 = s_2($d+$y);
         $f2 = s_2($f3+$f4);
         $f1 = s_2($m+$y);

         $d1 = s_2(abs($d-$m));
         $d2 = s_2(abs($y-$d));
         $d3 = s_2(abs($d1-$d2));
         $d4 = s_2(abs($m-$y));
       

    }


?>

<!DOCTYPE html>
<html>
<head>
   <title>生命命盘</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
   <link rel="stylesheet" href="css/style.css" type="text/css"/>
 
</head>
<body>
    <form action="" method="post">

        <select name="year"> 
        <?php
            $i1=1900;
            while($i1<=2016){
        ?>
            <option value="<?php echo $i1;  ?>"> <?php echo $i1;  ?></option>  
        <?php
            $i1++;
            }
        ?>
        </select>年
            <select name="mon"> 
        <?php
            $i2=1;
            while($i2<=12){
        ?>
            <option value="<?php echo $i2;  ?>"> <?php echo $i2;  ?></option>  
        <?php
            $i2++;
            }
        ?>
        </select>月
            <select name="day"> 
        <?php
            $i3=1;
            while($i3<=31){
        ?>
            <option value="<?php echo $i3;  ?>"> <?php echo $i3;  ?></option>  
        <?php
            $i3++;
            }
        ?>
        </select>日
        <input type="submit" value="提交"  name="ssub"/>
    </form>
<hr/>
    <p class='f1'><?php echo $f1; ?></p>
    
    <div class="cir1">
        <p class='f2'><?php echo $f2;  ?></p>
        <div class="cir1_s"> </div>
        <p class="f3"><?php echo $f3; ?></p> 
        <p class="f4"><?php echo $f4 ;?></p>
    </div>
    
    <div class="mid">
        <div class="mon"> <?php echo $m ;?></div>
        <div class="day"> <?php echo $d; ?></div>
        <div class="year"><?php echo $y; ?> </div>
        <div style="clear:both"> </div>
        <div class="mon1">月</div>
        <div class="day1">日</div>
        <div class="year1">年</div>
    </div>

    <div class="cir2">
         <p class="d1"><?php echo $d1; ?></p> 
         <p class="d2"><?php echo $d2; ?></p>
         <div style="clear:both"></div>
         <div class="cir2_s"> </div>
         <p class='d3'><?php echo $d3; ?></p>
    </div>

    <p class='d4'><?php echo $d4; ?></p>
</body>
</html>