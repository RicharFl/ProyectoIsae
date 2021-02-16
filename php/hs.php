<?php
include 'GeneraArray.php';
$Dato="AJ";

$Valo=new GeneraArray ($Dato);
$NumColumnas=$Valo ->Num_Colum($Dato);
var_dump ($NumColumnas);




 /*
$ABC='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $asi=$ABC[0].$ABC[9];
 //var_dump ($asi);
 //var_dump ($Dato);
 $ABTAM=strlen ($ABC);
 $Dat_size=strlen($Dato);
 //echo $Dato;
 //echo $Dat_size;
 //echo $ABTAM; 
$res=0;
$sal=0;

if ($Dat_size==1)
{
    for ($j=0 ; $j<=$ABTAM ; $j++)
    {
        $res ++;
      if ($ABC[ $j ] == $Dato)
      { 
         break;  
      }
     
    }
}
else {$res=$ABTAM;
    for ( $i=0 ; $i <= $ABTAM ; $i ++)
    {
        for ($j=0; $j<=$ABTAM ; $j++)
        {    $res ++;
            $asi="AA";
            $asi=$ABC[$i].$ABC[$j];
            if ($asi==$Dato)
            {
            $sal=12;
            break; 
            }
           
        }if ($sal==12) break;
    }
}





for ( $i=-1 ; $i <= $ABTAM ; $i ++)
{
    if ($i==-1)
    {
        for ($j=0 ; $j<=$ABTAM ; $j++)
        {
          if ($ABC[ $j ] == $Dato)
          { 
              $sal=12;
             break;  
          }
         $res ++;
        }
    }
 
 else{  
        for ($j=0;$j<=$ABTAM;$j++)
        {
            $asi=$ABC[$i].$ABC[$j];
            if ($asi==$Dato)
            {
            $sal=12;
              break; 
            }
            $res ++;
        }
    }
        if ($sal==12)
        {
            break;
        }
        
    
}

 //echo $asi; 
 
//echo $ABC;
echo $res;*/


?>